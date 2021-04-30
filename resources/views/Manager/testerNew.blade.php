@extends('layouts.manager')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">Register New Tester
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
                                            <label for="gender" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Gender') }}
                                            </label>
                                            <div class="col-md-6">
                                                <div class="position-relative form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" id="male" name="gender" value="male" 
                                                        class="form-check-input"> 
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="position-relative form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" id="female" name="gender" value="female" 
                                                        class="form-check-input"> 
                                                        Female
                                                    </label>
                                                </div>
                                                @error('gender')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="address" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Address') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input id="address" type="text" 
                                                    class="form-control @error('address') is-invalid @enderror" name="address" 
                                                    value="{{ old('address') }}" required 
                                                    autocomplete="address" autofocus>

                                                @error('address')
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

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Confirm Password') }}
                                            </label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" 
                                                class="form-control" name="password_confirmation" required>
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