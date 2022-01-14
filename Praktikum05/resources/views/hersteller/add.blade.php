@extends('layouts.layout')

@section('content')
        <h1>Hersteller hinzufügen</h1>
        @include('snippets.error')

        {!! Form::open(['url' => 'hersteller/save']) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'herstellername...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('hersteller')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
