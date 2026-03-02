@extends('layouts.app')

@section('title',$category['name'].' - MegaShop')

@section('content')
    <div class="breadcrumb">
        <a href="{{ route('home') }}">Accueil</a> <span>/</span> <strong>{{ $category['name'] }}</strong>
    </div>

    <h1 class="page-title">{{ $category['icon'] ?? '' }} {{ $category['name'] }}</h1>

    <div class="products-grid">
        @foreach($products as $prod)
            <div class="product-card">
                <div class="product-image">{{ $prod['image'] ?? 'Image produit' }}</div>
                <div class="product-info">
                    <div class="product-name">{{ $prod['name'] }}</div>
                    <div class="product-price">{{ number_format($prod['price'],2,',',' ') }} €</div>
                    <div class="product-description">{{ $prod['description'] }}</div>
                    <a href="{{ route('product.detail',['id'=>$prod['id']]) }}" class="btn">Détails</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection