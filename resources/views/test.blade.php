<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>test</p>

    <form metod="post" action="{{ route('registersubmit') }}">
        {{ csrf_field() }}
        <input type="text" name="name"/>
        <input type="number" name="age"/>
        <input type="submit" value="ok"/>
    </form>
</body>
</html>