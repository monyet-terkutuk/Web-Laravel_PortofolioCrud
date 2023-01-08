@extends('dashboard.partials.main')

@section('container')
    <p class="card-title">Create New Education</p>
    <a href="/dashboard/experience" class="btn btn-info text-white ">Back</a>

    <form class="mb-3 col-lg-12 mt-3" action="{{ route('education.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label for="title" class="form-label">School Name/University Name</label>
          <input type="text" class="form-control form-control-sm @error('title') is-invalid @enderror"  name="title" id="title" placeholder="Title...." value="{{ old('title') }}" autofocus>
          
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="info_st" class="form-label">Your Major</label>
          <input type="text" class="form-control form-control-sm @error('info_st') is-invalid @enderror"  name="info_st" id="info_st" placeholder="Company Name" value="{{ old('info_st') }}" autofocus>
          
          @error('info_st')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="info_nd" class="form-label">Study Program</label>
          <input type="text" class="form-control form-control-sm @error('info_nd') is-invalid @enderror"  name="info_nd" id="info_nd" placeholder="Company Name" value="{{ old('info_nd') }}" autofocus>
          
          @error('info_nd')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror

        </div>

        <div class="mb-3">
          <label for="info_rd" class="form-label">Gpa/Ipk</label>
          <input type="number" class="form-control form-control-sm @error('info_rd') is-invalid @enderror"  name="info_rd" id="info_rd" placeholder="Company Name" value="{{ old('info_rd') }}" autofocus>
          
          @error('info_rd')
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


        <button type="submit" class="btn btn-success text-white">Create</button>
    </form>
@endsection