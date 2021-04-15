@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="main-card mb-12 card">
                                <div class="card-body"><h5 class="card-title">Test Kits</h5>
                                    <table class="mb-0 table table-hover">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>#</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Kits as $data => $Kits)
                                        
                                        <tr>
                                            <th scope="row">{{$data+1}}</th>
                                            <td>{{$Kits->name}}</td>
                                            <td>{{$Kits->available}}</td>
                                            <td>@if($Kits->available <= 30 && $Kits->available >5)
                                                    Ordering new batch
                                                @endif
                                                @if($Kits->available > 30 )
                                                    Available
                                                @endif
                                                @if($Kits->available < 5 )
                                                    Reserve stock
                                                @endif</td>
                                            <td><a href="{{url('/Manager/testkits/edit/'.$Kits->id)}}">Edit</a></td>
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