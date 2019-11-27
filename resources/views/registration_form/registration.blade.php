@extends('layouts.app')
@section('content')
    {{ Form::open(array('url' => '/registration-form', 'method'=>'post' )) }}
        @csrf
        <div class="row" >
            <div class="col-md-2" >
                {{ Form::label('title', 'Title') }}
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::select('title', $person_titles, null, ['class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-2" >
                {{ Form::label('first_name', 'First Name') }}
            </div>
            <div class="col-md-4">
                <div class="form-group">
                {{ Form::text('first_name', '', ['required'=>'required', 'class'=>'form-control']) }}
                </div>
            </div>
            <div class="col-md-2" >
                {{ Form::label('last_name', 'Last Name') }}
            </div>
            <div class="col-md-4">
                {{ Form::text('last_name', '', ['required'=>'required', 'class'=>'form-control']) }}
            </div>
            <div class="col-md-2" >
                {{ Form::label('center_name', 'Center Name') }}
            </div>
            <div class="col-md-4">
                {{ Form::text('center_name', '', ['class'=>'form-control']) }}
            </div>
            <div class="col-md-2" >
                {{ Form::label('email', 'Email') }}
            </div>
            <div class="col-md-4">
                {{ Form::text('email', '', ['required'=>'required', 'type'=>'email', 'class'=>'form-control']) }}
            </div>
            <div class="col-md-2" >
                {{ Form::label('country', 'Country') }}
            </div>
            <div class="col-md-4">
                {{ Form::select('country', $countries, null, ['required'=>'required', 'class'=>'form-control']) }}
            </div>
            <div class="col-md-2" >
                {{ Form::label('language', 'Language') }}
            </div>
            <div class="col-md-4">
                {{ Form::select('language', $languages, null, ['required'=>'required', 'class'=>'form-control']) }}
            </div>
            <div class="col-md-12" >
                {{ Form::submit('Submit', ['required'=>'required', 'class'=>'btn btn-primary']) }}
            </div>

        </div>

    {{ Form::close() }}
@endSection
