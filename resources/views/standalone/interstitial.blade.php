@extends('layouts.empty')
@section('body')
   <div class="h-screen w-full flex justify-center items-center">
       <div class="mt-4 flex items-center flex-col">
           <svg class="animate-spin -ml-1 mr-3 mb-4 h-16 w-16 text-blue-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
               <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
               <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
           </svg>
           <h1 class="text-lg font-medium">LOADING...</h1>
           <p>Kode sedang diproses, mohon tunggu sebentar!</p>
       </div>
   </div>
@endsection
