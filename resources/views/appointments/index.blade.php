@extends('layouts.app')
@section('content')

<table  id="example2" class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">pain</th>
      <th scope="col">Date</th>
      <th scope="col">stauts</th>
      <th scope="col">Doctor</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($appointments as $appointment)
    <tr>
      <th scope="row">{{$appointment->pain ? $appointment->pain->name : 'not exist'}}</th>
      <td>{{$appointment->date}}</td>
      <td><span class="badge badge-warning">{{$appointment->status}}</span> </td>
      <td>Doctor</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection