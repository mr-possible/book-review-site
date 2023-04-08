<!-- resources/views/users.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>List of Users</title>
</head>
<body>
    <h1>List of Users</h1>
    <ul>
        @foreach ($usernames as $username)
            <li>{{ $username }}</li>
        @endforeach
    </ul>
</body>
</html>
