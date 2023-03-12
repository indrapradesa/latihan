<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>
    <div class="container mx-auto">
        <div class="flex justify-center mt-96">
                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-md shadow sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <img class="rounded-lg shadow-xl dark:shadow-gray-800 mb-4" src="../img/logo.png" alt="image description">
                    <form class="space-y-6" action="/login" method="post">
                        @csrf
                        <h5 class="text-xl font-medium text-gray-900 dark:text-white text-center">Sign in</h5>
                        <div>
                            <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                            <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('username') is-invalid
                            @enderror" placeholder="Username" value="{{ old('username') }}" required autofocus>
                            @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>
                        @if (session()->has('success'))
                            <div>
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session()->has('loginError'))
                            <div class="text-red-400 text-center text-bold">
                                {{ session('loginError') }}
                            </div>
                        @endif
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300 mt-4">
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
</body>
</html>
