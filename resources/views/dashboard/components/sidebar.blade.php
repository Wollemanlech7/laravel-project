
<div class="flex flex-shrink-0 transition-all">
    <div x-show="isSidebarOpen" @click="isSidebarOpen = false" class="fixed inset-0 z-10 bg-black bg-opacity-50 lg:hidden"></div>
    <div x-show="isSidebarOpen" class="fixed inset-y-0 z-10 w-16 bg-white"></div>
	

    <!-- Mobile bottom bar -->
    <nav aria-label="Options" class="fixed inset-x-0 bottom-0 flex flex-row-reverse items-center justify-between px-4 py-2 bg-white border-t border-indigo-100 sm:hidden shadow-t rounded-t-3xl">
		<!-- Menu button -->
		<button
			@click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
			class="p-2 transition-colors rounded-lg shadow-md hover:bg-indigo-800 hover:text-white focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
			:class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-white bg-indigo-600' : 'text-gray-500 bg-white'"
		  >
			<span class="sr-only">Toggle sidebar</span>
			<svg
			aria-hidden="true"
			class="w-6 h-6"
			xmlns="http://www.w3.org/2000/svg"
			fill="none"
			viewBox="0 0 24 24"
			stroke="currentColor"
			>
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
			</svg>
		</button>

		<!-- Logo -->
		<a href="#">
			<img
			class="w-10 h-auto"
			src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
			alt="K-UI"
			/>
		</a>

		<!-- User avatar button -->
		<div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
			<button
			@click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
			class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
			>
				<img
					class="w-8 h-8 rounded-lg shadow-md"
					src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
					alt="Ahmed Kamel"
				/>
				<span class="sr-only">User menu</span>
			</button>
			<div
			x-show="isOpen"
			@click.away="isOpen = false"
			@keydown.escape="isOpen = false"
			x-ref="userMenu"
			tabindex="-1"
			class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
			role="menu"
			aria-orientation="vertical"
			aria-label="user menu"
			>
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
			</div>
		</div>
    </nav>

    <!-- Left mini bar -->
    <nav
      aria-label="Options"
      class="z-20 flex-col items-center flex-shrink-0 sm:hidde w-20 py-4 bg-gradient-to-r from-blue-50 to-blue-50 opacity- sm:flex"
      >
		<!-- Logo -->
		<div class="flex-shrink-0 pt-1 pb-8">
			<button
			  @click="(isSidebarOpen && currentSidebarTab == 'linksTab') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
			  class="p-2 transition-colors hover:text-purple-700 focus:outline-none"
			  :class="(isSidebarOpen && currentSidebarTab == 'linksTab') ? 'text-p' : 'text-gray-500  '"
			  >
				<span class="sr-only">Toggle sidebar</span>
				<svg
					aria-hidden="true"
					class="w-6 h-6"
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke="currentColor"
				>
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
				</svg>
			</button>
		</div>
		<div class="flex flex-col items-center flex-1 p-2 space-y-4">
			<!-- Home button -->
			<button
			  @click="(isSidebarOpen && currentSidebarTab == 'Home') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
			  class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
			  :class="(isSidebarOpen && currentSidebarTab == 'Home') ? 'text-white bg-indigo-600' : 'text-gray-500 '"
			  >
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="home"></i>
			</button>
			<!-- Calendar button -->
			<button
				@click="(isSidebarOpen && currentSidebarTab == 'Calendar') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
				class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
				:class="(isSidebarOpen && currentSidebarTab == 'Calendar') ? 'text-white bg-indigo-600' : 'text-gray-500 '">
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="calendar"></i>
			</button>
			<!-- Messages button -->
			<button
				@click="(isSidebarOpen && currentSidebarTab == 'Messages') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
				class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
				:class="(isSidebarOpen && currentSidebarTab == 'Messages') ? 'text-white bg-indigo-600' : 'text-gray-500 '">
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="edit-3"></i>
			</button>
			<!-- Checklist button -->
			<button
				@click="(isSidebarOpen && currentSidebarTab == 'Checklist') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
				class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
				:class="(isSidebarOpen && currentSidebarTab == 'Checklist') ? 'text-white bg-indigo-600' : 'text-gray-500 '">
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="clock"></i>
				
			</button>
			<!-- Settings button -->
			<button
				@click="(isSidebarOpen && currentSidebarTab == 'Settings') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
				class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
				:class="(isSidebarOpen && currentSidebarTab == 'Settings') ? 'text-white bg-indigo-600' : 'text-gray-500 '">
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="settings"></i>
			</button>
			<!-- Level -->
			<a
			href="{{ route('price') }}"
				@click="(isSidebarOpen && currentSidebarTab == 'Settings') ? isSidebarOpen = false : isSidebarOpen = true; currentSidebarTab = 'linksTab'"
				class="p-3 transition-colors rounded-full hover:bg-purple-700 hover:text-white"
				:class="(isSidebarOpen && currentSidebarTab == 'Settings') ? 'text-white bg-indigo-600' : 'text-gray-500 '">
				<span class="sr-only">Toggle sidebar</span>
				<i data-feather="shopping-bag"></i>
			</a>
		</div>

      <!-- User avatar -->
		<!--<div class="relative flex items-center flex-shrink-0 p-2" x-data="{ isOpen: false }">
			<button
			  @click="isOpen = !isOpen; $nextTick(() => {isOpen ? $refs.userMenu.focus() : null})"
			  class="transition-opacity rounded-lg opacity-80 hover:opacity-100 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-white focus:ring-offset-2"
			  >
				<img
					class="w-10 h-10 rounded-lg shadow-md"
					src="https://avatars.githubusercontent.com/u/57622665?s=460&u=8f581f4c4acd4c18c33a87b3e6476112325e8b38&v=4"
					alt="Ahmed Kamel"
				/>
				<span class="sr-only">User menu</span>
			</button>
			<div
			  x-show="isOpen"
			  @click.away="isOpen = false"
			  @keydown.escape="isOpen = false"
			  x-ref="userMenu"
			  tabindex="-1"
			  class="absolute w-48 py-1 mt-2 origin-bottom-left bg-white rounded-md shadow-lg left-10 bottom-14 focus:outline-none"
			  role="menu"
			  aria-orientation="vertical"
			  aria-label="user menu"
			  >
				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>

				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>

				<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
			</div>
		</div>-->
    </nav>

    <div
      x-transition:enter="transform transition-transform duration-300"
      x-transition:enter-start="-translate-x-full"
      x-transition:enter-end="translate-x-0"
      x-transition:leave="transform transition-transform duration-300"
      x-transition:leave-start="translate-x-0"
      x-transition:leave-end="-translate-x-full"
      x-show="isSidebarOpen"
      class="fixed inset-y-0 left-0 z-10 flex-shrink-0 w-64 bg-white border-r-2 border-indigo-100 shadow-lg sm:left-16 rounded-tr-3xl rounded-br-3xl sm:w-72 lg:static lg:w-64"
      >
		<nav x-show="currentSidebarTab == 'linksTab'" aria-label="Main" class="flex flex-col h-full">
			<!-- Logo -->
			<div class="flex items-center justify-center flex-shrink-0 py-10">
				<a href="#">
					<img
					class="w-24 h-auto"
					src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/main/public/assets/images/logo.png"
					alt="K-UI"
					/>
				</a>
			</div>

			<!-- Links -->
			<div class="flex-1 px-4 space-y-2 overflow-hidden hover:overflow-auto">
				<a href="#" class="flex items-center w-full space-x-2 text-white bg-indigo-600 rounded-lg">
					<span aria-hidden="true" class="p-2 bg-indigo-700 rounded-lg">
						<svg
							class="w-6 h-6"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						  >
							<path
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
							/>
						</svg>
					</span>
					<span>Home</span>
				</a>
				<a
					href="#"
					class="flex items-center space-x-2 text-indigo-600 transition-colors rounded-lg group hover:bg-indigo-600 hover:text-white"
				  >
					<span
					aria-hidden="true"
					class="p-2 transition-colors rounded-lg group-hover:bg-indigo-700 group-hover:text-white"
					>
						<svg
							class="w-6 h-6"
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke="currentColor"
						  >
							<path
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"
							/>
						</svg>
					</span>
					<span>Pages</span>
				</a>
			</div>

			<div class="flex-shrink-0 p-4 mt-10">
				<div class="hidden p-2 space-y-6 bg-gray-100 rounded-lg md:block">
					<img
					aria-hidden="true"
					class="-mt-10"
					src="https://raw.githubusercontent.com/kamona-ui/dashboard-alpine/52b4b4abb92ef251f6610be416038b48209d7a81/public/assets/images/undraw_web_developer_p3e5.svg"
					/>
					<p class="text-sm text-indigo-600">
						Use our <span class="text-base text-indigo-700er">Premium</span> features now! <br />
					</p>
					<button
					class="w-full px-4 py-2 text-center text-white transition-colors bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-2 focus:ring-offset-gray-100"
					>
						Upgrade to pro
					</button>
				</div>

				<button
					class="w-full px-4 py-2 text-center text-white transition-colors bg-indigo-600 rounded-lg md:hidden hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-600 focus:ring-offset-2 focus:ring-offset-gray-100"
				  >
					Upgrade to pro
				</button>
			</div>
		</nav>

		<section x-show="currentSidebarTab == 'messagesTab'" class="px-4 py-6">
			<h2 class="text-xl">Messages</h2>
		</section>

		<section x-show="currentSidebarTab == 'notificationsTab'" class="px-4 py-6">
			<h2 class="text-xl">Notifications</h2>
		</section>
    </div>
</div>