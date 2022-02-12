@extends('mytemp')
@section('title', 'Add')

@section('mainarea')
<h1>Add Student</h1>

<form  methode="POST" action="/students/add">
    @csrf()
    <input type="text" name="stuName" placeholder="Student Name">
    <input type="number" name="stuClass" placeholder="Student Class">
    <input type="submit" name="submit" value="Insert" >
</form>

@endsection