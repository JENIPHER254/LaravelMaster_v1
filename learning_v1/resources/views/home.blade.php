@extends('layouts.app')

@section('content')
<div class="container ">
    <!-- header section -->
   <div class="row ">
    <div class="col-3 d-flex justify-content-center align-items-center p-5">
        <img src="images/person2.jpg" width="150" class="rounded-circle"alt="">
    </div>
    <div class="col-9 pt-5">
        <div><h3 class="fw-bold">   {{ Auth::user()->username }}</h3></div>
        <div class="d-flex">
            <div class="pe-4"><strong>153 </strong>posts</div>
            <div class="pe-4"><strong>23k </strong>followers</div>
            <div class="pe-4"><strong>210 </strong>following</div>
        </div>
        <div class="title fw-bold h6 pt-4 ">Welcome to Cooking With Cookie !!</div>
        <div >
            <p class="pe-5 me-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore maiores voluptatibus beatae aliquid impedit modi libero incidunt, magnam ab? Officia.</p>
        </div>
        <div>
            <a href="https://www.youtube.com/@_BYTESCAPE" target="_blank" rel="noopener noreferrer">https://www.youtube.com/@_BYTESCAPE</a>
        </div>
    </div>
   </div>
   <!-- header section ! -->
    <!-- Post Section -->
    <div class="row mt-5">
        <div class="col-4">
            <img src="images/food1.jpg" alt="" class="w-100" >
        </div>
        <div class="col-4">
            <img src="images/food2.jpg" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="images/food3.jpg" alt="" class="w-100">
        </div>
    </div>
     <!-- Post Section ! -->
</div>
@endsection
