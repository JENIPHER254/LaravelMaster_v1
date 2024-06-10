@extends('layouts.app')

@section('content')
<div class="container" style="display:flex; justify-content:center;align-items-center;">
   <div class="row" style="width:80%;">
    <div class="col-3">
    <div class="ratio ratio-1x1 rounded-circle overflow-hidden " style="width:70%;">
    <img src="/images/p_logo2.jpg" class="pr-3"  alt="">
    </div>
  
    </div>
    <div class="col-9 ">
      <h1 class="fw-bold ">{{ Auth::user()->username}}</h1>
      <p class="fw-bold ">{{ Auth::user()->name}}</p>
      <p class="fw-bold ">{{ Auth::user()->email}}</p>
   </div>
   </div>
</div>
@endsection
