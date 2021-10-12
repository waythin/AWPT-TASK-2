@extends('layouts.app')

@section('content')
<table class="table table-borded">
    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>

    </tr>
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->name}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->email}}</td>
        <td><a href= "/student/edit/{{$customer->name}}/{{$customer->phone}}/{{$customer->email}}">Edit </a> </td>
    </tr>
    @endforeach
</table>

@endsection 