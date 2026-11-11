<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POS System - Home</title>
</head>
<body>
    <nav>
        <a href="{{ route('landing') }}">Home</a> | 
        <a href="{{ route('about') }}">About</a> | 
        <a href="{{ route('customers.index') }}">Customer Accounts</a> | 
        <a href="{{ route('users.index') }}">User Accounts</a>
    </nav>
    <hr>
    <h1>Welcome to the Basic POS System</h1>
    <p>This is the landing page of your first Laravel application.</p>
</body>
</html>
