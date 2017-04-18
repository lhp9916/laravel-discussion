<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm your email</title>
</head>
<body>
<h1>Confirm your email</h1>
<a href="{{ url('verify/'.$confirm_code) }}">click to Confirm your email</a>
</body>
</html>