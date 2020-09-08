<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
</head>
<body>
    <div>
        <h1>Home<h1>
        <a href="home/createUser">Crate User</a>
        <a href="/logout">Logout</a>
    
    <div>
        <table  border='1px'>
            <tr>
                <td>User Name</td>
                <td>Password</td>
                <td>Type</td>
                <td>Full Name</td>
                <td>Company Name</td>
                <td>Contact Number</td>
                <td>Actions</td>
            </tr>
        @for($i=0; $i !=count($userList);$i++)
            <tr>
                 @if($userList[$i]['username'] != null)
                <td>{{$userList[$i]['username']}}</td>
                <td>{{$userList[$i]['password']}}</td>
                <td>{{$userList[$i]['type']}}</td>
                <td>{{$userList[$i]['employee_name']}}</td>
                <td>{{$userList[$i]['company_name']}}</td>
                <td>{{$userList[$i]['contact_number']}}</td>
                <td>
                   <a href="/home/edit/{{$userList[$i]['username']}}">Edit</a> |
                    <a href="/home/delete/{{$userList[$i]['username']}}">Delete</a>
                   
                </td>
                @endif
            </tr>
        @endfor
        </table>
    </div>
    

</body>
</html>