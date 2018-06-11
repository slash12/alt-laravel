@extends('layouts.app')

@section('content')

                
  @if (session('status'))
<div class="alert alert-success">
  {{ session('status') }}
</div>
@endif

        
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection 
 
 







