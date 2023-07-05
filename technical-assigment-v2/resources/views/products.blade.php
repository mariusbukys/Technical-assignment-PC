@extends('index')

    @section('content')
       @auth
         <div class="d-flex justify-content-center mb-3 align-middle">
             <div>
                <a class="btn btn text-decoration-none text-white me-3 bg-success" href="{{route('orders')}}">Your Orders {{auth()->user()->name}}</a>
             </div>
             <div>  
                <form action="{{route('logout')}}" method="POST">
                   @csrf 
                    <button type="submit" class="btn btn-success mx-3">Logout</button>
                </form>
             </div>  
         </div>
         
        <div class="container bg-light bg-opacity-75 p-5">

            <h1 class="text-center mb-3">Choose Your Pizza Base And Ingredients</h1>
          <form action="{{route('products')}}" method="POST">
            @csrf
              <div class="row">
                 @foreach ($base as $pizzabase)
                <div class="col-4 border-bottom border-5 border-dark">
                 <div class="d-flex justify-content-center">
                  <img class="w-75" src={{$pizzabase->base_image}}>
                 </div>
                   <p class="text-center fw-bold fs-4 mb-0">{{$pizzabase->base_name}}</p>
                   <p class="text-center bg-secondary text-white fw-bold mx-5">{{$pizzabase->base_price}} <i class="bi bi-currency-euro"></i></p>
                  <div class="d-flex justify-content-center mb-3">
                   <input type="radio" name="id" id={{$pizzabase->id}} value={{$pizzabase->id}} required />
                  </div>
                </div>
                 @endforeach
              </div>
            
            <div class=" mt-3">
              @foreach ($products as $item)
                <div class="d-flex justify-content-between align-items-center mt-3">
                 <div class="d-flex align-items-center"> 
                  <input type="checkbox" name="ids[]" id={{$item->id}} value={{$item->id}} class="me-2" /> 
                  <img  style="width: 100px; height: 75px;" src={{$item->image}}>             
                  <p class=" fw-bold fs-4 ms-3">{{$item->name}}</p>
                 </div>
                  <p class="fw-bold mx-5 text-white"><span class="bg-secondary p-2">{{$item->price}} <i class="bi bi-currency-euro"></i></span></p>
                </div>
              @endforeach 
            </div>

            <div class="d-flex justify-content-center mt-4">
              <button type="submit" class="btn btn-success" >
                 Order
              </button>
            </div> 

         </form>
       </div>
       @endauth    
    @endsection

