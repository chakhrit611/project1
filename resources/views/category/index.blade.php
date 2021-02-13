@extends('layout.master')
@section('content')
    <h1>หมวดหมู่ข่าว</h1>
    <table>หมวดหมู่ข่าว
        <thead>
            <tr>ลำดับ</tr>
            <tr>ชื่อหมวดหมู่</tr>
            <tr>สร้างเมื่อ</tr>
            <tr>จัดการ</tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->create_at}}</td>
                    <td>แก้ไข | ลบ</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
