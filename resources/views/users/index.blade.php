<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | User Configuration</title>
    <link rel="icon" href="https://d30y9cdsu7xlg0.cloudfront.net/png/99161-200.png"> 
    
</head>
<body>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>   
        <script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.1/js/responsive.bootstrap.min.js"></script>

        <h1>User List</h1>
        <a href="/logout">Add user</a>
    
    <table id="tlbuser" style="width:100%" class="table">
                <thead>
                        <tr>
                    <th>
                        Name
                    </th> 
                    <th>
                        Email
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{$user->name}}
                    </td>
                    <td>
                        {{$user->email}}
                    </td>
                    <td>
                        <a href="/users/show/{{$user->id}}" class="btn btn-primary">Show</a> |
                        <a href="/users/edit/{{$user->id}}" class="btn btn-primary" onclick="return Confirm('Do you want to edit?')">Edit</a> |
                        <a href="/users/delete/{{$user->id}}" class="btn btn-warning" onclick="return Confirm('Do you want to delete?')">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    
    <script type="text/javascript">
             $('#tlbuser').DataTable({
                responsive: true,
                "pageLength": 3
             });
       
        function Confirm(text)
        {
          var x = confirm(text);
          if (x)
          return true;
          else
          return false;
        }
    </script>
</body>
</html>







    