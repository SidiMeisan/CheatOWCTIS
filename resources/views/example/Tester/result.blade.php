@extends('layouts.tester')
@section('content')
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">Login
                                </div>
                                <div class="card-body" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="status" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Status') }}
                                            </label>

                                            <div class="col-md-6">
                                                <select name="status" id="status"
                                                class="form-control js-kit-single">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>

                                                @error('status')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="result" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Result') }}
                                            </label>

                                            <div class="col-md-6">
                                                <select name="result" id="result"
                                                class="form-control js-kit-single">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>

                                                @error('result')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row mb-0">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="submit" class="btn btn-primary">
                                                    Submit
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
@endsection

@section('customejs')

<script>
    $(document).ready(function() {
        $('.js-patient-single').select2({
            theme: "bootstrap"
        });
        $('.js-kit-single').select2({
            theme: "bootstrap"
        });
        $('.js-symptoms-multiple').select2({
            theme: "bootstrap"
        });
    });
</script>
@endsection

