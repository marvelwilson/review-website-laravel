@extends('layouts.admin')
@section('content')
<!--Content Header (Page header)-->
<div class="content-header row align-items-center m-0">
    <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
        <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Volunteers</li>
        </ol>
    </nav>
    <div class="col-sm-8 header-title p-0">
        <div class="media">
            <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
            <div class="media-body">
                <h1 class="font-weight-bold">Volunteers</h1>
                <small>From here you can View, Add, Edit and Delete vol.</small>
            </div>
        </div>
    </div>
</div>
<!--/.Content Header (Page header)-->
<div class="body-content">
    @if($success = session("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{$success}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fs-17 font-weight-600 mb-0">All Volunteers</h6>
                        </div>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example table" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($vols as $vol)
                                <tr>

                                    <td>{{$vol->name}}</td>
                                    <td>{{ \Carbon\Carbon::parse($vol->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm mr-1 editbtn" data-content="{{$vol->content}}"> <i class="far fa-eye"></i></a>

                                        <a href="{{route('admin.deletevolunteer', ['id'=> $vol->id])}}" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Created</th>
                                    <th>Action</th>

                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/.body content-->
</div>
<!--/.main content-->

@include('admin.volunteers.edit')
@endsection
@section('link')
<link rel="stylesheet" href="{{asset('assets1/plugins/datatables/responsive.bootstrap4.min.css')}}">
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function() {
        $('.editbtn').on('click', function(e) {
            e.preventDefault();
            $('#editmodal').modal('show');

            $("#conten").val($(this).attr("data-content"));
        })


    })
</script>

<script src="{{asset('assets1/plugins/datatables/dataTables.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/data-bootstrap4.active.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/buttons.colVis.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets1/plugins/datatables/vfs_fonts.js')}}"></script>

@endsection