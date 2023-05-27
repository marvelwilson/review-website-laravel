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
                                    <h3 class="nk-block-title page-title">all Messages</h3>
                                </div>
                                {{-- <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-1">
                                        <li><a href="#add-user" class="btn btn-primary" data-toggle="modal"><em class="icon ni ni-upload-cloud"></em> <span>Add Message</span></a></li>
                                    </ul>
                                </div> --}}

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
                                            <th class="nk-tb-col"><span class="sub-text">Name</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Phone</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Subject</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Creat at</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr class="nk-tb-item">
                                            <td class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span>{{$message->name}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span>{{$message->phone}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span>{{$message->email}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb">
                                                <span>{{$message->subject}}</span>
                                            </td>

                                            <td class="nk-tb-col tb-col-lg">
                                                <span>{{ \Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href=""><em class="icon ni ni-eye"></em><span>View/Edit Details</span></a></li>
                                                                    <li><a href="{{route('super.deletemessage', ['id'=> $message->id])}}"><em class="icon ni ni-repeat"></em><span>Delete Account</span></a></li>
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
                , url: "{{ route('super.storemessage') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".add-btn").text("Adding...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".add-btn").text("Send");
                        /*   $('#table').append(" <tr><td> <div class='avatar-group'><a href='message_profile.html' class='avatar avatar-xs' data-toggle='tooltip' title='Melissa Ayre'> <img src='' alt='people' class='avatar-img rounded-circle' /></a></div> </td><td>" + data.author + "</td><td>"
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
                , url: "{{ route('super.updatemessage') }}"
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