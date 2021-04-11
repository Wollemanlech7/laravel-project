@extends('boxoffice.components.layout')

@section('title', 'Dashboard')

@section('container')
    <div class="grid grid-cols-12 gap-6">

        <div class="lg:col-span-9 col-span-12">
            <div class="grid grid-cols-12 gap-6"> 
                <div class="lg:col-span-8 col-span-12">
                    <div class="bg-purple-600 rounded-3xl p-4 shadow-md">
                        <canvas id="myChart" width="400" height="320">ñx</canvas>
                    </div>
                </div>

                <div class="lg:col-span-4 col-span-12">
                    <div class="bg-purple-600 text-white rounded-3xl p-4 mb-4 flex items-stretch shadow-md">
                        <div class="bg-purple-300 rounded-2xl w-14 h-14 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                        </div>

                        <span class="pl-4 self-center">Daily Jogin</span> 
                    </div>

                    <div class="relative bg-green-00 flex h-full">
                        <div class="absolute right-0 left-0 bg-pink-600 text-white rounded-3xl p-4 flex items-stretch shadow-md">
                            <div class="bg-pink-300 rounded-2xl w-14 h-14 p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
    
                            <span class="pl-4 self-center">Daily Jogin</span> 
                        </div>
                        <div class="bg-pink-600 text-white rounded-b-3xl w-full h-1/2 px-4 pt-10 pb-4 mt-16 shadow-md">
                            d
                        </div>
                    </div>
                </div>
            </div>

            <!-- TRES CAJAS AL FONDO  -->
            <div class="grid grid-cols-12 gap-6 mt-4 pb-10">

                <div class="lg:col-span-4 col-span-6 pt-10">   
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 p-3 text-gray-200 m-auto  absolute -top-7 inset-x-1/3 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                            </svg>
                        </div>
                        <div class="rounded-2xl bg-blue-50 p-4 shadow-md text-center pt-12">
                            <div class="">
                                <p class="text-xl font-bold">Actividad uno</p>
                                <p class="text-sm">Descripción uno</p>
                            </div>
                        
                            <div class="">
                                <!-- LOADER PENDIENTE -->
                            </div>

                            <div class="grid grid-cols-2 mt-7">
                                <div class="flex items-stretch">
                                    <span class="text-xs self-center">140/80</span>
                                </div>
                                <div>
                                    <div class="bg-red-200 rounded-full py-1 text-xs">2 day left</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 col-span-6 pt-10">   
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 p-3 text-gray-200 m-auto  absolute -top-7 inset-x-1/3 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                            </svg>
                        </div>
                        <div class="rounded-2xl bg-blue-50 p-4 shadow-md text-center pt-12">
                            <div class="">
                                <p class="text-xl font-bold">Actividad uno</p>
                                <p class="text-sm">Descripción uno</p>
                            </div>
                        
                            <div class="">
                                <!-- LOADER PENDIENTE -->
                            </div>

                            <div class="grid grid-cols-2 mt-7">
                                <div class="flex items-stretch">
                                    <span class="text-xs self-center">140/80</span>
                                </div>
                                <div>
                                    <div class="bg-red-200 rounded-full py-1 text-xs">2 day left</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="lg:col-span-4 col-span-6 pt-10">   
                    <div class="relative">
                        <div class="w-16 h-16 rounded-2xl bg-purple-600 p-3 text-gray-200 m-auto  absolute -top-7 inset-x-1/3 shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div class="rounded-2xl bg-blue-50 p-4 shadow-md text-center pt-12">
                            <div class="">
                                <p class="text-xl font-bold">Actividad uno</p>
                                <p class="text-sm">Descripción uno</p>
                            </div>
                        
                            <div class="">
                                <!-- LOADER PENDIENTE -->
                            </div>

                            <div class="grid grid-cols-2 mt-7">
                                <div class="flex items-stretch">
                                    <span class="text-xs self-center">140/80</span>
                                </div>
                                <div>
                                    <div class="bg-red-200 rounded-full py-1 text-xs">2 day left</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="lg:col-span-3 col-span-12">
            <div class="bg-gray-100 rounded-3xl mt-7 ">
                <div class="">
                    <p>Actividades</p>
                </div>
            </div>

            <div class="mt-5">
                <div class="grid grid-cols-12 my-5">
                    <div class="col-span-2">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>
                    </div>
                    <div class="col-span-8 ml-3">
                        <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                        <div class="text-sm text-gray-500">jane.cooper</div>
                    </div>
                    <div class="col-span-2">
                        <button class="hover:bg-gray-200 hover:text-purple-600 rounded-lg p-2 w-10 h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                    </div>
                </div>

                <div class="grid grid-cols-12 my-5">
                    <div class="col-span-2">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>
                    </div>
                    <div class="col-span-8 ml-3">
                        <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                        <div class="text-sm text-gray-500">jane.cooper</div>
                    </div>
                    <div class="col-span-2">
                        <button class="hover:bg-gray-200 hover:text-purple-600 rounded-lg p-2 w-10 h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                    </div>
                </div>

                <div class="grid grid-cols-12 my-5">
                    <div class="col-span-2">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>
                    </div>
                    <div class="col-span-8 ml-3">
                        <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                        <div class="text-sm text-gray-500">jane.cooper</div>
                    </div>
                    <div class="col-span-2">
                        <button class="hover:bg-gray-200 hover:text-purple-600 rounded-lg p-2 w-10 h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                    </div>
                </div>

                <div class="grid grid-cols-12 my-5">
                    <div class="col-span-2">
                        <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                        </div>
                    </div>
                    <div class="col-span-8 ml-3">
                        <div class="text-sm font-medium text-gray-900">Jane Cooper</div>
                        <div class="text-sm text-gray-500">jane.cooper</div>
                    </div>
                    <div class="col-span-2">
                        <button class="hover:bg-gray-200 hover:text-purple-600 rounded-lg p-2 w-10 h-10">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </button>
                        
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        </script>
@endsection