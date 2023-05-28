@extends('panel.index')
@section('content')
@if (session('tsave'))
    <button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

    <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
        <img src="..." class="rounded me-2" alt="...">
        <strong class="me-auto">Bootstrap</strong>
        <small>11 mins ago</small>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('tsave') }}
        </div>
    </div>
    </div>
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

   
            const toast = new bootstrap.Toast(toastLiveExample)

            toast.show()
       
    </script>
@endif

    <div id="teacher_add">
        <div class="title">
            <h1>Add Teachers</h1>
        </div>
        <form action={{ route('saveteacher') }} method="post" enctype="multipart/form-data">
            @csrf
                @if ($errors->any())
                    <div class="alert alert-danger mx-3 navbar-nav">

                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
            
            <div class="item">
                <span>Name</span>
                <input name="name" type="text" placeholder="Name">
            </div>
            <div class="item">
                <span>Email</span>
                <input name="email" type="text" placeholder="email">
            </div>
            <div class="item">
                <span>Bio</span>
                <textarea name="bio" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="item">
                <span>Categorie</span>
                <select name="categorie" id="cars">
                    <option value="development">development</option>
                    <option value="marketing">marketing</option>
                    <option value="design">design</option>
                </select>
            </div>   
            <div class="item">
                <span>password</span>
                <input name="password" type="password"  placeholder="password">
            </div>
            <div class="item">
                <span>Photo</span>
                <div class="photo_all">
                    <label for="inputTag">
                        Select Image
                        <i class="fa-solid fa-camera" style="color: #1a1c1e;"></i>
                        <input id="inputTag" name="photo" class="image_input" type="file"/>
                    </label>
                </div>
            </div>
            <div class="btn w-100 text-center">
                <button>submit</button>
            </div>    
        </form>
    </div>
    <div id="cards-teacher">
        <div class="all-courses">
            @forelse ($teachers as $teacher)
                <div class="card">
                    <div class="card-top">
                        <img src={{ url('imgs',$teacher->path) }} alt="">
                    </div>
                    <div class="card-body">
                        <span>{{ $teacher->name }}</span>
                        <div id='details'>
                            <button type="button" class="btn btn-secondary w-100 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $teacher->id }}">
                                Details
                            </button>
                            
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $teacher->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">info</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <ul class="navbar-nav text-start">
                                            <li><strong>Name:</strong> <span>{{ $teacher->name }}</span></li>
                                            <li><strong>Id:</strong> <span>{{ $teacher->id }}</span></li>
                                            <li><strong>Categorie:</strong> <span>{{ $teacher->categorie }}</span></li>
                                            <li><strong>Email:</strong> <span>{{ $teacher->email }}</span></li>
                                            <li><strong>password:</strong> <span>{{ $teacher->password }}</span></li>
                                            <li><strong>Date of join:</strong> <span>{{ $teacher->created_at }}</span></li>
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
                            <form action={{ route('tremove',$teacher->id) }} method="post">
                                @csrf
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger w-100 bt-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $teacher->id }}">
                                        Delete
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop{{ $teacher->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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