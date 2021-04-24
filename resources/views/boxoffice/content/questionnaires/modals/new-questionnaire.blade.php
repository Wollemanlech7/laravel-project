<!-- component -->
<div id="new-questionnaire-modal" ="closeModal()" class="flex hidden items-center justify-center fixed left-0 bottom-0 w-full h-full bg-gray-400 bg-opacity-75">
    <div class="bg-white rounded-lg w-1/2">
        <div class="flex flex-col items-start p-4">
            <div class="flex items-center w-full">
                <div class="px-4 text-gray-900 font-medium text-lg">New questionnaires</div>
                <svg onclick="closeModal()" class="ml-auto fill-current text-gray-400 hover:text-black w-6 h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18">
                    <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"/>
                </svg>
            </div>
            <hr>
            <div class="mt-5 w-full">
                <form action="{{ route('questionnaire.save') }}" method="POST">
                    @csrf
                    <input type="hidden" name="hi_course" value="" id="course">
                    <div class="sm:rounded-md sm:overflow-hidden">
                        <div class="px-4 py-5">
                            <label for="questionnaire" class="block text-sm font-medium text-gray-700"></label>
                            <input id="questionnaire" name="txt_questionnaire" class="w-full title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none rounded-md" spellcheck="false" placeholder="Ejemplo: Math" type="text">                  
                        </div>        
                  
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

