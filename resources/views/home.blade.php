<x-layout>
    <x-slot name="title">Home</x-slot>
    <x-slot name='content'>
       <div class="mt-5">
           <div class="text-center">
               <img src="{{asset('images/img.jfif')}}" alt="" class="img-thumbnail" height="150px" width="250px">
           </div>
           <div class="mt-5 text-white text-justify">
               <h1 class="fw-bold title">Hello</h1>
               <div class="px-4">
                   <p style="text-indent:100px;" class="subtitle">I am <b class="text-success">Ramesh Bhinge </b> Experienced Software Engineer with a demonstrated history of working in the information technology and services industry. <span class="text-warning"> Skilled in PHP, SQL ,JS ,AJAX ,jQuery ,CSS ,Bootstrap. </span> 
                    <p class="subtitle">
                        Strong engineering professional with a Master's degree focused in Electronics and Telecommunication  Engineering .
                    </p>
                <div class="text-center">
                    <a href="{{ route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                    <a href="{{ route('contact')}}" class="btn btn-outline-info mx-5 my-3">Contact</a>
                </div>
            
               </div>
           </div>
       </div>
    </x-slot>
</x-layout>