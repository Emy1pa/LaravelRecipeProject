<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Posts</title>
</head>
<form action="{{url('/search')}}" method="get" class="mb-4 mt-4 ml-4">
    <div class="flex items-center space-x-2">
        <input type="search" name="query"
            class="w-40 p-2 border border-white rounded-md focus:outline-none focus:border-red-500"
            placeholder="Search...">
        <button type="submit"
            class="bg-white text-red-500 hover:bg-red-700 hover:text-white font-bold py-2 px-4 rounded-full">
            Search
        </button>
    </div>
</form>

<body class="bg-cover bg-center bg-red-500" style="background-image: url('/images/food.jpg');">
    <div class="border-3 border-black p-6">
        <h2 class="text-3xl font-bold mb-4 text-white text-center">ALL RECIPE POSTS</h2>
<!-- ... (previous code) ... -->

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($posts as $post)
        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
            <div class="w-full h-48">
                <img class="w-full h-full object-cover" src="images/offres/{{$post->image}}" alt="Food Image">
            </div>
            <div class="p-6">
                <h3 class="text-xl font-bold mb-2 text-red-500">{{$post['title']}}</h3>
                <p class="text-gray-700">{{$post['body']}}</p>
            </div>
            <div class="flex justify-center items-center bg-red-500 text-white py-2 px-4 text-center">
                <button class="bg-white text-red-500 hover:bg-red-700 hover:text-white font-bold py-2 px-4 rounded-full mr-2">
                    <a href="/edit-post/{{$post->id}}">Edit Post</a></button>
                <form action="/delete-post/{{$post->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-white text-red-500 hover:bg-red-700 hover:text-white font-bold py-2 px-4 rounded-full">Delete Post</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<!-- ... (remaining code) ... -->

    </div>
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-green-900 hover:bg-green-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>
    <div class="absolute top-2 right-28 mt-2 mr-2">
       <div> <a href="/posts"  class="bg-green-900 hover:bg-green-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
        Create recipe
    </a></div>    
        
    </div>
    
    
</body>
</html>
