@extends('platform.index')
@section('content')

<section class="courses">

    <h1 class="heading">our courses</h1>
 
    <div class="box-container">
      @forelse ($courses as $course)
      <div class="box">
         <div class="tutor">
            <img src={{ url('imgs',$course->users->teachers->path) }} alt="">
            <div class="info">
               <h3>{{ $course->users->name }}</h3>
               <span>{{ $course->created_at }}<</span>
            </div>
         </div>
         <div class="thumb">
            <img src={{ url('imgs',$course->image) }} alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlist.html" class="inline-btn">view playlist</a>
      </div>

      @empty
         
      @endforelse
       
      
 
    </div>
 
 </section>

@endsection