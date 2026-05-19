<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">    
</head>
<body>

    <table class="table-auto">
        <thead>
            <th class="px-4 py-2">id</th>
            <th class="px-4 py-2">name</th>
            <th class="px-4 py-2">description</th>
            <th class="px-4 py-2">price</th>
            <th class="px-4 py-2">categories</th>
        </thead>
        <tbody>
            @foreach ($allproducts as $item)
                <tr class="border border-gray-300">
                    <td class="px-4 py-2">{{ $item->id }}</td>
                    <td class="px-4 py-2">{{ $item->name }}</td>
                    <td class="px-4 py-2">{{ $item->description }}</td>
                    <td class="px-4 py-2">{{ $item->price }}</td>
                    <td class="px-4 py-2 space-x-2">
                        @foreach ($item->categories as $category)
                            <a href="{{ route('categories.show', $category->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ $category->name }}
                            </a>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>