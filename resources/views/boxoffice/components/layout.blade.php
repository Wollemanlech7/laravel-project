<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    @include('boxoffice.components.navbar')
    @include('boxoffice.components.sidebar')

    {{--<header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">
                Dashboard
            </h1>
        </div>
    </header>--}}
    
    
    <main>
        <div class="container px-4">
           @section('container')

           @show 
        </div>
    </main>

</body>
</html>