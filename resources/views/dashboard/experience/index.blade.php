@extends('dashboard.partials.main')

@section('container')

    <p class="card-title">Experiencce Management</p>

    @if (Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif

    <a href="{{ route('experience.create') }}" class="btn btn-primary text-white">+ Add New Experience</a>
    <div class="table-responsive">
<table class="table table-striped table-hover mt-3">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Title</th>
            <th class="col-3">Action</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($pages as $page)
        
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $page->title }}</td>
                <td>
                    <a href="{{ route('page.edit', $page->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('page.destroy', $page->id) }}" class="d-inline" method="POST">
                        @csrf 
                        @method('delete')
                        <button onClick="return confirm('Are you sure, to deleted page?')" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
            
    </tbody>
</table>

    </div>

@endsection
    