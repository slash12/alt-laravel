@extends('layouts.app')

@section('content')
<a href="/users" class="btn btn-default"> Return Back</a>
    <h1>{{$users->email}}</h1>

  
@endsection