@extends('boxoffice.components.layout')

@section('container')
    <div class="grid grid-cols-12 gap-6">

        <div class="col-span-9">
            <div class="grid grid-cols-12 gap-6"> 
                <div class="col-span-8">
                    <div class="rounded-lg border-2 border-black p-4">
                        <canvas id="myChart" width="400" height="400"></canvas>
                        
                    </div>
                </div>

                <div class="col-span-4">
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
                    
                    <div class="rounded-lg border-2 border-black p-4 text-center">
                        <div class="w-14 h-14 rounded-lg bg-white  m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                              </svg>
                        </div>
                        <div class="text-xl font-bold">
                            cajita uno
                        </div>
                        <div class="text-sm ">
                            cajita uno
                        </div>
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

@section('css')
    <script src="https://cdnjs.com/libraries/Chart.js"></script>
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