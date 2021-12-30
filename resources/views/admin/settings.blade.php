<x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Team Members') }}
            </h2>
        </x-slot>

    <!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
   
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- partial -->
        

          <!-- content-wrapper ends -->

          <div class="container-fluid">
            <h1>Settings</h1>
          </div>

        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>
                
            
</x-app-layout>











