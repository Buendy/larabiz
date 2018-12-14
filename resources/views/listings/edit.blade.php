@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card-header">
                    Listing Edit <a href="/dashboard" class="btn btn-success">Dashboard</a>
                </div>
                <div class="card-body">
                    {!! Form::model($listings, ['action' =>['ListingsController@update', $listings->id], 'method' => 'put']) !!}
                    {{ Form::bsText('name') }}
                    {{ Form::bsText('website') }}
                    {{ Form::bsText('email') }}
                    {{ Form::bsText('phone') }}
                    {{ Form::bsText('address')}}
                    {{ Form::bsTextArea('bio')}}
                    {{ Form::bsSubmit('submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


    @endsection
