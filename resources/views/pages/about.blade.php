@extends('layouts.master')
@section('css')
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      About Us
    </div>
    <div class="card-body">
      {{ $description }}
    </div>
  </div>
@endsection

@section('script')
@endsection