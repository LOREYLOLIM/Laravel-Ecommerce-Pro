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
    .colors{
        color: white
    }
    .center{
        margin:auto;
        width: 50%;
        text-align: center;
        justify-content: space-between;
        margin-top: 30px;
        border:3px solid white;
    }
    label{
        display: inline-block;
        width: 200px;
    }
    .div_design{
        padding-bottom: 15px;
    }
    .img_size
    {
        width: 200px;
        height: 200px;
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
            <div class="content-wrapper">
            @yield('content')
            </div>
        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  @include('admin.script')
  </body>
</html>
