<!DOCTYPE html>
<html>
<head>
    <title>login</title>
</head>
<body>
    
    <h1>login</h1>
    
    <form method="post">

    
        <input type="hidden" name="_token" value="{{csrf_token()}}">

        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    {{session('msg')}}
</body>
</html>