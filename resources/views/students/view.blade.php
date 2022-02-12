@extends('mytemp')
@section('title', 'view')

@section('mainarea')
<h1>View</h1>
<table class="table table-hover">
<thead class="thead-dark">
    <tr>
        <th>Student Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Admission Date</th>
        <th colspan="2">Action</th>
    </tr>
</thead>
<tbody>    
    @foreach($data as $dt)
    <tr>
       <td>{{$dt['id']}}</td>
       <td>{{$dt['stuName']}}</td>
       <td>{{$dt['stuClass']}}</td>
       <td>{{$dt['created_at']}}</td>
       <td><a href="/students/delete/{{$dt['id']}}" class="btn btn-danger">Delete</a></td>
       <td><a href="/students/update/{{$dt['id']}}" class="btn btn-success">Update</a></td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection

