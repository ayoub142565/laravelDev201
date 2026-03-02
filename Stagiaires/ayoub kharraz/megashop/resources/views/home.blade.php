@extends('layouts.app')

@section('title','Accueil - MegaShop')

@section('content')
    <div class="hero">
        <h1>Bienvenue chez MegaShop</h1>
        <p>Découvrez notre sélection complète d'électronique et d'électroménager</p>
        <a href="#categories" class="btn">Voir nos catégories</a>
    </div>

    <section id="categories">
        <h2 class="page-title">Nos Catégories</h2>
        <div class="categories-grid">
            @foreach($categories as $cat)
                <div class="category-card">
                    <h3>{{ $cat['icon'] ?? '' }} {{ $cat['name'] }}</h3>
                    <p>{{ $cat['description'] }}</p>
                    <a href="{{ route('category', ['slug' => $cat['slug']]) }}" class="btn">Voir les produits</a>
                </div>
            @endforeach
        </div>
    </section>

    <section class="featured-products">
        <h2 class="page-title">Produits en Vedette</h2>
        <div class="products-grid">
            @foreach($featured as $prod)
                <div class="product-card">
                    <div class="product-image">{{ $prod['image'] ?? 'Image Produit' }}</div>
                    <div class="product-info">
                        <div class="product-name">{{ $prod['name'] }}</div>
                        <div class="product-price">{{ number_format($prod['price'],2,',',' ') }} €</div>
                        <div class="product-description">{{ $prod['description'] }}</div>
                        <a href="{{ route('product.detail', ['id' => $prod['id']]) }}" class="btn">Voir les détails</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection