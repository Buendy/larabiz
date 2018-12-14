@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">

        <div class="col-offset-2 col-8">
            <div class="card">
                <div class="card-heading">
                    Create Listing
                </div>
                <div class="card-body">
                    {!! Form::open(['action' => 'ListingsController@store', 'method' => 'post']) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('website', '', ['placeholder' => 'Company Website']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact email']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact phone']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Bussiness address'])}}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this bussiness'])}}
                    {{ Form::bsSubmit('submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
