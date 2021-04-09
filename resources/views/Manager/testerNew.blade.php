@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">New Tester
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{route('saveTesters')}}">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                            {{ __('Name') }}
                                        </label>

                                            <div class="col-md-6">
                                                <input id="name" type="text" 
                                                    class="form-control @error('name') is-invalid @enderror" name="name" 
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="username" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Username') }}
                                            </label>

                                            <div class="col-md-6">
                                                <input id="username" type="text" 
                                                    class="form-control @error('username') is-invalid @enderror" name="username" 
                                                    value="{{ old('username') }}" required>

                                                @error('username')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Password') }}
                                            </label>

                                            <div class="col-md-6">
                                                <input id="password" type="password" 
                                                    class="form-control @error('password') is-invalid @enderror" 
                                                    name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Register') }}
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