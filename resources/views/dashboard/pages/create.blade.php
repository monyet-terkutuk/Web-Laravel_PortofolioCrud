@extends('dashboard.partials.main')

@section('container')
    <p class="card-title">Create New Page</p>
    <a href="/dashboard/page" class="btn btn-info text-white pb-3">Back</a>

    <form class="mb-3 col-md-8 mt-3" action="{{ route('page.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Title...." autofocus>
          
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control @error('title') is-invalid @enderror" rows="5"  name="body" id="body"></textarea>
        
          @error('body')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        
        </div>

        <button type="submit" class="btn btn-success text-white">Create</button>
    </form>
@endsection