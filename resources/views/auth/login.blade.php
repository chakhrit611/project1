@extends('layout.master')
@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/auth/doLogin" method="post">
        @if($errors->any())
        @foreach($errors as $item)
            {{$item}}
        @endforeach
        @endif
        @csrf
       E-mail :  <input type="email" name="email" required>
       Password : <input type="password" name="password" required>
        <button type="submit">GO!!</button>
    </form>
@endsection
