<!DOCTYPE html>
<html lang="en">
  <head>
@include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')

        <!-- partial -->
        @include('admin.body')

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  @include('admin.script')
  </body>
</html>
