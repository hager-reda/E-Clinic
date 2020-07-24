@extends('layouts.app')
@section('content')

<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Your Profile</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <a href="#" class="card-link">Go to profile</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Your Appointment History</h5>
    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
    <a href="{{route('appointments.index')}}" class="card-link">See history</a>
  </div>
</div>
@endsection