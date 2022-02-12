@extends('mytemp')
@section('title', 'Update')

@section('mainarea')
<h1>Update Student</h1>

<form  methode="POST" action="/students/update">
    @csrf()
    <input type="text" name="id" value="{{$data['id']}}" hidden>
    <input type="text" name="stuName" placeholder="Student Name" value="{{$data['stuName']}}">
    <input type="number" name="stuClass" placeholder="Student Class" value="{{$data['stuClass']}}">
    <input type="submit" name="submit" value="Update" >
</form>

@endsection