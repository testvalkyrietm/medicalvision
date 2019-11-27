@extends('layouts.app')
@section('content')
    {{ Form::open(array('url' => '/registration-form', 'method'=>'post' )) }}
        @csrf
        <div class="row" >
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::select('title', $person_titles, null, ['class'=>'custom-select']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('first_name', 'First Name') }}
                    {{ Form::text('first_name', '', ['required'=>'required', 'class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('last_name', 'Last Name') }}
                    {{ Form::text('last_name', '', ['required'=>'required', 'class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('center_name', 'Center Name') }}
                    {{ Form::text('center_name', '', ['class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', '', ['required'=>'required', 'class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('country', 'Country') }}
                    {{ Form::select('country', $countries, null, ['required'=>'required', 'class'=>'custom-select']) }}
                </div>
            </div>
            <div class="col-md-6" >
                <div class="form-group">
                    {{ Form::label('language', 'Language') }}
                    {{ Form::select('language', $languages, null, ['required'=>'required', 'class'=>'custom-select']) }}
                </div>
            </div>
            <div class="col-md-12" >
                <div class="form-group">
                    {{ Form::submit('Submit', ['required'=>'required', 'class'=>'btn btn-primary']) }}
                </div>
            </div>

        </div>

    {{ Form::close() }}
@endSection
