<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Accounts</title>
</head>
<body>
    <nav>
        <a href="{{ route('landing') }}">Home</a> | 
        <a href="{{ route('about') }}">About</a> | 
        <a href="{{ route('customers.index') }}">Customer Accounts</a> | 
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>
    <hr>
    <h1>Customer Accounts</h1>
    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
