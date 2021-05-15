<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title >Dashboard | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    @section('css')
    @show
</head>
<body>
    
    <!-- component -->
	<div x-data="setup()" x-init="$refs.loading.classList.add('hidden');" @resize.window="watchScreen()">
      <!-- Loading screen -->
    	<div class="flex h-screen antialiased text-gray-900  dark:bg-dark dark:text-light">
			<div
				x-ref="loading"
				class="fixed inset-0 z-50 flex items-center justify-center text-2xl font-semibold text-white bg-indigo-800"
				>
				Loading.....
			</div>

      		<!-- Sidebar -->
        	@include('dashboard.components.sidebar')
			<div class="flex flex-col flex-1">
				<!-- Main -->
				<main class="w-full rounded-full">
					@include('dashboard.components.navbar')
					<!-- Content -->
						<div class="w-full p-8">
							@section('content')
							@show
						</div>
					</div>
				</main>
			</div>
    	</div>

    </div>
   



  </div>

	<script>
		const setup = () => {
			return {
				isSidebarOpen: false,
				currentSidebarTab: null,
				isSettingsPanelOpen: false,
				isSubHeaderOpen: false,
				watchScreen() {
					if (window.innerWidth <= 1024) {
						this.isSidebarOpen = false
					}
				},
			}
		}
        feather.replace()
	</script>
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js" defer></script>
    @section('js')
    @show
</body>
</html>

