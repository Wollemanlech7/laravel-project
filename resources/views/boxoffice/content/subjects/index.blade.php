@extends('boxoffice.components.layout')
@section('title', 'Subjects')
@section('container')
   
    @foreach ($objCourses as $course)
        <div class="mt-10" aria-hidden="true">
            <header class="flex items-center justify-between">
                <h2 class="text-lg leading-6 font-medium text-black">{{ $course->exam }}</h2>
                <button onclick="showModal()" class="hover:bg-blue-400 hover:text-light-blue-800 group flex items-center rounded-md bg-blue-100 text-blue-600 text-sm font-medium px-4 py-2">
                    <svg class="group-hover:text-white text-light-blue-500 mr-2" width="12" height="20" fill="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5a1 1 0 011 1v3h3a1 1 0 110 2H7v3a1 1 0 11-2 0v-3H2a1 1 0 110-2h3V6a1 1 0 011-1z"></path>
                    </svg>
                </button>
            </header>

            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">

            @foreach ($objCourseSubject as $courseSubject)
                @if ($courseSubject->course_id == $course->id)
               
                    <a href="{{ $courseSubject->id }}" class="flex hover:{{ $courseSubject->background }} hover:border-transparent hover:shadow-lg group block rounded-lg border border-gray-200">
                        <div class="{{ $courseSubject->background }} w-1 inline-block rounded-l-lg" style="height: 100%"></div>
                        <dl class="m-4 grid sm:block lg:grid xl:block grid-cols-2 grid-rows-2 items-center">
                            <div>
                                <dt class="sr-only">Title</dt>
                                <dd class="leading-6 font-medium text-black">
                                    {{ $courseSubject->subject }}
                                </dd>
                            </div>
                            <div>
                                <dt class="sr-only">Category</dt>
                                <dd class=" text-sm font-medium sm:mb-4 lg:mb-0 xl:mb-4">
                                    Categoria
                                </dd>
                            </div>
                            <div class="col-start-2 row-start-1 row-end-3">
                                <dt class="sr-only">Users</dt>
                                <dd class="flex justify-end sm:justify-start lg:justify-end xl:justify-start -space-x-2">
                                    <img x-for="user in item.users" :src="user.avatar" :alt="user.name" width="48" height="48" class="w-7 h-7 rounded-full bg-gray-100 border-2 border-white" />
                                </dd>
                            </div>
                        </dl>
                    </a>
                @endif
            @endforeach
        </div>
    @endforeach
    @include('boxoffice.content.subjects.modals.new-subjects') 
@endsection
@section('script')
    <script> 
        function showModal(){
            var modal= document.querySelector('#new-subject-modal')
                     
            if (modal.classList.contains('hidden') && modal.classList.contains('flex')) {
                modal.classList.remove('hidden') 
            }
        };

        function closeModal(){
            var modal= document.querySelector('#new-subject-modal')
                     
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden') 
            }
         };

    </script>
@endsection