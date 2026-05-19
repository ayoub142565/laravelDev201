@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $item->name }}</h1>
    <p>{{ $item->description }}</p>
    <p><strong>Price:</strong> {{ $item->price }}</p>
    <a href="{{ route('items.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection
