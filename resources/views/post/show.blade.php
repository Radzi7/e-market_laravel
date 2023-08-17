@extends('layouts.main')
@section('content') 
  <div>
    <div> {{ $post->id }}. {{ $post->title }}</div> 
    <div> {{ $post->content }} </div>
    {{-- <div> {{ $post->category_id }} </div> --}}
    <div> Category :@if ($post->category_id==1)
        {{ 'cats' }}
    @else
        {{ 'dogs' }}
    @endif
    </div>
    <div>TAGS:
      @foreach ($post->tags as $tag)    
        <div> {{ $tag->title }} </div>
      @endforeach
    </div>
  </div>
  <div>
    <a href="{{ route('post.edit', $post->id)}}" class="btn btn-success">Edit</a>
  </div>
  <div>
    <form action="{{ route('post.delete',$post->id) }}" method="post">
      @csrf
      @method('delete')
      <input type="submit" value="Delete" class="btn btn-danger">
    </form>
  </div>
  <div>
    <a href="{{ route('post.index') }}">Back</a>
  </div>
  @endsection