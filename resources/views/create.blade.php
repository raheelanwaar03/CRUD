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
                   <span style="color: red">@error('name')
                       {{ $message }}
                   @enderror</span>
                   <x-input name="Enter Your Name"  id="name"/>
                   <span style="color: red">@error('roll')
                    {{ $message }}
                @enderror</span>
                   <x-input name="Enter Your Roll"  id="roll"/>
                   <span style="color: red">@error('class')
                    {{ $message }}
                @enderror</span>
                   <x-input name="Enter Your Class" id="class" />
                   <span style="color: red">@error('email')
                    {{ $message }}
                @enderror</span>
                   <x-input name="Enter Your Email" id="email" />
                <button type="submit" class="btn btn-outline-primary">Enter Data</button>
               </form>
            </div>
        </div>
    </div>
@endsection