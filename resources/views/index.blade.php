@extends('layout.app')
@section('title')
    Index Page
@endsection
@section('content')
    <div class="col-12">

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#Id</th>
                <th scope="col">Name</th>
                <th scope="col">Roll No</th>
                <th scope="col">Class</th>
                <th scope="col">Email</th>
                <th scope="col">Details</th>
                <th scope="col">Update</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                  <td>{{ $student->id }}</td>
                  <td>{{ $student->name }}</td>
                  <td>{{ $student->roll }}</td>
                  <td>{{ $student->class }}</td>
                  <td>{{ $student->email }}</td>
                  <td>
                    <a href="{{ route('student.show',['student' => $student->id ]) }}" class="btn btn-sm-primary">Show Details</a>
                  </td>
                  <td>
                    <a href="{{ route('student.edit',['student' => $student->id ]) }}" class="btn btn-sm-primary">Update</a>
                  </td>
                  <td>
                    <form action="{{ route('student.destroy',['student' => $student->id]) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input class="btn btn-primary" type="submit" value="Delete">
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
          <a href="{{ route('student.create') }}" class="btn btn-outline-primary">Add New Student</a>
    </div>
@endsection