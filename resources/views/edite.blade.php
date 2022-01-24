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
                               
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
               <form action="{{ route('student.update',['student' =>$student->id]) }}" method="POST">
                @method('Patch')
                   @csrf
                   <x-input name="Enter Your Name"  id="name"/>
                   <x-input name="Enter Your Roll"  id="roll"/>
                   <x-input name="Enter Your Class" id="class" />
                   <x-input name="Enter Your Email" id="email" />
                <button type="submit" class="btn btn-outline-primary btn-block">Enter Data</button>
               </form>
            </div>
        </div>
    </div>
@endsection