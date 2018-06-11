@extends('layouts.app')

@section('content')

    <h1>User List</h1>

    @if(count($users) > 0)
    <table style="width:100%" class="table table-condensed">
        @foreach($users as $user)
        <div class="well">    
            <tr>
                <th>
                    <h3>
                        <a href="/users/{{$user->id}}">{{$user->name}}</a>
                    </h3>
                </th> 
                <td>
                    <a class="btn" href="/users/delete/{{$user->id}}">Delete</a>
                </td>
            </tr>     
        </div>
        @endforeach
    </table>
    <br/>
    {{$users->links()}}
    @endif
@endsection