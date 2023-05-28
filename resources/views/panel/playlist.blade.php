@extends('panel.index')
@section('content')

    @forelse ($courses as $course)
        <a href={{ route('listadd',$course->id) }} class="nav-link">
            <div class="card my-2 p-3">
                {{ $course->title }} 
            </div>
        </a>
                
    @empty
        
    @endforelse

@endsection