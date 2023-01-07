@extends('dashboard.partials.main')

@section('container')
    <p class="card-title">Edit Your Page</p>
    <a href="/dashboard/page" class="btn btn-info text-white ">Back</a>

    <form class="mb-3 col-lg-12 mt-3" action="{{ route('page.update', $page->id) }}" method="post">
    @csrf
    @method('patch')
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Title...." value="{{ old('title', $page->title) }}" autofocus>
          
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control summernote @error('title') is-invalid @enderror" rows="5"  name="body" id="body">{{ old('body', $page->body) }}</textarea>
        
          @error('body')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        
        </div>

        <button type="submit" class="btn btn-warning text-white">Update</button>
    </form>
@endsection 