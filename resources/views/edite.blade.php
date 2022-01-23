@extends('layout.app')
@section('title')
    Edite Page
@endsection
@section('content')
    <div class="col-6 mx-auto">
        <div class="card">
            <div class="card-body">
                <div class="card-title text-center display-4"> Edite Information</div>
                <hr>
               <form action="{{ route('student.update',['student' =>$student->id]) }}" method="POST">
                @method('Patch')
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
                <button type="submit" class="btn btn-outline-primary btn-block">Enter Data</button>
               </form>
            </div>
        </div>
    </div>
@endsection