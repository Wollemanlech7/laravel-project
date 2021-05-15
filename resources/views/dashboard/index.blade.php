@extends('dashboard.components.main')

@section('title', 'Inicio')
    
@section('dashboard-title', 'Inicio')

@section('content')
    <div class="grid grid-cols-12 gap-4">
        <div class="col-span-7">
            <div class="grid grid-cols-12 gap-4">
                  <!--CUADRO 1-IZQUIERDA-->
                <div class="col-span-4  rounded-md bg-green-200 p-8">
                    <h1 class="font-bold text-xl pb-2">París</h1>
                    <span class="">Francia</span>
                    <img class="pt-5" src="{{ asset('img/modules/calculadora.png') }}" alt="">
                </div>

                <!--CUADRO 2-CENTRO-->
                <div class="col-span-4  rounded-md bg-pink-200 p-8">
                    <h1 class="font-bold text-xl pb-2">Tokyo</h1>
                    <span class="">Japón</span>
                    <img class="pt-5" src="{{ asset('img/modules/calculadora.png') }}" alt="">
                </div>

                <!--CUADRO 3-DERECHA-->
                <div class="col-span-4  rounded-md bg-blue-200 p-8">
                    <h1 class="font-bold text-xl pb-2">Guadalajara</h1>
                    <span class="">México</span>
                    <img class="pt-5" src="{{ asset('img/modules/calculadora.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="col-span-5 bg-black">ujuju</div>
    </div>

@endsection