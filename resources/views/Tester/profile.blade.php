<!-- 
    - Nama Lengkap
    - Username
    - Jenis Kelamin
    - Alamat
    - Posisi
    - Test Centre name 
-->
@extends('layouts.tester')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">user Profile</div>
                                <div class="card-body">
                                    <div>
                                        Full Name: <b class="card-title">{{Auth::user()->name}}</b>
                                        <br>
                                        Username: <b class="card-title">{{Auth::user()->username}}</b>
                                        <br>
                                        Gender: <b class="card-title">{{Auth::user()->gender}}</b>
                                        <br>
                                        Address: <b class="card-title">{{Auth::user()->address}}</b>
                                        <br>
                                        Position: <b class="card-title">{{Auth::user()->as}}</b>
                                        <br>
                                        Test Centre: <b class="card-title">{{$officer->Centre->Name}}</b>
                                        <br>
                                        Status: <b class="card-title">{{$officer->status}}</b>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@stop