@extends('dashboard.partials.main')

@section('container')

    <p class="card-title">Experience Management</p>

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
            <th>Position</th>
            <th>Company Name</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th class="col-3">Action</th>
        </tr>
    </thead>
    <tbody>
        
            @foreach ($histories as $history)
        
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $history->title }}</td>
                <td>{{ $history->info_st }}</td>
                <td>{{ $history->st_date }}</td>
                <td>{{ $history->nd_date }}</td>
                <td>
                    <a href="{{ route('experience.edit', $history->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('experience.destroy', $history->id) }}" class="d-inline" method="POST">
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
    