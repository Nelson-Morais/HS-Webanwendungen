@extends('layouts.layout')

@section('content')
        <h1>Hersteller editieren</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'hersteller/update/'.$entity->id]) !!}
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Herstellername...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('hersteller')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
