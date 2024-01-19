<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page d'accueil</title>

    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-indigo-200 via-red-200 to-yellow-100 min-h-screen flex flex-col justify-center items-center">

    @auth
    <div class="text-center mb-4">
        <p class="text-lg font-semibold text-gray-800">Welcome, {{ Auth::user()->name }}</p>
    </div>
    <div class="mb-4">
        <a href="{{ route('logout') }}" class="text-blue-500 hover:underline">Logout</a>
    </div>
    @endauth

    <div class="text-white text-center">
        <h1 class="text-4xl font-bold mb-4">Page d'accueil</h1>
        <div class="mb-4">
            <a href="{{ route('filiere.index') }}" class="text-blue-500 hover:underline">Liste des Filières</a>
        </div>
        <div>
            <a href="{{ route('etudiants.index') }}" class="text-blue-500 hover:underline">Liste des Étudiants</a>
        </div>
    </div>

</body>

</html>
