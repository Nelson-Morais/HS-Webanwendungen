@extends('layouts.layout')

@section('content')
        <h1>Schiff hinzufügen</h1>
        @include('snippets.error')
        {!! Form::model($entity, ['url' => 'ships/update/'.$entity->id]) !!}
            {!! Form::select('shipmodel_id', ShipmodelClass::orderBy('name')->get()->pluck('name', 'id'), null, ['class'=>'form-control']) !!}
            <br/>
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Schiffsname...']) !!}
            <br/>
            {!! Form::text('brt', null, ['class'=>'form-control', 'placeholder'=>'BRT...']) !!}
            <br/>
            {!! Form::text('length', null, ['class'=>'form-control', 'placeholder'=>'length...']) !!}
            <br/>
            {!! Form::text('width', null, ['class'=>'form-control', 'placeholder'=>'width...']) !!}
            <br/>
            {!! Form::text('weight', null, ['class'=>'form-control', 'placeholder'=>'weight...']) !!}
            <br/>
            {!! Form::text('power', null, ['class'=>'form-control', 'placeholder'=>'power...']) !!}
            <br/>
            {!! Form::text('motor', null, ['class'=>'form-control', 'placeholder'=>'motor...']) !!}
            <br/>
            {!! Form::submit('Speichern', ['class'=>'btn btn-success']) !!}
            <a href="{{url('ships')}}" class="btn btn-danger">Abbrechen</a>

        {!! Form::close() !!}
@endsection
