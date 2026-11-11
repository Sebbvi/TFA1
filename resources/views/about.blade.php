<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About Us</title>
</head>
<body>
    <nav>
        <a href="{{ route('landing') }}">Home</a> | 
        <a href="{{ route('about') }}">About</a> | 
        <a href="{{ route('customers.index') }}">Customer Accounts</a> | 
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>
    <hr>
    <h1>About This POS System</h1>
    <p>Version 1.0: Built with Laravel using static array data sources.</p>
</body>
</html>
