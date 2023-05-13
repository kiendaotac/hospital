@extends('frontend.layout.layout')
@section('content')
<div class="banner-item">
        <div class="left"><img class="normal" src="{{asset("assets/images/bs-tina.png")}}"></div>
        <div class="middle" style=" background-image:url('{{asset("assets/images/looking-out.jpg")}}')"></div>
        <div class="right"><img class="normal" src="{{asset("assets/images/doctor-banner.png")}}"></div>
    </div><div class="breadcumb">
    <div class="container"></div>
</div>
<div class="content-page single-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4"> <img
                            src="{{asset('storage/'.$doctor->avatar)}}">
                        <!-- <div class="text-center"> <button class="more" data-toggle="modal"
                                data-target="#exampleModal5">Đặt lịch
                                hẹn khám</button></div>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content"> <button class="modal-close modal-toggle "
                                        data-dismiss="modal" aria-label="Close">X</button>
                                    <div class="modal-body">
                                        <h2 class="modal-title">Đặt lịch hẹn</h2>
                                        <div class="appointment-form-popup">
                                            <p class="wpcf7-contact-form-not-found"><strong>Error:</strong> Contact form
                                                not found.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <h2 class="page-title b700" >{{$doctor->name}}</h2>
                        <div class="list-info">
                            <table cellpadding="10">
                                <tbody>
                                    <tr>
                                        <td> <strong>Chuyên Khoa</strong></td>
                                        <td>
                                            <p class="detail">{{$doctor->specialist}}</p>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td> <strong>Ngôn ngữ</strong></td>
                                        <td>
                                            <p class="detail">Anh</p>
                                        </td>
                                    </tr> -->
                                    <tr>
                                        <td> <strong>Học vấn</strong></td>
                                        <td>
                                            <p class="detail"></p>
                                            <p>{{$doctor->title}}</p>
                                            <p></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Hoạt động chuyên ngành</strong></td>
                                        <td>
                                            <p class="detail"></p>
                                            {{$doctor->activity}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <strong>Nghiên cứu chuyên sâu</strong></td>
                                        <td>
                                            <p class="detail"></p>
                                            {{$doctor->research}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="achievement">
                    <h3>Thành tựu chuyên môn</h3>
                    <div class="detail"></div>
                </div>
                <div class="advisory">
                    <h3>Tư vấn của bác sĩ</h3>
                    <ul></ul>
                </div> -->
            </div>
            <div class="col-md-4">
                <div class="sidebar"></div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection