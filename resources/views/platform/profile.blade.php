@extends('platform.index')
@section('content')

<section class="user-profile">

    <h1 class="heading">your profile</h1>
    <div class="info">
       <div class="user">
         @if ($user->data)
            <img src={{ url('imgs',$user->data->path) }} alt="">
            <h3>{{ $user->name }}</h3>
             <p>{{ $user->data->categorie }}</p>
            @else
            <img src={{ url('imgs',$user->teachers->path) }} alt="">
            <h3>{{ $user->name }}</h3>
            <p>{{ $user->teachers->categorie }}</p>
         @endif
          
          <a href="update.html" class="inline-btn">update profile</a>
       </div>
    
       <div class="box-container">
    
          <div class="box">
             <div class="flex">
                <i class="fas fa-bookmark"></i>
                <div>
                   <span>4</span>
                   <p>saved playlist</p>
                </div>
             </div>
             <a href="#" class="inline-btn">view playlists</a>
          </div>
    
          <div class="box">
             <div class="flex">
                <i class="fas fa-heart"></i>
                <div>
                   <span>33</span>
                   <p>videos liked</p>
                </div>
             </div>
             <a href="#" class="inline-btn">view liked</a>
          </div>
    
          <div class="box">
             <div class="flex">
                <i class="fas fa-comment"></i>
                <div>
                   <span>12</span>
                   <p>videos comments</p>
                </div>
             </div>
             <a href="#" class="inline-btn">view comments</a>
          </div>
    
       </div>
    </div>
 
 </section>

@endsection