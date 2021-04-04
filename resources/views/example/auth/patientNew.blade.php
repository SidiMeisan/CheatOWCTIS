@extends('layouts.patient')
@section('content')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="main-card mb-6 card">
                                <div class="card-header">Symptoms
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="#">
                                        @csrf

                                        <div class="form-group row">
                                            <label for="symptoms" class="col-md-4 col-form-label text-md-right">
                                                {{ __('Symptoms') }}
                                            </label>

                                            <div class="col-md-6">
                                                <select name="symptoms[]" id="symptoms"
                                                class="form-control js-symptoms-multiple" multiple="multiple">
                                                    <option value="volvo">Volvo</option>
                                                    <option value="saab">Saab</option>
                                                    <option value="mercedes">Mercedes</option>
                                                    <option value="audi">Audi</option>
                                                </select>

                                                @error('symptoms')
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