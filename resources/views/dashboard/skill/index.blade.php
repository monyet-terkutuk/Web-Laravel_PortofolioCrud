@extends('dashboard.partials.main')


@section('container')
    <p class="card-title">Create New Skill</p>

    {{-- Pesan sukses --}}
    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    
    <form class="mb-3 col-lg-12 mt-3" action="{{ route('skill.index') }}" method="post">
    @csrf
        <div class="mb-3">
          <label for="language" class="form-label">Programming Languages & Tools</label>
          <input type="text" class="form-control form-control-sm @error('language') is-invalid @enderror skill" placeholder=" Programming Languages & Tools"  name="language" id="language" value="{{ get_meta_value('language') }}" autofocus>
          
          @error('language')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        
        </div>

        <div class="mb-3">
          <label for="workflow" class="form-label">Workflow</label>
          <textarea class="form-control summernote @error('workflow') is-invalid @enderror" rows="5" name="workflow" id="workflow">{{ get_meta_value('workflow') }}</textarea>
        
          @error('workflow')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
          @enderror
        
        </div>

        <button type="submit" class="btn btn-success text-white">Create</button>
    </form>

    @push('child-scripts')
    <script>
        $(document).ready(function() {
            $('.skill').tokenfield({
                autocomplete: {
                    source: [{!! $skill !!}],
                    delay: 100
                },
                showAutocompleteOnFocus: true
            });
        });
    </script>
    @endpush



@endsection