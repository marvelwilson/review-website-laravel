@extends('layouts.super')
@section('content')
<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">

                    <div class="nk-block nk-block-lg">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between position-relative">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Registered {{$type}}s</h3>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-1">
                                        <li><a href="#add-user" class="btn btn-primary" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em> <span>Add {{$type}}</span></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="card card-preview">
                            <div class="card-inner">
                                <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                    <thead>
                                        <tr class="nk-tb-item nk-tb-head">
                                            <th class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </th>
                                            <th class="nk-tb-col"><span class="sub-text">User</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Username</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Username</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Status</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Province</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$user->full_name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{$user->email}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span>{{$user->username}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$user->phone}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$user->username}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$user->status}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">{{$user->province}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg">
                                                <span>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    @if($type=='Driver')
                                                                    <li><a href="{{route('super.viewdocument', ['id'=> $user->id])}}"><em class="icon ni ni-focus"></em><span>View Document</span></a></li>
                                                                    @endif
                                                                    <li><a href="{{route('super.viewprofile', ['id'=> $user->id])}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    @if($user->status != 'Disabled')
                                                                    <li><a href="#" class="delete-btn" data-accept="{{$user->id}}" data-status="Disabled"><em class="icon ni ni-repeat"></em><span>Disable Account</span></a></li>
                                                                    @else
                                                                    <li><a href="#" class="delete-btn" data-accept="{{$user->id}}" data-status="Active"><em class="icon ni ni-repeat"></em><span>Restore Account</span></a></li>
                                                                    @endif
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr><!-- .nk-tb-item  -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@include('super_admin.users.create')
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        $('.delete-btn').on('click', function(e) {
            e.preventDefault();
            var id = $(this).attr("data-accept");
            var status = $(this).attr("data-status");
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });
            console.log(id);
            $.ajax({

                method: "post"
                , url: "{{ route('super.deleteuser') }}"
                , data: {
                    id: id
                    , status: status
                }
                , success: (response, data) => {
                    console.log(data);
                    if (response.success) {
                        window.setTimeout(function() {
                            location.reload();
                        }, 2000);
                    }

                }
                , error: (error) => {
                    console.log(error)
                }

            })
        })


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
                , url: "{{ route('super.storeuser') }}"
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
                , url: "{{ route('super.updateuser') }}"
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
@endsection