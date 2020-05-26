@extends('layouts.main')

@section('content')

<div class="row container-fluid">

    <div class="col-md-10 offset-1">

        <div class="card">

            <div class="card-header">
                Register Customer
            </div>

            <div class="card-body">
                
                {!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}

                <div class="form-group row">
                    <label for="fname" class="col-md-2 col-form-label text-md-right">{{ __('First Name') }}</label>

                    <div class="col-md-10">
                        <input id="center_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autofocus>

                        @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="lname" class="col-md-2 col-form-label text-md-right">{{ __('Last Name') }}</label>

                    <div class="col-md-10">
                        <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autofocus>

                        @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('Email') }}</label>

                    <div class="col-md-10">
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="id_no" class="col-md-2 col-form-label text-md-right">{{ __('Identification Number') }}</label>

                    <div class="col-md-10">
                        <input id="number" type="text" class="form-control @error('id_no') is-invalid @enderror" name="id_no" value="{{ old('id_no') }}" required autofocus>

                        @error('id_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                
                {!! Form::hidden('role', 1) !!}
                {!! Form::hidden('password', " ") !!}

                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Create Customer') }}
                        </button>

                    </div>
                </div>


                {!!Form::close()!!}

            </div>

        </div>

    </div>

</div>

@endsection
