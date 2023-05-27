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
                                    <h3 class="nk-block-title page-title">All {{$type}} Orders</h3>
                                </div>
                                <div class="nk-block-head-content">
                                    <ul class="nk-block-tools g-1">
                                        <li><a href="{{ route('super.createorder') }}" class="btn btn-primary"><em class="icon ni ni-upload-cloud"></em> <span>Add Orders</span></a></li>
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
                                            <th class="nk-tb-col"><span class="sub-text">Sender</span></th>
                                            <th class="nk-tb-col"><span class="sub-text">Receiver</span></th>
                                            <th class="nk-tb-col tb-col-mb"><span class="sub-text">Sum Total</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Vehicle</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
                                            <th class="nk-tb-col tb-col-lg"><span class="sub-text">Updated At</span></th>
                                            <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
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
                                                        <span class="tb-lead">{{$order->sender}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{$order->sender_email}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="tb-lead">{{$order->receiver}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                        <span>{{$order->receiver_email}}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                <span class="tb-amount">{{$order->sum_amount}} <span class="currency">USD</span></span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span>{{$order->vehicle}}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg">
                                                <span>{{ \Carbon\Carbon::parse($order->created_at)->diffForHumans() }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-lg">
                                                <span>{{ \Carbon\Carbon::parse($order->updated_at)->diffForHumans() }}</span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md">
                                                <span class="tb-status text-success">{{$order->status}}</span>
                                            </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">

                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{route('super.detailorder', ['id'=> $order->id])}}"><em class="icon ni ni-eye"></em><span>View Order</span></a></li>
                                                                    @if($type=='Pending')
                                                                    <li><a href="#" class="accept-btn" data-accept="{{$order->id}}" data-status="Active"><em class="icon ni ni-eye"></em><span>Accept Order</span></a></li>
                                                                    @endif
                                                                    @if($type=='Active')
                                                                    <li><a href="#" class="editbtn" data-id="{{$order->id}}"><em class="icon ni ni-focus"></em><span>Assign Order</span></a> </li>
                                                                    @endif
                                                                    @if($type=='Assigned')
                                                                    <li><a href="#" class="accept-btn" data-accept="{{$order->id}}" data-status="Completed"><em class="icon ni ni-eye"></em><span>Complete Order</span></a></li>
                                                                    @endif
                                                                    @if($type=='Active' || $type=='Pending'||$type=='Assigned')
                                                                    <li><a href="#" class="accept-btn" data-accept="{{$order->id}}" data-status="Cancel"><em class="icon ni ni-repeat"></em><span>Cancel Order</span></a></li>
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
@include('super_admin.orders.update')
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {



        $('.accept-btn').on('click', function(e) {
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
                , url: "{{ route('super.acceptorder') }}"
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
                , url: "{{ route('super.storeorder') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".add-btn").text("Adding...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".add-btn").text("Send");
                        /*   $('#table').append(" <tr><td> <div class='avatar-group'><a href='order_profile.html' class='avatar avatar-xs' data-toggle='tooltip' title='Melissa Ayre'> <img src='' alt='people' class='avatar-img rounded-circle' /></a></div> </td><td>" + data.author + "</td><td>"
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
        $('.editbtn').on('click', function(e) {
            e.preventDefault();
            $('#update-order').modal('show');


            $("#id").val($(this).attr("data-id"));
        })

        $("#assignForm").submit((e) => {
            e.preventDefault();
            const formData = new FormData(document.querySelector("#assignForm"));
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr("content")
                }
            });

            $.ajax({

                method: "POST"
                , url: "{{ route('super.assignorder') }}"
                , contentType: false
                , processData: false
                , data: formData
                , beforeSend: () => {
                    $(".update-btn").text("Assigning...");

                }
                , success: (response) => {

                    if (response.success) {
                        $(".update-btn").text("Assign to Rider");
                        window.setTimeout(function() {
                            location.reload();
                            $("#assignmodal").modal("hide");
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