<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>CookingRecipe </title>

</head>

<body>
    @auth
        <div class="bg-green-200 p-4">
                        <p class="text-green-700 text-center font-semibold">Congrats, you are logged in.</p>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="w-full bg-green-900 hover:bg-green-700 text-white font-medium rounded-lg text-sm px-5 py-2.5 mt-2">
                                Log out
                            </button>
                        </form>
                    </div>
    @else
    <section>
        <div class="bg-gray-100 flex justify-center items-center h-screen">

            <div class="w-1/2 h-screen hidden lg:block">
                <img src="/images/food.jpg" alt="Placeholder Image" class="object-cover w-full h-full">
            </div>
            <div class="lg:p-36 md:p-52 sm:20 p-8 w-full lg:w-1/2">

                <div class="mb-10">
                    <h3 class="text-3xl font-extrabold text-center text-green-950">Delishify Sign Up</h3>
                </div>
                <div id="form">
                    <form id="form" class="space-y-4 md:space-y-6" action="/register" method="post">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">username</label>
                            <input id="name" type="text" name="name"
                                class="mt-1 p-2 w-full border rounded-md" placeholder="username">
                            <p id="usernameError" class="text-red-600 font-medium"> </p>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Your email</label>
                            <input id="email" type="email" name="email"
                                class="mt-1 p-2 w-full border rounded-md" placeholder="email">
                            <p id="emailError" class="text-red-600 font-medium"> </p>
                        </div>
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">password</label>
                            <input id="password" type="password" name="password"
                                class="mt-1 p-2 w-full border rounded-md" placeholder="password">
                            <p id="passwordError" class="text-red-600 font-medium"> </p>
                        </div>

                        <button type="submit"
                            class="w-full text-white hover:bg-green-900 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-green-950 ">Sign
                            up</button>
                        <p class="text-sm mt-6 text-center">you already have an account ?<a href="/signin"
                                class="text-green-950 font-semibold hover:underline ml-1 whitespace-nowrap">login</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    @endauth

    

</body>

</html>
