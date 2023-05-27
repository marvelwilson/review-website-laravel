@extends('layouts.admin')
@section('content')
<!--Content Header (Page header)-->
<div class="content-header row align-items-center m-0">
    <nav aria-label="breadcrumb" class="col-sm-4 order-sm-last mb-3 mb-sm-0 p-0 ">
        <ol class="breadcrumb d-inline-flex font-weight-600 fs-13 bg-white mb-0 float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Resources</li>
        </ol>
    </nav>
    <div class="col-sm-8 header-title p-0">
        <div class="media">
            <div class="header-icon text-success mr-3"><i class="typcn typcn-spiral"></i></div>
            <div class="media-body">
                <h1 class="font-weight-bold">Resources</h1>
                <small>From here you can View, Add, Edit and Delete resource.</small>
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
                            <h6 class="fs-17 font-weight-600 mb-0">All Resources</h6>
                        </div>
                        <div class="text-right">
                            <div class="actions">
                                <button class="btn btn-success md-trigger mb-2 mr-1" data-toggle="modal" data-target="#addmodal">Add Resource</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example table" class="table display table-bordered table-striped table-hover">
                            <thead>
                                <tr>

                                    <th>Title</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($resources as $resource)
                                <tr>

                                    <td>{{$resource->title}}</td>
                                    <td>{{ \Carbon\Carbon::parse($resource->created_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="#" class="btn btn-success-soft btn-sm mr-1 editbtn"> <i class="fas fa-cloud-download-alt"></i></a>

                                        <a href="{{route('admin.deleteresource', ['id'=> $resource->id])}}" class="btn btn-danger-soft btn-sm"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Title</th>
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
@include('admin.resources.create')
@include('admin.resources.edit')
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


            $("#id").val($(this).attr("data-id"));
            $("#nam").val($(this).attr("data-name"));
            $("#compan").val($(this).attr("data-company"));
            $("#positio").val($(this).attr("data-position"));
            $("#conten").val($(this).attr("data-content"));
        })

        $("#addForm").submit((e) => {
            e.preventDefault();
            const formData = new FormData(document.querySelector("#addForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });

            $.ajax({

                method: "post"
                , url: "{{ route('admin.storeresource') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".add-btn").text("Adding...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".add-btn").text("Send");
                        /*   $('#table').append(" <tr><td> <div class='avatar-group'><a href='user_profile.html' class='avatar avatar-xs' data-toggle='tooltip' title='Melissa Ayre'> <img src='' alt='people' class='avatar-img rounded-circle' /></a></div> </td><td>" + data.author + "</td><td>"
                            data.title "</td><td>"
                            data.content "</td><td></td> </tr>");

 */
                        window.setTimeout(function() {
                            location.reload();
                            $("#addmodal").modal("hide");
                        }, 2000);
                    }

                }
                , error: (error) => {
                    console.log(error)
                }

            })
        })
        $("#editForm").submit((e) => {
            e.preventDefault();
            const formData = new FormData(document.querySelector("#editForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });

            $.ajax({

                method: "POST"
                , url: "{{ route('admin.updateresource') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".update-btn").text("Updating...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".update-btn").text("Update");
                        window.setTimeout(function() {
                            location.reload();
                            $("#editmodal").modal("hide");
                        }, 2000);
                    }

                }
                , error: (error) => {
                    console.log(error)
                }

            })
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