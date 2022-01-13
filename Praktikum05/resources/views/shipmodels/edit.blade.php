@extends('layouts.layout')

@section('content')
        <h1>Schiffsmodell editieren</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'shipmodels/update/'.$entity->id]) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('shipmodels')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
