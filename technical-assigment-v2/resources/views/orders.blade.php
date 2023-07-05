@extends('index')

@section('content')
<div class="container bg-light bg-opacity-75 p-5">
    <h1 class="text-center fw-bold border-bottom border-dark">{{auth()->user()->name}} Your Orders</h1>
   
    @if (session('status'))
      <div class="bg-success text-center py-3 rounded text-white">
      {{session('status')}}
      </div> 
    @endif

    @if ($orders->isEmpty())
       <p>No orders found.</p>
    @else
     <ul>
        @foreach ($orders as $order)
          <div class="d-flex justify-content-between">
            <li>
                <span class="fw-bold">Selected Base:</span> {{ $order->selected_base }} <br>
                <span class="fw-bold">Selected Ingredients:</span> {{ $order->selected_products }} <br>
                <span class="fw-bold">Total:</span> €{{ $order->total }}
            </li>
            <p>
                <span class="fw-bold">Order created at: </span>{{$order->created_at}}
            </p>
          </div>
        @endforeach
     </ul>
    @endif
</div>    
@endsection
