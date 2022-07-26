
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 |</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/asset/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">


  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/welcome" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/asset/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
         
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
               
                
                  <a href="/login">
                    <i></i>
                    <p> Log Out</p>
                  </a>
        
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    <div class="container">
      <h1 class="text-center mb-4">Edit Data Agenda</h1>
      <div class="row justify-content-center">
          <div class="col-8">
              <div class="card"> 
                  <div class="card-body" style="width: 90%">
               <form method="POST" action="/updatedatatabel/{{$data->id}}">
                @csrf
                @method('put')
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                <input type="text" name="namaguru" value="{{$data->namaguru}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                @error('namaguru')
                    <div class="text-danger">
                      {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                  <select class="form-select" aria-label="Default select example" name="matapelajaran">
                    <option selected>{{$data->matapelajaran}}</option>
                    <option value="MTK">MTK</option>
                    <option value="B.Indonesia">B.Indonesia</option>
                    <option value="B.Inggris">B.Inggris</option>
                    <option value="PAI">PAI</option>
                    <option value="Penjaskes">Pejaskes</option>
                  </select>
                </div>
              @error('matapelajaran')
                    <div class="text-danger">
                      {{$message}}
                    </div>
              @enderror
              <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Materi Pelajaran</label>
                  <input type="text" name="materipelajaran" value="{{$data->materipelajaran}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('materipelajaran')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jam Pelajaran</label>
                  <select class="form-select" aria-label="Default select example" name="jampelajaran">
                    <option selected>{{$data->jampelajaran}}</option>
                    <option value="06:30-09:00">06:30-09:00</option>
                    <option value="09:30-12:00">09:30-12:00</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Absensi</label>
                  <select class="form-select" aria-label="Default select example" name="absensi">
                    <option selected>{{$data->absensi}}</option>
                    <option value="Hadir">Hadir</option>
                    <option value="Tidak Hadir">Tidak Hadir</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                  <input type="text" name="namakelas" value="{{$data->namakelas}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('namakelas')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Jenis Pembelajaran</label>
                  <select class="form-select" aria-label="Default select example" name="jenispembelajaran">
                    <option selected>{{$data->jenispembelajaran}}</option>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Link Pembelajaran</label>
                  <input type="text" name="linkpembelajaran" value="{{$data->linkpebelajaran}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('linkpembelajaran')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Dokumentasi</label>
                  <input type="file" name="dokumentasi" value="{{$data->dokumentasi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('dokumentasi')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Keterangan</label>
                  <input type="text" name="keterangan" value="{{$data->keterangan}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  @error('keterangan')
                      <div class="text-danger">
                        {{$message}}
                      </div>
                  @enderror
                </div>
              <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
              </div>
          </div>
      </div>
  </div>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>



