@extends('layouts.main')

@section('content')
    <br>
<div class="row">
    <div class="small-6 small-centered columns">
        <h3>Info Pengiriman</h3>

        {!! Form::open(['route' => 'checkout.shipping', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

        <div class="form-group">
            {{ Form::label('addressline', 'Alamat') }}
            {{ Form::text('addressline', null, array('class' => 'form-control','required', 'minlength' => 10)) }}
        </div>

        <div class="form-group">
            {{ Form::label('city', 'Kota') }}
            {{ Form::text('city', null, array('class' => 'form-control', 'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('state', 'Provinsi') }}
            {{ Form::text('state', null, array('class' => 'form-control', 'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('zip', 'Kode Pos') }}
            {{ Form::number('zip', null, array('class' => 'form-control', 'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('country', 'Negara') }}
            {{ Form::text('country', null, array('class' => 'form-control', 'required')) }}
        </div>
        <div class="form-group">
            {{ Form::label('phone', 'Nomer HP') }}
            {{ Form::number('phone', null, array('class' => 'form-control', 'required')) }}
        </div>

        {{ Form::submit('Proses', array('class' => 'button success')) }}
        {!! Form::close() !!}

       
        
    </div>


</div>



@endsection