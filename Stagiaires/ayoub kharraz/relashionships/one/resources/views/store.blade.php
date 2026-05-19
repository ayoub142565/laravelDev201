<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    {{-- shows as cards --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ($categories as $category)
            <div class="border border-gray-300 p-4 m-4">
                <h2 class="text-xl font-bold">{{ $category->name }}</h2>
                <p>{{ $category->description }}</p>
                <form action="{{ route('categories.show', $category->id) }}" method="GET">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        View Products
                    </button>
                </form>
            </div>
        @endforeach
    </div>
</body>
</html>
