@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Category Details</h1>
    
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <p class="card-text"><strong>ID:</strong> {{ $category->id }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $category->description }}</p>
            <p class="card-text"><strong>Icon:</strong> {{ $category->icon }}</p>
            <p class="card-text"><strong>Slug:</strong> {{ $category->slug }}</p>
            <p class="card-text"><strong>Created:</strong> {{ $category->created_at }}</p>
            <p class="card-text"><strong>Updated:</strong> {{ $category->updated_at }}</p>
        </div>
    </div>
    
    <div class="mt-3">
        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Back to List</a>
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
</div>
@endsection

