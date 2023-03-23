<!DOCTYPE html>
<html lang="en">
  <head>

@include('admin.css')

<style type="text/css">
    .div_center{
        text-align: center;
        padding-top: 40px;
    }
    .h2_font{
        font-size: 40px;
        padding-bottom: 40px;
        color: white;
    }
    .input_color{
        color: black;
    }

</style>


  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        <div class="main-panel">
            @yield('content')
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  @include('admin.script')
  </body>
</html>
