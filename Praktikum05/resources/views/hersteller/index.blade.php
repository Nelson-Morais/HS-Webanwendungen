@extends('layouts.layout')

@section('content')
        <h1>Alle hersteller</h1>
        {{ $entities->links() }}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Bearbeiten</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entities as $index=>$hersteller)
                    <tr>
                        <td>{{ $hersteller->name}}</td>

                        <td>
                            <a href="{{url('hersteller/show/'.$hersteller->id)}}" class="btn btn-success">Show</a>
                            <a href="{{url('hersteller/edit/'.$hersteller->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('hersteller/delete/'.$hersteller->id)}}" class="btn btn-danger">Del</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td>
                        <a href="{{url('hersteller/add')}}" class="btn btn-success">Add</a>
                    </td>
                </tr>
            </tfoot>
        </table>
        {{ $entities->links() }}
@endsection
