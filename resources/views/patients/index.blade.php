@extends('layouts.app')
@section('content')

<div class="card m-5 pb-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Your Profile</h5>
    <a href="#" class="card-link">Go to profile</a>
  </div>
</div>
<div class="card m-5 pb-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Your Appointment History</h5>
    <a href="{{route('appointments.index')}}" class="card-link">See history</a>
  </div>
  </div>
  <div class="card m-5 pb-5" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">New Appointment</h5>
    <a href="{{route('appointments.create')}}" class="card-link">Add</a>
  </div>
</div>
@endsection