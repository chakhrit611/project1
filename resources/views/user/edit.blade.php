@extends('layout.master')
@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/update/{{$user->id}}" method="post">
        @csrf
        <tr>
           <td>ชื่อ-สกุล <input type="text" name="name" value ={{$user->name}} required></td>
            <td>username<input type="text" name="username" value ={{$user->username}} required></td>
            <td>email<input type="email" name="email" value ={{$user->email}} required></td>
            <td>password <input type="password" name="password"value ={{$user->password}} required></td>
            </tr>

        <button type="submit">บันทึก</button>
    </form>
@endsection
