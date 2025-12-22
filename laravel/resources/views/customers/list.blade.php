@extends('layouts.temp')


@section('add-to-head')
<script src=""></script>
@endsection




@section('content')
<h1>Customers</h1>
<p>Here is the list of all the customers!</p>

<table>
<tr>
<td>id</td><td>name</td><td>surname</td><td>birthYear</td>
</tr>

@foreach($customers as $customer)
<tr>
<td>{{ $customer->id }}</td>
<td>{{ $customer->name }}</td>
<td>{{ $customer->surname }}</td>
<td>{{ $customer->birthYear }}</td>
</tr>
@endforeach

</table>
@endsection