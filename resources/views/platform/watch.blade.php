@extends('platform.index')
@section('content')
<link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />

<section class="watch-video">

    <div class="video-container">
        
       <div class="video">
        <video id="video" class="video-js" controls preload="auto"  poster={{ url('imgs',$playlist->photo)  }} data-setup="{}" style="width:100%;height:570px">
           <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4" />
        </video>
          {{-- <video src={{ $course->video }}  controls poster={{ url('imgs',$course->image)  }} id="video"></video>  --}}
       </div>
       <h3 class="title">{{ $playlist->title }}</h3>
       <div class="info">
          <p class="date"><i class="fas fa-calendar"></i><span>{{ $playlist->created_at->format('d-m-Y') }}</span></p>
          <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
       </div>
       <div class="tutor">
         @if ($course->users->data)
               <img src={{ url('imgs',$course->users->data->path) }} alt="">
               <div>
                  <h3>{{ $course->users->name }}</h3>
                  <span>{{ $course->users->data->categorie }}</span>
               </div>
               @else
               <img src={{ url('imgs',$course->users->teachers->path) }} alt="">
               <div>
                  <h3>{{ $course->users->name }}</h3>
                  <span>{{ $course->users->teachers->categorie }}</span>
               </div>
            @endif
          
       </div>
       <form action="" method="post" class="flex">
          <a href={{ route('platform.playlist',$course->id) }} class="inline-btn">view playlist</a>
          <button><i class="far fa-heart"></i><span>like</span></button>
       </form>
       <p class="description">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque labore ratione, hic
       </p>
    </div>
 
 </section>
 
 <section class="comments">
 
    <h1 class="heading">5 comments</h1>
 
    <form action="" class="add-comment">
       <h3>add comments</h3>
       <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
       <input type="submit" value="add comment" class="inline-btn" name="add_comment">
    </form>
 
    <h1 class="heading">user comments</h1>
 
    <div class="box-container">
 
       <div class="box">
          <div class="user">
             <img src="images/pic-1.jpg" alt="">
             <div>
                <h3>shaikh anas</h3>
                <span>{{ $playlist->created_at }}</span>
             </div>
          </div>
          <div class="comment-box">this is a comment form shaikh anas</div>
          <form action="" class="flex-btn">
             <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
             <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
          </form>
       </div>
 
       <div class="box">
          <div class="user">
             <img src="images/pic-2.jpg" alt="">
             <div>
                <h3>john deo</h3>
                <span>22-10-2022</span>
             </div>
          </div>
          <div class="comment-box">awesome tutorial!
             keep going!</div>
       </div>
       </div>
    </div>
    <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script>

 </section>
 
 
 
 

@endsection