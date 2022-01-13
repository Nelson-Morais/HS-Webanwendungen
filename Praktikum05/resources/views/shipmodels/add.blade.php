@extends('layouts.layout')

@section('content')
        <h1>Schiffsmodell hinzufügen</h1>
        @include('snippets.error')

        {!! Form::open(['url' => 'shipmodels/save']) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('shipmodels')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
