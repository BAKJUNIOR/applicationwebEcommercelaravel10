
@extends('Admin_layout.master');

@section('title')
    Admin | Categories
@endsection


@section('content')
 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categories</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ajouter Catégorie</h3>
              </div>

              @if (Session :: has("status"))
              <div class="alert alert-success">
                {{Session::get("status")}}
              </div>
              @endif

              <input type="hidden" {{$increment =1}}>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Numéro</th>
                    <th>Nom Catégorie</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody >
                    @foreach ($categories as $category)
                        
                    <tr>
                      <td>{{$increment}}</td>
                      <td>{{$category->categorie_name}}
                      </td>
                      <td>
                        <a href="{{url('/Admin/editeCategorie/'.$category->id)}}" class="btn btn-primary"><i class="nav-icon fas fa-edit"></i></a>

                        <form action="{{url('/Admin/deleteCategorie/'.$category->id)}}" method="POST" >
                         @csrf
                         @method('DELETE')
                          <!-- <a href="#" id="delete" class="btn btn-danger" ><i class="nav-icon fas fa-trash"></i></a> -->  
                         <input type="submit" id="delete" class="btn btn-danger" value="Supprimer">
                        </form>
                      
                      </td>
                    </tr>
                    <input type="hidden" {{$increment++}}>
                    @endforeach
                  
                 
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Numéro</th>
                    <th>Nom Catégorie</th>
                    <th>Actions</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection

@section('scripts')

<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    
@endsection