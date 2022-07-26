
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
                <a href="/tabel" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Agenda</p>
                </a>
                
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
      <div class="card">
        <div class="card-body">
         <a type="button" href="{{ route('tambahtabel') }}" class="btn btn-primary">Tambah +</a>
         <table class="table">
             <thead>
               <tr>
                 <th scope="col">#</th>
                 <th scope="col">Nama Guru</th>
                 <th scope="col">Mata Pelajaran</th>
                 <th scope="col">Materi Pelajaran</th>
                 <th scope="col">Jam Pelajaran</th>
                 <th scope="col">Absensi</th>
                 <th scope="col">Nama Kelas</th>
                 <th scope="col">Jenis Pembelajaran</th>
                 <th scope="col">link Pembelajaran</th>
                 <th scope="col">Dokumentasi</th>
                 <th scope="col">Keterangan</th>
                 <th scope="col">Aksi</th>
               </tr>
             </thead>
             <tbody>
               @php
                   $no = 1;
               @endphp
               @foreach ($data as $index => $row)
               <tr>
                 <th scope="row">{{ $index + $data->firstItem() }}</th>
                 <td>{{ $row->namaguru }}</td>
                 <td>{{ $row->matapelajaran }}</td>
                 <td>{{ $row->materipelajaran }}</td>
                 <td>{{ $row->jampelajaran }}</td>
                 <td>{{ $row->absensi }}</td>
                 <td>{{ $row->namakelas }}</td>
                 <td>{{ $row->jenispembelajaran }}</td>
                 <td>{{ $row->linkpembelajaran }}</td>
                 <td><div class="d-block px-2 py-1">
                     <img src="{{asset('fotodokumentasi/'.$row->dokumentasi)}}" alt="" style="width: 100px;">
                 </div></td>
                 <td>{{ $row->keterangan }}</td>
                 <td class="d-flex mr-2">
                   <form class="mr-2" action="/deletedatatabel/{{$row->id}}" method="POST">
                   @csrf
                   @method('delete')
                   <button type="submit" class="btn btn-danger">Hapus</button>
                   </form>
                     <a type="button" href="/tampilantabel/{{$row->id}}" class="btn btn-warning">Edit</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
           {{ $data->links() }}
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
