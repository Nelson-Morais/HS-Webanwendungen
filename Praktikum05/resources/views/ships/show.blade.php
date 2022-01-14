@extends('layouts.layout')

@section('content')
        <h1>Das Schiff "{{ $entity->name}}"</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>BRT</th>
                    <th>Length</th>
                    <th>Width</th>
                    <th>Weight</th>
                    <th>Power</th>
                    <th>Motor</th>
                    <th>Modell</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>{{ $entity->name}}</td>
                    <td>{{ $entity->brt}}</td>
                    <td>{{ $entity->length}}</td>
                    <td>{{ $entity->width}}</td>
                    <td>{{ $entity->weight}}</td>
                    <td>{{ $entity->power}}</td>
                    <td>{{ $entity->motor}}</td>
                    <td>@if($entity->shipmodel) {{ $entity->shipmodel->name }} @else Kein Modell @endif</td>
                    <td>
                        <a href="{{url('ships/edit/'.$entity->id)}}" class="btn btn-success">Edit</a>

                    </td>
                        <th></th>
                    </tr>

            </tbody>
        </table>
@endsection
