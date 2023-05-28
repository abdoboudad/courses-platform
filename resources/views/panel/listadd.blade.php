@extends('panel.index')
@section('content')
<div id="course_create">
    <form action={{ route('addto',$id) }} method="post" enctype="multipart/form-data">
        @csrf
        @if ($errors->any())
                <div class="alert alert-danger mx-3 navbar-nav">

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
        @endif
        <div class="items">
            <span>Title</span>
            <i class="fa-solid fa-magnifying-glass fa-sm"></i>
            <input type="text" name="title" placeholder="title">
        </div>
        <div class="items">
            <span>Image</span>
            <i class="fa-solid fa-image fa-sm"></i>
            <input type="file" name="photo" placeholder="image">
        </div>
        <div class="items">
            <span>Video</span>
            <i class="fa-solid fa-video fa-sm"></i>
            <input type="text" name="video" placeholder="video">
        </div>
        <div class="btn w-100 text-center">
            <button type="submit">submit</button>
        </div>
    </form>
</div>
@endsection