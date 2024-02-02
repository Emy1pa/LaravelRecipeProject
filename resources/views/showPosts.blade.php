<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Posts</title>
</head>
<body class="bg-cover bg-center bg-red-500" style="background-image: url('/images/food.jpg');">
    <div class="border-3 border-black p-6">
        <h2 class="text-3xl font-bold mb-4 text-white text-center">ALL RECIPE POSTS</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($posts as $post)
                <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                    <img class="w-full h-40 object-cover" src="/images/food-placeholder.jpg" alt="Food Image">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2 text-red-500">{{$post['title']}}</h3>
                        <p class="text-gray-700">{{$post['body']}}</p>
                    </div>
                    <div class="bg-red-500 text-white py-2 px-4 text-center">
                        <button class="bg-white text-red-500 hover:bg-red-700 hover:text-white font-bold py-2 px-4 rounded-full mr-2">Edit Post</button>
                        <button class="bg-white text-red-500 hover:bg-red-700 hover:text-white font-bold py-2 px-4 rounded-full">Delete Post</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-green-900 hover:bg-green-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
</body>
</html>
