<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="/about">about</a> |<a href="/contact">contact</a> | <a href="/welcome">index</a> | <a href="/category">category</a> | <a href="/user">user</a><br>
    สวัสดี, @if(auth()->check()) {{auth()->user()->name}} <a href="/auth/logout">ออกจากระบบ</a> @else บุคคลทั่วไป @endif
@yield("content")
    <hr>
    &copy; 2021 chakhrit
</body>
</html>
