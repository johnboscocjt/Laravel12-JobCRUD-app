<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@400,500;600&display=swap"
        rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white font-hanken-grotesk pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>

            {{-- post a job and logout --}}
            {{-- logout --}}
            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/jobs/create">Post a Job</a>

                    <form action="/logout" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Log Out</button>
                    </form>
                </div>

            @endauth

            {{-- logout --}}



            {{-- login and register --}}

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log In</a>
                    <a href="/register">Register</a>
                </div>
            @endguest


        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>
