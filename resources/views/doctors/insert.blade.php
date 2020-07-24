@extends('layouts.app')
@section('content')

<form role="form" method="POST" enctype="multipart/form-data" action="{{route('doctors.save')}}">
    @csrf
    <div class="card-body">
    @method('PUT')
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control @error('first name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter first name" name="first_name">
                    @error('first name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
<!-- ################################################################################################################################## -->
<div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control @error('last name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter last name" name="last_name">
                    @error('last name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

<!-- ################################################################################################################################## -->
<div class="form-group">
                    <label for="exampleInputPhone">Phone </label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" id="exampleInputPhone" placeholder="User phone" name="phone"> 
                    @error('mobile')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
<!-- ################################################################################################################################## -->
<div class="form-group">
                    <label for="exampleInputEmail1">Date Of Birth</label>
                    <input type="date" class="form-control @error('date_of_bith') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter your date of birth" name="date_of_birth">
                    @error('date_of_birth')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
<!-- ################################################################################################################################## -->
<div class="form-group">
                    <label>Gender</label>
                    <select class="form-control @error('gender') is-invalid @enderror" name='gender'>
                    <option>Male</option>
                    <option>Female</option>
                    </select>
    </div>
<!-- ################################################################################################################################## -->
<div class="form-group">
                    <label>Select Country</label>
                    <select class="form-control @error('country') is-invalid @enderror" name='country'>
                    <option>Egypt</option>
                    <option>Lebanon</option>
                    <option>Italy</option>
                    <option>Other</option>
                    </select>
    </div>
<!-- ################################################################################################################################## -->
<div class="form-group">
                    <label>Select Specialty</label>
                    <select class="form-control @error('specialty') is-invalid @enderror" name='specialty'>
                    @foreach($specialties as $specialty)
                    <option value="{{$specialty->id}}">{{$specialty->name}}</option>
                    @endforeach
                    </select>
    </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"> Submit </button>
                </div>
              </form>
            </div>
</form>

@endsection