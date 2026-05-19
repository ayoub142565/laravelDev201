<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold">{{ $category->name }}</h1>
        <p>{{ $category->description }}</p>

        <h2 class="text-xl font-bold">Products in this category:</h2>
        @foreach ($products as $product)
            <div class="border border-gray-300 p-4 m-4">
                <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
                <p>Price: ${{ $product->price }}</p>
            </div>
        @endforeach
        {{-- back button --}}
        <a href="{{ route('store.all') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to Store
        </a>
    </div>

</body>
</html>
