@extends('index')

@section('content')
    <div class="mt-4 container">
        <div class="card w-75 mx-auto text-center">
            <h1>Register</h1>
            <div class="w-50 mx-auto">
            <form  action="{{route('register')}}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="name" value="{{old('name')}}" name="name" class=" form-control @error('name') border-danger @enderror" id="exampleFormControlInput1" placeholder="Your name">
                 
                    @error('name')
                      <p class="text-danger">{{$message}}</p>
                  @enderror

                </div>
                <div class="mb-2 pt-0">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="email" value="{{old('email')}}" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                    @error('email')
                    <p class="text-danger ">{{$message}}</p>
                @enderror
                </div>
               
                <div class="mb-2 pt-0">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Choose a password">
                    @error('password')
                      <p class="text-danger ">{{$message}}</p>
                  @enderror
                </div>
                <div class="mb-3 pt-0">
                    <label for="exampleFormControlInput1" class="form-label"></label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleFormControlInput1" placeholder="Repeat your password">
                </div>
                <div>
                    <button class="btn btn-success mb-3 ">Register</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection