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

<!-- Required meta tags-->
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="empform/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="empform/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="empform/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="empform/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="empform/css/main.css" rel="stylesheet" media="all">

     <!-- datatable cdn css-->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">



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

        
        

          <!-- form -->

          <div class="container-fluid">
            
          <div class="d-flex flex-row-reverse mx-5">
            
                
      <!-- emp model -->

@include('empmodel')


<!-- End Modal -->
      <!-- emp model end -->

          </div><br><br>

          
          @include('employee_table')

          </div>

        <!-- main-panel ends -->
      </div>

      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
   



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<!-- forms  -->

 <!-- Jquery JS-->
 <script src="empform/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="empform/vendor/select2/select2.min.js"></script>
    <script src="empform/vendor/datepicker/moment.min.js"></script>
    <script src="empform/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="empform/js/global.js"></script>

    <!-- datatable cdn script-->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
   

<!-- edited data script -->


<script type="text/javascript">

  $(document).ready(function(){

    var table = $('#datatable').DataTable();

    $(document).on('click','.deletebtn',function(){
      var team_id = $(this).val();
      // alert(team_id);
      $('#deleteModal').modal('show');
      $('#deleteing_id').val(team_id);
    });

    $(document).on('click','.editbtn',function(){

        var team_id = $(this).val();
        // alert(team_id); 
        $('#editModal').modal('show');

        $.ajax({
          type:"GET",
          url:"/update-employee/"+team_id,
          success:function(response){
            // console.log(response);
            $('#fname').val(response.employees.fname);
            $('#lname').val(response.employees.lname);
            $('#email').val(response.employees.email);
            $('#phone').val(response.employees.phone);
            $('#address').val(response.employees.address);
            $('#role').val(response.employees.role);
            $('#type').val(response.employees.type);
            $('#status').val(response.employees.status);
            $('#team_id').val(team_id);
          }
        });

    });


  
  });
</script>

  </body>
</html>
                
            
</x-app-layout>











