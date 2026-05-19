@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Category</h1>
    
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        </div>
        
        <div class="mb-3">
            <label for="icon" class="form-label">Icon (text)</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon') }}">
        </div>
        
        <button type="submit" class="btn btn-primary">Create</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection

