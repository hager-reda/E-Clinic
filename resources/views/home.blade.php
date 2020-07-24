@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                      
            <div class="card">
                <div class="card-header">{{ __('Welcome to E-Clinic') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Please Continue Your Information') }}
                </div>
            </div>
        </div>
       
    </div>
    <div class="btn-group btn-group-l">
                      <a class="btn btn-primary btn-l " href="{{route('patients.insert')}}">
                          <i class="fas fa-folder"> </i>Patient</a>
             </div>
             <div class="btn-group btn-group-l">
                      <a class="btn btn-primary btn-l " href="{{route('doctors.insert')}}">
                          <i class="fas fa-folder"> </i>Doctor</a>
             </div>
</div>
@endsection
