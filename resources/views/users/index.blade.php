<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>       
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
        <h1>User List</h1>
    
       
        
    
    
    <table id="tlbuser" style="width:100%" class="table">
            <tr>
                <thread>
                    <th>
                        Name
                    </th> 
                    <th>
                        Email
                    </th>
                </thread>
            </tr>     
    </table>
    
    <script type="text/javascript">
    
             $('#tlbuser').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": "{{ route('search.getdata') }}",
                "columns":[
                    { "data": "name" },
                    { "data": "email" }
                ]
             });
       
        </script>
</body>
</html>







    