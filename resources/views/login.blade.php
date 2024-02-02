<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CookingRecipe</title>
</head>

<body class="bg-cover bg-center bg-green-900 text-white"
    style="background-image: url('/images/food.jpg');">
    <section class="flex items-center justify-center h-screen">
        <div class="bg-green-800 p-8 rounded-lg shadow-md w-full max-w-md">
            <div class="mb-8 text-center">
                <h3 class="text-3xl font-extrabold">Delishify Login</h3>
            </div>
            <form id="form" class="space-y-4" action="/login" method="post">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium">Username</label>
                    <input id="name" type="text" name="loginname"
                        class="mt-1 p-2 w-full border rounded-md text-gray-800" placeholder="Enter your username">
                    <p id="usernameError" class="text-red-600 font-medium"></p>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input id="password" type="password" name="loginpassword"
                        class="mt-1 p-2 w-full border rounded-md text-gray-800" placeholder="Enter your password">
                    <p id="passwordError" class="text-red-600 font-medium"></p>
                </div>
                <button type="submit"
                    class="w-full bg-green-700 hover:bg-green-600 text-white font-medium rounded-lg text-sm px-5 py-2.5">Login</button>
                <p class="text-sm mt-6 text-center">Don't have an account? <a href="/"
                        class="font-semibold hover:underline whitespace-nowrap">Register</a></p>
            </form>
        </div>
    </section>
</body>

</html>
