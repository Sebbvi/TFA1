<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Accounts</title>
</head>
<body>
    <nav>
        <a href="{{ route('landing') }}">Home</a> | 
        <a href="{{ route('about') }}">About</a> | 
        <a href="{{ route('customers.index') }}">Customer Accounts</a> | 
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>
    <hr>
    <h1>User & Staff Accounts</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user['username'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['role'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
