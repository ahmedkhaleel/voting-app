<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Ahmed Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-100 text-gray-900 text-sm">
        <header class="flex items-center justify-between px-8 py-4">

                <a href="#">
                    <img width="150" src="{{asset('img/logo.svg')}}" >
                </a>

            <div class="flex items-center">
                @if (Route::has('login'))
                    <div class=" px-6 py-4 ">
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{route('logout')}}"
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log out') }}
                                </a>
                            </form>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                <a href="#">
                <img src="https://www.gravatar.com/avatar/000000000000000000000000000000?d=mp"
                alt="avatar" class="w-10 h-10 rounded-full" >
                </a>


            </div>

        </header>
    <main class="container mx-auto max-w-custom flex">
        <div class="w-70 mr-5">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="w-175">
            <nav class="flex items-center justify-between text-xs">
                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="border-b-4 pb-3 border-blue-700">All Ideas (78)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-800">Considering (6)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-800">In Progress (6)</a>
                    </li>

                </ul>



                <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-800">implemented(6)</a>
                    </li>
                    <li>
                        <a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-800">closed (6)</a>
                    </li>


                </ul>
            </nav>

            <div class="mt-8">
                {{ $slot }}
            </div>
        </div>
    </main>
    </body>
</html>
