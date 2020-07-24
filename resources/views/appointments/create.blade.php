@extends('layouts.app')
@section('content')

<form role="form" method="POST" enctype="multipart/form-data" action="{{route('appointments.store')}}">
    @csrf
    <div class="form-group">
                    <label>What is your Pain</label>
                    <select class="form-control @error('pain_id') is-invalid @enderror" name='pain_id'>
                    @foreach($pains as $pain)
                    <option value="{{$pain->id}}">{{$pain->name}}</option>
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