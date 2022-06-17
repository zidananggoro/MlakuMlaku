@extends('layouts.success')
@section('title', 'Chekout Success')

@section('content')
<main>
       <div class="section-success d-flex align-items-center">
           <div class="col text-center">
               <img src="{{url('frontend/image/Group 30.png')}}" alt="">
               <h1>Yay! Succes</h1>
               <p>
                We sent you email for trip
                <br> 
                instruction please read as well 
               </p>
               <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-5">
                   Home Page
               </a>
           </div>
       </div>
    </main>
@endsection



