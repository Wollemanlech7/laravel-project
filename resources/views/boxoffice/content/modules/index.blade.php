@extends('boxoffice.components.layout')

@section('container')

<!-- This example requires Tailwind CSS v2.0+ -->
{{-- <div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="lg:text-center">
        <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2>
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
          A better way to send money
        </p>
        <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
          Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
        </p>
      </div>
  
      <div class="mt-10">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/globe-alt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/scale -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/lightning-bolt -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
  
          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                <!-- Heroicon name: outline/annotation -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Mobile notifications</p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
            </dd>
          </div>
        </dl>
      </div>
    </div>
</div> --}}

	<div class="grid grid-cols-1">
		
		@foreach ($modules as $module)
			
			<div class="mt-10 px-36" aria-hidden="true">
				<header class="flex items-center justify-between">
					<h2 class="text-5xl leading-6 font-medium text-black ml-5 mb-3">{{ $module->module }}</h2>
					<button class="hover:bg-blue-400 hover:text-light-blue-800 group flex items-center rounded-md bg-blue-100 text-blue-600 text-sm font-medium px-4 py-2">
						<svg class="group-hover:text-white text-light-blue-500 mr-2" width="12" height="20" fill="currentColor">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
						</svg>
					</button>
				</header>

				<div class="py-2">
					<div class="border-t border-gray-400"></div>
				</div>
			</div>


			<div class="px-36 pt-1 mx-1">

				<a href="#" class=" p-3 flex items-start rounded-lg hover:bg-gray-50">
					<svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
					</svg>
					<div class="ml-4">
						<p class="text-base font-medium text-gray-900">Analytics</p>
						<p class="mt-1 text-sm text-gray-500">
							Get a better understanding of where your traffic is coming from.
						</p>
					</div>
				</a>

				<div class="py-2">
					<div class="border-t border-gray-200"></div>
				</div>
{{-- 
				<a href="#" class=" p-3 flex items-start rounded-lg hover:bg-gray-50">
					<!-- Heroicon name: outline/cursor-click -->
					<svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
					</svg>
					<div class="ml-4">
					<p class="text-base font-medium text-gray-900">
						Engagement
					</p>
					<p class="mt-1 text-sm text-gray-500">
						Speak directly to your customers in a more meaningful way.
					</p>
					</div>
				</a>

				<div class="py-2">
					<div class="border-t border-gray-200"></div>
				</div>
				<a href="#" class="p-3 flex items-start rounded-lg hover:bg-gray-50">
					<!-- Heroicon name: outline/shield-check -->
					<svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
					</svg>
					<div class="ml-4">
					<p class="text-base font-medium text-gray-900">
						Security
					</p>
					<p class="mt-1 text-sm text-gray-500">
						Your customers&#039; data will be safe and secure.
					</p>
					</div>
				</a>

				<div class="py-2">
					<div class="border-t border-gray-200"></div>
				</div>
				<a href="#" class="p-3 flex items-start rounded-lg hover:bg-gray-50">
					<!-- Heroicon name: outline/view-grid -->
					<svg class="flex-shrink-0 h-6 w-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
					</svg>
					<div class="ml-4">
					<p class="text-base font-medium text-gray-900">
						Integrations
					</p>
					<p class="mt-1 text-sm text-gray-500">
						Connect with third-party tools that you&#039;re already using.
					</p>
					</div>
				</a> --}}

			</div>
		@endforeach


	</div>
	

  @endsection
