@extends('layouts.master')
@section('css')
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      Profile
    </div>
    <div class="card-body">
    <ul>
        <li>{{ $user }}</li>
        <li>{{ $gender }}</li>
        <li>{{ $birthday }}</li>
    </ul>
    <a href="#" class="btn btn-primary">Edit Profile</a>
    </div>
  </div>
@endsection

@section('script')
@endsection