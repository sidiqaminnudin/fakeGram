@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="../img/profile.jpg" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
           <div><h1>{{$user->username}}</h1></div>
           <div class="d-flex">
               <div class="pr-5"><strong>10</strong> post</div>
               <div class="pr-5"><strong>21k</strong> followers</div>
               <div class="pr-5"><strong>1</strong> following</div>
           </div>
           <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
           <div>{{$user->profile->description}}</div>
           <div><a href="#">{{$user->profile->url ?? "N/A"}}</a></div>
       </div>
   </div>
   <div class="row pt-5">
        <div class="col-4"><img src="../img/1.jpg" class="w-100"></div>
        <div class="col-4"><img src="../img/2.jpg" class="w-100"></div>
        <div class="col-4"><img src="../img/3.jpg" class="w-100"></div>
   </div>
</div>
@endsection
