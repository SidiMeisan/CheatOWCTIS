@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-card mb-12 card">
                                <div class="card-body"><h5 class="card-title">Tester</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        @foreach($Testers as $data => $Tester)
                                        <tr>
                                            <th scope="row">{{$data+1}}</th>
                                            <td>{{$Tester->Users->name}}</td>
                                            <td>{{$Tester->Users->username}}</td>
                                            <td>{{$Tester->status}}</td>
                                            <td>
                                                <a class="btn btn-warning"
                                                    href="{{url('/Manager/testers/'.$Tester->id.'/delete')}}">
                                                    Delete
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@stop