<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        div {
            text-align: center;
        }

        form {
            width: 300px; /* Adjust the width as needed */
            margin: auto;
        }

        form div {
            margin-bottom: 5; /* Adjust the spacing between input elements */
        }
    </style>
</head>
<body>
    <div class="bg-gray-100 p-8 rounded-md">
        <h1 class="text-2xl font-bold mb-4">Login</h1>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <div>
                <label for="email" class="block text-sm font-semibold text-gray-600">Email:</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}"
                       class="w-full border border-gray-300 rounded-md p-2" required autofocus>
            </div>

            <div>
                <label for="password" class="block text-sm font-semibold text-gray-600">Password:</label>
                <input id="password" type="password" name="password"
                       class="w-full border border-gray-300 rounded-md p-2" required autocomplete="current-password">
            </div>

            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-600">Remember me</label>
            </div>

            <div>
                <button type="submit" class="w-full bg-blue-500 text-white rounded-md py-2">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
