@extends('panel.index')
@section('content')

    <div id="course_create">
        <div class="title">
            <h1>Create course</h1>
        </div>
        <form action={{ route('savecourse') }} method="post" enctype="multipart/form-data">
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
            <div class="items">
                <span>Categorie</span>
                <i class="fa-solid fa-briefcase fa-sm"></i>
                <select name="categorie" id="cars">
                    <option selected>Choose</option>
                    <option value="saab">development</option>
                    <option value="mercedes">marketing</option>
                    <option value="audi">design</option>
                </select>
            </div>
            <div class="items">
                <span>Time</span>
                <div class="check">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Default radio
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                          Default checked radio
                        </label>
                      </div>
                </div>
                <i class="fa-solid fa-calendar-plus fa-sm"></i>
                <input type="time" name="time" name="video" placeholder="video">
            </div>
            <div class="btn w-100 text-center">
                <button type="submit">submit</button>
            </div>
        </form>
    </div>

@endsection