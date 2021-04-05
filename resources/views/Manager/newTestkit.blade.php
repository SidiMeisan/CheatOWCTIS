@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">New Test Kit
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="#">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Test Kit Name"') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control 
                                                    @error('name') is-invalid @enderror" 
                                                    name="name" value="{{ old('name') }}" 
                                                    required  autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                        <div class="form-group row">
                                            <label for="Quantity" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Quantity"') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input id="Quantity" type="text" class="form-control 
                                                    @error('Quantity') is-invalid @enderror" 
                                                    name="Quantity" value="{{ old('Quantity') }}" 
                                                    required  autofocus>

                                                @error('Quantity')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Submit') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
@stop