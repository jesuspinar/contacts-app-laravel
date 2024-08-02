 @extends('layouts.app')

 @section('content')
   <div class="position-relative p-3 p-md-5 m-md-3 text-center">
     <div class="col-md-6 p-lg-5 mx-auto my-5">
       <h1 class="display-3 fw-bold">Designed for every one</h1>
       <h3 class="fw-normal text-muted mb-3">Store all your contacts with this app</h3>
       <div class="d-flex gap-3 justify-content-center lead fw-normal">
         <a class="icon-link" href="{{ route('register') }}">
           Start now
         </a>
       </div>
     </div>
     <div class="product-device shadow-sm d-none d-md-block"></div>
     <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
   </div>
 @endsection
