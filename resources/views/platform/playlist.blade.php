@extends('platform.index')
@section('content')

<section class="playlist-details">

    <h1 class="heading">playlist details</h1>
 
    <div class="row">
 
       <div class="column">
          <form action="" method="post" class="save-playlist">
             <button type="submit"><i class="far fa-bookmark"></i> <span>save playlist</span></button>
          </form>
    
          <div class="thumb">
             <img src={{ url('imgs',$course->image) }} alt="">
             <span>10 videos</span>
          </div>
       </div>
       <div class="column">
          <div class="tutor">
             @if ($course->data)
               <img src={{ url('imgs',$course->users->data->path) }} alt="">
               @else
               <img src={{ url('imgs',$course->users->teachers->path) }} alt="">
            @endif
             <div>
                <h3>{{ $course->users->name }}</h3>
                <span>{{ $course->created_at->format('d-m-Y')}}</span>
             </div>
          </div>
    
          <div class="details">
             <h3>{{ $course->title }}</h3>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum minus reiciendis, error sunt veritatis exercitationem deserunt velit doloribus itaque voluptate.</p>
             <a href={{ route('platform.profile',$course->users->id) }} class="inline-btn">view profile</a>
          </div>
       </div>
    </div>
 
 </section>
 
 <section class="playlist-videos">
 
    <h1 class="heading">playlist videos</h1>
 
    <div class="box-container">
        @forelse ($playlist as $play)
        <a class="box" href={{ route('platform.watch',$play->id) }}>
            <i class="fas fa-play"></i>
            <img src={{ url('imgs',$play->photo) }} alt="">
            <h3>{{ $play->title }}</h3>
         </a>
        @empty
            
        @endforelse
       
 
    </div>
 
 </section>

@endsection