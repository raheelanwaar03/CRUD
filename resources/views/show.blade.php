@extends('layout.app')
@section('title')
    Show Page
@endsection
@section('content')
    <div class="col-12">
        
        <table class="table table-hover">
            <tbody>
                <div class="table-title text-center display-4">
                    Student Details
                </div>
            <tr>
                <th scope="col">#</th>
                <td>{{ $student->id }}</td>
            </tr>
            <tr>
                <th scope="col">Name</th>
                <td>{{ $student->name }}</td>
            </tr>
            <tr>
                <th scope="col">Roll No</th>
                <td>{{ $student->roll }}</td>
            </tr>
            <tr>
                <th scope="col">Class</th>
                <td>{{ $student->class }}</td>
            </tr>
            <tr>
                <th scope="col">Email</th>
                <td>{{ $student->email }}</td>
              </tr>
              <tr>
                <th scope="col">Date</th>
                <td>{{ $student->created_at }}</td>
              </tr>
            </tbody>
          </table>
          <hr>
          <a href="{{ route('student.index') }}" class="btn btn-outline-primary">Main Page</a>
          <a href="{{ route('student.create') }}" class="btn btn-outline-primary">Add New Student</a>
    </div>
@endsection