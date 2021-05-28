<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
    <div class=" w-full p-10 ">
        <div class="grid grid-cols-12  justify-items-center">
            <div class="col-span-12 text-center">
                <h1 class="text-6xl">Comparte tu perfil!</h1>
                <div class="px-52 py-10 text-xl">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quasi eos neque eveniet porro minus possimus nam, dolore ullam corporis eum, et mollitia incidunt 
                        nostrum obcaecati doloremque necessitatibus voluptatem minima? 
                        Sint.</p>
                </div>
            </div>
            <div class="col-span-12">
                <form action="{{ route('user.store') }}" method="POST"> 
                    @csrf
                    <div class="mb-6 col-span-12">
                        <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nombre</label>
                        <input type="text" name="txt_name" id="name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6 col-span-12">
                        <label for="last_name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Apellidos</label>
                        <input type="text" name="txt_last_name" id="last_name" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6 col-span-12">
                        <label for="birthday" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Fecha de Nacimiento</label>
                        <input type="text" name="txt_birthday" id="birthday" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6 col-span-12">
                        <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email</label>
                        <input type="text" name="txt_email" id="email" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6 col-span-12">
                        <label for="password" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Contraseña</label>
                        <input type="password" name="txt_password" id="password" placeholder="John Doe" required class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                    </div>
                    <div class="mb-6">
                        <button type="submit" class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>