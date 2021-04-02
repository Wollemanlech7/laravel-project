@extends('boxoffice.components.layout')

@section('container')
    <div class="grid grid-cols-12 gap-6 bg-red-400">

        <div class="col-span-9 bg-blue-400">
            <div class="grid grid-cols-12 gap-6"> 
                <div class="col-span-8 bg-yellow-400">
                    <div class="rounded-lg border-2 border-black p-4">
                        hola
                    </div>
                </div>

                <div class="col-span-4 bg-pink-400 ">
                    <div class="rounded-lg border-2 border-black p-2 mb-4 flex inline-block align-middle  ">
                        <div class="p-2 bg-white rounded-lg w-14 h-14">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="ml-4 inline-block align-auto">Daily Jogin</span> 
                    </div>
                    <div class="rounded-lg border-2 border-black p-4 ">
                        cuadros 2
                    </div>
                </div>
            </div>

            <!-- TRES CAJAS AL FONDO  -->
            <div class="grid grid-cols-12 gap-6 mt-4">
                <div class="col-span-4 bg-blue-400">
                    <div class="rounded-lg border-2 border-black p-4">
                        cajita uno 
                    </div>              
                </div>  

                <div class="col-span-4 bg-blue-400">
                    <div class="rounded-lg border-2 border-black p-4">
                        cajita dos 
                    </div>              
                </div>  

                <div class="col-span-4 bg-blue-400">
                    <div class="rounded-lg border-2 border-black p-4">
                        cajita tres
                    </div>              
                </div>  
            </div>
        </div>

        <div class="col-span-3 bg-green-400">
            <div class="rounded-lg border-2 border-black p-4">
                admin 
            </div>
        </div>

    </div>
@endsection