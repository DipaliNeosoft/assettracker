
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->    
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


  <style>
      .container{
          display: flex;
          justify-content: center;
      }
  </style>
</head>
<body>
    
@include('admin.includes.nav')
@include('admin.includes.sidebar')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('.del').click(function(e){

            if(confirm("Are you sure you want to delete this?")){
                var cid=$(this).attr("cid");
                $.ajax({
                    url:"{{route('deletetype')}}",
                    method:'delete',
                    data:{_token:'{{csrf_token()}}',cid:cid},
                    success:function(response){
                     
                        $("#mytable").load(location.href + " #mytable");
                    }
                });
            }
    else{
        return false;
    }   
        });
    });
</script>
<style>
    .container{
        margin-top: 40px;
    }
</style>


        <section class="content">
      <div class="container">
        <div class="">
          <div class="">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><a href="/assettype" class="btn btn-primary">Add asset</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
              
                  <tr>
                  <th>Sr No</th>
        <th>Asset Type</th>
        <th>Asset Description</th>
        <th>Action</th>

            </tr>
                  </thead>
        <tbody>
        @php
            $sn = 1;
            @endphp
            @foreach($type as $t)
    <tr>
    <td class="text-center">{{$sn}}</td>
    <td>{{$t->type}}</td>
    <td>{{$t->description}}</td>
    <td>
        <a href="{{route('edittype', ['id' => $t->id])}}" class="btn btn-primary">Edit</a>
        <a href="javascript::void(0)" cid="{{$t->id}}" class="btn btn-danger del">Delete</a>
    </td>
    @php
            $sn++;
            @endphp
    </tr>
    @endforeach
        </tbody>
    </table>
</section>
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');
  
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>