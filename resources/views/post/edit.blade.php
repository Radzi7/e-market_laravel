@extends('layouts.main')
@section('content') 
<div>
  <form action="{{ route('post.update', $post->id) }}" method="post">
    @csrf
    @method('patch')
      <div class="form-group">
        <label for="title">Title</label>
          <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title}}">
      </div>
      <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="content" placeholder="Content">{{ $post->content}}</textarea>
      </div>
      <div class="form-group">
        <label for="image">Image</label>
        <input name="image" type="text" class="form-control" id="image" placeholder="Image" value="{{ $post->image}}">
      </div>
      <div class="form-group mt-3 ">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category_id">
          @foreach ($categories as $category)
            <option  
            {{ $category->id === $post->category->id ? "selected" : '' }}
            value="{{$category->id}}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="tags">Tags</label>
        <select multiple class="form-control" id="tags" name="tags[]">
          @foreach ($tags as $tag)
                <option 
                @foreach ($post->tags as $postTag)
                  {{ $tag->id === $postTag->id ? "selected" : '' }}
                @endforeach
                 value="{{$tag->id}}">{{ $tag->title }}</option>
              @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-primary mt-3">Update</button>
  </form>
</div>
@endsection