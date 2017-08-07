@extends('admin.layouts.app')
@section('headSection')

<link rel="stylesheet" href="{{asset('admin/')}}/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
  <h1>
        Tanvir's Blog Page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Permission</h3>
         <a class="col-lg-offset-6 btn btn-success"href="{{ url('admin/permission/create') }}">Add New</a>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
         <section class="content">
      <div class="row">
        <div class="col-xs-12">
         
          <div class="box">
            <div class="box-header">
              @include('includes.message')
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Permission Name</th>
                  <th>Permission For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
            @foreach ($permissions as $permission)
             <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$permission->name}}</td>
                  <td>{{$permission->for}}</td>
                  
                  <td><a href="{{ route('permission.edit',$permission->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                  
                  <td>
      <form id="delete-form-{{$permission->id}}" method="post"
      action="{{route('permission.destroy',$permission->id)}}" style="display: none">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                    
    </form>
  <a href=""onclick="if(confirm('are u sure,u want to delete this?'))
  {event.preventDefault();document.getElementById('delete-form-{{$permission->id}}').submit();}
  else
    {event.preventDefault();}">
  <span class="glyphicon glyphicon-trash"></span></a></td>
                </tr>
                
            @endforeach
                
                </tbody>
                <tfoot>
                <tr>
                   <th>S.No</th>
                  <th>Permission Name</th>
                  <th>Permission For</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection

 @section('footerSection')

 <script src="{{asset('admin/')}}/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('admin/')}}/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
 @endsection