<!-- component -->
<div id="new-subject-modal" ="closeModal()" class="flex hidden items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-400 bg-opacity-75">
    <div class="bg-white rounded-lg w-1/2">
        <div class="flex flex-col items-start p-4">
            <div class="flex items-center w-full">
                <div class="px-4 text-gray-900 font-medium text-lg">New subject</div>
                <svg onclick="closeModal()" class="ml-auto fill-current text-gray-400 hover:text-black w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                </svg>
            </div>
            <hr>
            <div class="mt-5 w-full">
                <form action="{{ route('subject.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="hi_course" value="" id="course">
                    <div class="sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5">
                            <label for="subject" class="block text-sm font-medium text-gray-700"></label>
                            <input id="subject" name="txt_subject" class="w-full title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none rounded-md" spellcheck="false" placeholder="Ejemplo: Math" type="text">                  
                        </div>        
                        <!-- <div class=""">
                            <label class="block text-sm font-medium text-gray-700">Photo</label>
                            <div class="mt-1 flex items-center">
                                <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                    <svg class="h-f w- text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                    </svg>
                                </span>
                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Change
                                </button>
                            </div>
                        </div>-->
                    </div>
        
                    <div class="px-4">
                        <button  type="submit" class="py-2 px-4 border border-transparent shadow-sm text-md font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

