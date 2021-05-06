@extends('layouts.patient')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-card mb-12 card">
                            <div class="card-body"><h5 class="card-title">COVID Testing Result</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Test Date</th>
                                            <th>Test Kit</th>
                                            <th>Results</th>
                                            <th>Status</th>
                                            <th>Test Centre</th>
                                            <th>Expired</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach($tests as $index => $thisTest)
                                        @if($thisTest->testExpired()==false)
                                        <tr>
                                            @php
                                                $i = $i+1;
                                            @endphp
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$thisTest->TestDate()}}</td>
                                            <td>{{$thisTest->Kits->name}}</td>
                                            <td>{{$thisTest->result}}</td>
                                            <td>{{$thisTest->status}}</td>
                                            <td>{{$thisTest->Office->Name}}</td>
                                            <td>{{$thisTest->Expired()}}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
                                <div class="card-body"><h5 class="card-title">COVID Testing History</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Test Date</th>
                                            <th>Test Kit</th>
                                            <th>Results</th>
                                            <th>Status</th>
                                            <th>Test Centre</th>
                                            <th>Expired</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        @foreach($tests as $index => $thisTest)
                                        @if($thisTest->testExpired()==true)
                                        <tr>
                                            @php
                                                $i = $i+1;
                                            @endphp
                                            <th scope="row">{{$i}}</th>
                                            <td>{{$thisTest->TestDate()}}</td>
                                            <td>{{$thisTest->Kits->name}}</td>
                                            <td>{{$thisTest->result}}</td>
                                            <td>{{$thisTest->status}}</td>
                                            <td>{{$thisTest->Office->Name}}</td>
                                            <td>{{$thisTest->Expired()}}</td>
                                        </tr>
                                        @endif
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