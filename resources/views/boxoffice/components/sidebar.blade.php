<div class="flex h-screen absolute top-0 z-20">
    <div class=" bg-gray-800 p-5 border-r w-20 border-gray-200">
        <ul class="mt-12">
                
            <a href="{{ route('boxoffice.dashboard') }}">
                <li     @if(Request::path() == 'boxoffice') {!!'class="bg-purple-400 text-white rounded-lg p-2 mb-3"' !!} 
                        @else {!!'class="hover:bg-gray-700 hover:text-white text-gray-200 rounded-lg p-2 mb-3"' !!} @endif>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                    </svg>
                </li>
            </a>

            @foreach ($_PRIVILEGES_MENU_ as $itemMenu)

                <a href="{{ route($itemMenu['category']['url']) }}">

                    <li @if(Request::routeIs($itemMenu['category']['url'])) {!!'class="bg-purple-400 text-white rounded-lg p-2 mb-3"' !!} 
                        @else {!!'class="hover:bg-gray-700 hover:text-white text-gray-200 rounded-lg p-2 mb-3"' !!} @endif>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            @foreach ($itemMenu['icon'] as $d)
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $d->coordinate }}" />
                            @endforeach
                        </svg>
                    </li>

                </a>

            @endforeach
        </ul>
    </div>
</div>

