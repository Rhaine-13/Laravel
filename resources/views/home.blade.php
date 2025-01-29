<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
    <p>Hi</p>
    <a href="{{ route("testing") }}">Go ot test</a>

    <form action="{{ url('/formSubmitted') }}" method="post">
        @csrf
        <label for="fullname">FullName:</label>
        <input type="text" id="fullname" name="fullname" placeholder="Type your fullname" required>
        <br><br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" placeholder="Type your email" required>
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>