@extends('dashboard.partials.main')

@section('main')
  <div style="margin-top: 20px"></div>
  <h1>Welcome home, {{ auth()->user()->name }}</h1>
@endsection