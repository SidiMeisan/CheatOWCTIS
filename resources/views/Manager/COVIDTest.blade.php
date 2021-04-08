@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-card mb-12 card">
                                <div class="card-body"><h5 class="card-title">COVID Test Results</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Patient</th>
                                            <th>Test date</th>
                                            <th>Results</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($tests as $index => $thisTest)
                                        <tr>
                                            <th scope="row">{{$index}}</th>
                                            <td>{{$thisTest->Patients->Users->name}}</td>
                                            <td>{{$thisTest->test_date}}</td>
                                            <td>{{$thisTest->result}}</td>
                                            <td>{{$thisTest->status}}</td>
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