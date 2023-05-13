<?php

namespace App\Http\Controllers\Frontend;

use App\Enums\StatusEnum;
use App\Events\CustomerMakeAppointment;
use App\Events\CustomerRegistered;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Customer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Seshac\Otp\Otp;
use Stephenjude\FilamentBlog\Models\Post;
use App\Models\Doctor;
use Illuminate\Support\Str;
\Carbon\Carbon::setLocale('vi');

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$posts = Post::published()->latest()->take(6)->get();
        return view('frontend.home', compact('posts'));
    }
    public function dangky(Request $request){
        $phone = trim($request->telephone);
        $appointment = Appointment::where('phone', $phone)->first();
        $current = Carbon::parse('08:00');
        $doctors = Doctor::all();

        return view('frontend.dangky', array(
            'appointment' => $appointment,
            'current'     => $current,
            'doctors'     => $doctors
        ));
    }
    public function postdangky(Request $request){
        $params         = $request->only(['name', 'phone', 'dob', 'service']);
        $params['time'] = Carbon::parse($request->date . ' ' . $request->options);
        $appointment    = Appointment::create($params);
        $customer       = Customer::where('phone', $request->phone)->first();
        if ($customer) {
            CustomerMakeAppointment::dispatch($customer, $appointment);
            return redirect()->route('home');
        } else {
            $customer = Customer::create(
                [
                    'phone'    => $request->phone,
                    'email'    => $request->email,
                    'name'     => $request->name,
                    'password' => bcrypt(Carbon::parse($request->date)->format('dmY')), // vd: 15101992
                    'status'   => StatusEnum::INACTIVE->value
                ]);
            CustomerRegistered::dispatch($customer);
            return redirect()->route('otp', compact('customer'));
        }
    }
    public function blogs(){
        $blogs = Post::published()->get();
        return view('frontend.blog', compact('blogs'));
    }
    public function post($slug){
        $post = Post::where('slug',$slug)->first();
        return view('frontend.post_detail', compact('post'));
    }

    public function doctors(){
        $doctors = Doctor::all();
        return view('frontend.doctor', compact('doctors'));
    }
    public function doctor_detail($id){
        $doctor = Doctor::where('id',$id)->first();
        return view('frontend.doctor_detail', compact('doctor'));
    }
    public function nhaptelephone(Request $request){
        $telephone = $request->telephone;
        return redirect()->route('dangky',  compact('telephone'));
    }

    public function otp(Request $request, Customer $customer)
    {
        abort_unless(!!$customer, '401', 'Khách hàng không tồn tại');

        return view('frontend.otp', compact('customer'));
    }
    public function postOtp(Request $request)
    {
        $request->validate([
            'id'  => ['required', 'numeric', 'min:1'],
            'otp' => ['required']
        ]);
        $data     = $request->only(['id', 'otp']);
        $customer = Customer::find($data['id']);
        if (!$customer) {
            return redirect()->back()->withErrors(['customer' => 'Khách hàng không tồn tại']);
        }
        $verify = Otp::validate($customer->email, $data['otp']);
        if (!$verify->status) {
            return redirect()->back()->withErrors(['otp' => $verify->message]);
        }
        $customer->update(['status' => StatusEnum::ACTIVE->value]);

        return view('frontend.success');
    }
    public function gioithieu(){
        return view('frontend.about');

    }
    public function dichvu(){
        return view('frontend.dichvu');

    }
    public function contact(){
        return view('frontend.contact');

    }
    public function history(){
        $user = Auth::guard('customer')->user();
        $user->load(['appointments' => function($q) {
            $q->with('doctor')->latest();
        }]);
        $appointments = $user->appointments;
        return view('frontend.history', compact('appointments'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
