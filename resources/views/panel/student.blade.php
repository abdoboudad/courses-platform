@extends('panel.index')

@section('content')

    <div id="student_create">
        <div class="title">
            <h1>Add Student</h1>
        </div>
        <form action={{ route('savestudent') }} method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                    <div class="alert alert-danger mx-3 navbar-nav mt-2">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
            <div class="item">
                <span>Name</span>
                <input name="name" value="{{ old('name') }}" type="text" placeholder="name">
            </div>
            <div class="item">
                <span>Email</span>
                <input name="email" value="{{ old('email') }}"  type="text" placeholder="email">
            </div>
            <div class="item">
                <span>password</span>
                <input name="password" value="{{ old('password') }}"  type="password" placeholder="password">
            </div>
            <div class="item">
                <span >Photo</span>
                <div class="photo_all">
                    <label for="inputTag">
                        Select Image
                        <i class="fa-solid fa-camera" style="color: #191f24;"></i>
                        <input id="inputTag" name="photo" value="{{ old('photo') }}"  class="image_input" type="file"/>
                    </label>
                </div>
            </div>
            <div class="btn">
                <button>submit</button>
            </div> 
        </form>
    </div>
    <div id="cards-teacher">
        <div class="all-courses">
            @forelse ($students as $student)
                <div class="card">
                    <div class="card-top">
                        <img src={{ url('imgs',$student->path) }} alt="">
                    </div>
                    <div class="card-body">
                        <span>{{ $student->name }}</span>
                        <div id='details'>
                            <button type="button" class="btn btn-secondary w-100 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $student->id }}">
                                Details
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">info</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="navbar-nav text-start">
                                            <li><strong>Name:</strong> <span>{{ $student->name }}</span></li>
                                            <li><strong>Id:</strong> <span>{{ $student->id }}</span></li>
                                            <li><strong>Email:</strong> <span>{{ $student->email }}</span></li>
                                            <li><strong>password:</strong> <span>{{ $student->password }}</span></li>
                                            <li><strong>Date of join:</strong> <span>{{ $student->created_at }}</span></li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div id="deleteform">
                            <form action={{ route('sremove',$student->id) }} method="post">
                                @csrf
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger w-100 mb-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $student->id }}">
                                        Delete
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $student->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                This user will be permanently deleted from the database upon your approval
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Understood</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            @empty
                
            @endforelse
            
        </div>
    </div>

@endsection