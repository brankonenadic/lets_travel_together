@extends('layouts.adminMaster')

@section('content')
 <!-- Page Wrapper -->
 <div id="wrapper">

    <!-- Sidebar -->
  <x-admin-sidebar></x-admin-sidebar>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <x-admin-nav></x-admin-nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 p-3 text-gray-800 text-center">Create Post</h1>

         <div class="row">
            <div class="col col-md-6">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Enter title">
                    </div>
                    <div class="form-group">
                        <label for="post_image">Post image</label>
                        <input type="file" name="post_image" id="post_image" class="form-control-file">
                    </div>
                    <div class="form-group">
                   <select name="category" id=""  class="form-control-file">
                    <option value="">Category</option>
                   </select>
                    </div>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    <button type="submit" class="btn btn-outline-primary">Create</button>
                
                  </form>
            </div>
         </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; LaninTata 2023</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#app">
    <i class="fas fa-angle-up"></i>
  </a>

@endsection