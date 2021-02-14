@extends('layout.master')
@section('content')
    <h1>หมวดหมู่ข่าว</h1>
    <a href="/category/create">+ เพิ่มหวมดหมู่ใหม่</a>
    <table>หมวดหมู่ข่าว
        <thead>
            <tr>
            <td>ลำดับ</td>
            <td>ชื่อหมวดหมู่</td>
            <td>สร้างเมื่อ</td>
            <td>จัดการ</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $item)
            <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->create_at}}</td>
                    <td><a href="edit">แก้ไข</a> | <a href="delete">ลบ</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
