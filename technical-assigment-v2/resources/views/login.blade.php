@extends('index')

@section('content')
    <div class="mt-4 container">
        <div class="card w-75 mx-auto text-center">
            <h1>Log in</h1>
            <div class="w-50 mx-auto">

               
            @if (session('status'))
                <div class="bg-danger py-3 rounded text-white">
                {{session('status')}}
                </div> 
            @endif
              

            <form  action="{{route('login')}}" method="POST">
                @csrf
        
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
               
                <div>
                    <button class="btn btn-success mb-3 ">Login</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection