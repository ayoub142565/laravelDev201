@extends('layouts.app')

@section('title',$product['name'].' - MegaShop')

@section('content')
    <div class="breadcrumb">
        <a href="{{ route('home') }}">Accueil</a> <span>/</span>
        @php
            $cat = collect($categories)->firstWhere('slug',$product['category']);
        @endphp
        @if($cat)
            <a href="{{ route('category',['slug'=>$cat['slug']]) }}">{{ $cat['name'] }}</a> <span>/</span>
        @endif
        <strong>{{ $product['name'] }}</strong>
    </div>

    <div class="product-detail">
        <h1>{{ $product['name'] }}</h1>
        <div class="product-image">{{ $product['image'] ?? 'Image produit' }}</div>
        <p>{{ $product['description'] }}</p>
        <p><strong>Prix :</strong> {{ number_format($product['price'],2,',',' ') }} €</p>
        <p><strong>Stock :</strong> {{ $product['stock'] ?? 'N/A' }}</p>
        <a href="javascript:history.back()" class="btn btn-secondary">Retour</a>
    </div>
@endsection