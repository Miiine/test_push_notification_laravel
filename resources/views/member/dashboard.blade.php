@extends('layouts.master')

@section('title')
    Dashboard Member
@endsection

@section('content')
    <h2>Hi, {{ Auth::user()->name }}</h2>

   <form action="{{ route('logout') }}" method="post">
        @csrf

        <button type="submit" class="btn btn-danger mt-4">Log out</button>
   </form>
@endsection
