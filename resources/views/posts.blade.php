<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipes</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-cover bg-center bg-green-200"
    style="background-image: url('/images/food.jpg');">
    <form action="/logout" method="post" class="absolute top-0 right-0 mt-2 mr-2">
        @csrf
        <button type="submit" class="bg-green-900 hover:bg-green-700 text-white font-medium rounded-lg text-sm px-5 py-2.5">
            Log out
        </button>
    </form>

    <div class="container mx-auto mt-8 p-8 bg-white max-w-md">
        <h2 class="text-2xl font-bold mb-4 text-green-700 text-center">Create a new recipe</h2>
        <form action="/create_post" method="post">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-semibold mb-2">Recipe Title</label>
                <input type="text" name="title" id="title" placeholder="Recipe Title" class="w-full p-2 border border-green-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-semibold mb-2">Recipe Description</label>
                <textarea name="body" id="description" placeholder="Recipe Description" rows="4" class="w-full p-2 border border-green-300 rounded-md resize-none"></textarea>
            </div>
            <button type="submit" class="w-full bg-green-900 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Create recipe
            </button>
        </form>
    </div>
</body>

</html>
