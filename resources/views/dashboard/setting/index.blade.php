@extends('dashboard.partials.main')


@section('container')
    <p class="card-title">Settings Page</p>

    {{-- Pesan sukses --}}
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    
    <form class="mb-3 col-lg-12 mt-3" action="{{ route('setting.update') }}" method="post">
    @csrf
        <div class="form-grup row mb-3">
          <label for="about_page" class="col-sm-2">About Page</label>
          <div class="col-sm-6">
            <select name="about_page" id="about_page" class="form-control form-control-sm">
              <option value="">Select</option>
              @foreach ($pages as $page)
                  <option value="{{ $page->id }}" {{ get_meta_value('about_page') == $page->id ? 'selected' : '' }}>{{ $page->title }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-grup row mb-3">
          <label for="interest_page" class="col-sm-2">Interest Page</label>
          <div class="col-sm-6">
            <select name="interest_page" id="interest_page" class="form-control form-control-sm">
              <option value="">Select</option>
              @foreach ($pages as $page)
                  <option value="{{ $page->id }}" {{ get_meta_value('interest_page') == $page->id ? 'selected' : '' }}>{{ $page->title }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="form-grup row mb-3">
          <label for="award_page" class="col-sm-2">Award Page</label>
          <div class="col-sm-6">
            <select name="award_page" id="award_page" class="form-control form-control-sm">
              <option value="">Select</option>
              @foreach ($pages as $page)
                  <option value="{{ $page->id }}" {{ get_meta_value('award_page') == $page->id ? 'selected' : '' }}>{{ $page->title }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <button type="submit" class="btn btn-success text-white">Update</button>
    </form>

   



@endsection