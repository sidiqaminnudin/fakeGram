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
           <div class="pt-4 font-weight-bold">sandog.org</div>
           <div>Incididunt laborum proident cillum nulla sint aute voluptate voluptate et. Ex cillum sunt sint velit amet in voluptate deserunt occaecat sed voluptate nostrud occaecat aliquip sed.</div>
           <div><a href="#">sandog.org</a></div>
       </div>
   </div>
   <div class="row pt-5">
        <div class="col-4"><img src="../img/1.jpg" class="w-100"></div>
        <div class="col-4"><img src="../img/2.jpg" class="w-100"></div>
        <div class="col-4"><img src="../img/3.jpg" class="w-100"></div>
   </div>
</div>
@endsection
