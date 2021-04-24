@extends('boxoffice.components.layout')

@section('title', 'questionnaires')

@section('container')
<div class="grid md:grid-cols-4 sm:grid-cols-2 gap-4">

    @foreach ($questionnaires as $questionnaire)
    <div class="max-w-xs">
        <div class="bg-white shadow-xl rounded-lg py-3">
            <!--div class="photo-wrapper p-2">
                <img class="w-32 h-32 rounded-full mx-auto" src="https://www.gravatar.com/avatar/2acfb745ecf9d4dccb3364752d17f65f?s=260&d=mp" alt="John Doe">
            </div-->
            <div class="p-2 ">
                <h3 class="text-center text-xl text-gray-900 font-medium leading-8">{{$questionnaire->name}}</h3>
                <div class="text-center text-gray-400 text-xs font-semibold">
                    <p>{{$questionnaire->topic_id}}</p>
                </div>
                <table class="text-xs my-3">
                    <tbody><tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Address</td>
                        <td class="px-2 py-2">Chatakpur-3, Dhangadhi Kailali</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Phone</td>
                        <td class="px-2 py-2">+977 9955221114</td>
                    </tr>
                    <tr>
                        <td class="px-2 py-2 text-gray-500 font-semibold">Email</td>
                        <td class="px-2 py-2">john@exmaple.com</td>
                    </tr>
                </tbody></table>
    
                <div class="text-center my-3">
                    <a class="text-xs text-indigo-500 italic hover:underline hover:text-indigo-600 font-medium" href="#">View Profile</a>
                </div>
    
            </div>
        </div>
    </div>
    @endforeach


   
    
</div>
    
    <button style="border:none" onclick="showModal(1)" class="focus:ring border-color: transparent bg-purple-700 text-white rounded-full p-4 shadow-lg hover:bg-purple-900 fixed bottom-6 right-10">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
          </svg>
    </button>
    @include('boxoffice.content.questionnaires.modals.new-questionnaire')
   
@endsection
    

@section('script')
    <script> 
        function showModal(course){
            var modal= document.querySelector('#new-questionnaire-modal')
                     
            if (modal.classList.contains('hidden') && modal.classList.contains('flex')) {
                modal.classList.remove('hidden') 
                document.querySelector('#course').value = course
            }
        };

        function closeModal(){
            var modal= document.querySelector('#new-questionnaire-modal')
                     
            if (!modal.classList.contains('hidden')) {
                modal.classList.add('hidden') 
            }
         };

    </script>
@endsection