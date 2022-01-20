@extends('layout.app')
@section('title')
    Create Page
@endsection
@section('content')
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center display-4" style="color: blue">Student Form</div>
                <hr style="width: 200px;background-color:blue">
               <form action="{{ route('student.store') }}" method="POST">
                   @csrf
                   <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name">
                </div>
                <div class="form-group">
                    <label for="roll">Roll No:</label>
                    <input type="text" name="roll" id="roll" class="form-control" placeholder="Enter Your Roll NO:">
                </div>
                <div class="form-group">
                    <label for="class">Class</label>
                    <input type="text" name="class" id="class" class="form-control" placeholder="Enter Your Class">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your Email">
                </div>
                <button type="submit" class="btn btn-outline-primary">Enter Data</button>
               </form>
            </div>
        </div>
    </div>
@endsection