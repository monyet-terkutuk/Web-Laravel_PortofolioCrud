@extends('dashboard.partials.main')

@section('container')
    <p class="card-title">Create New Page</p>
    <a href="/dashboard/page" class="btn btn-info text-white ">Back</a>

    <form class="mb-3 col-lg-12 mt-3" action="{{ route('experience.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Title...." value="{{ old('title') }}" autofocus>
          
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="info_st" class="form-label">Company Name</label>
          <input type="text" class="form-control form-control-sm @error('info_st') is-invalid @enderror"  name="info_st" id="info_st" placeholder="Company Name" value="{{ old('info_st') }}" autofocus>
          
          @error('info_st')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>

        <div class="mb-3">
          <div class="row">
            <div class="col-auto">Start Date</div>
            <div class="col-auto"><input type="date" class="form-control form-control-sm" name="start_date" id="start_date" placeholder="dd/mm/yyyy"></div>
            <div class="col-auto">End Date</div>
            <div class="col-auto"><input type="date" class="form-control form-control-sm" name="end_date" id="end_date" placeholder="dd/mm/yyyy"></div>
          </div>
        </div>


        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea class="form-control summernote @error('title') is-invalid @enderror" rows="5" name="body" id="body">{{ old('body') }}</textarea>
        
          @error('body')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        
        </div>

        <button type="submit" class="btn btn-success text-white">Create</button>
    </form>
@endsection