<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stephenjude\FilamentBlog\Models\Post;
use App\Models\Doctor;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::published()->get();
        return view('frontend.home', compact('posts'));
    }
    public function dangky(){
        return view('frontend.dangky');
    }
    public function postdangky(){
        return redirect()->route('otp');
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
    public function otp(){
        return view('frontend.otp');

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
