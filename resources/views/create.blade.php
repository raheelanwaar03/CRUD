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
                
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
               <form action="{{ route('student.store') }}" method="POST">
                   @csrf
                   <x-input name="Enter Your Name"  id="name"/>
                   <x-input name="Enter Your Roll"  id="roll"/>
                   <x-input name="Enter Your Class" id="class" />
                   <x-input name="Enter Your Email" id="email" />
                <button type="submit" class="btn btn-outline-primary">Enter Data</button>
               </form>
            </div>
        </div>
    </div>
@endsection