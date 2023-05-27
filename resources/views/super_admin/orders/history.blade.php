@extends('layouts.super')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Order by <strong class="text-primary small">{{$user->full_name}}</strong></h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>User ID: <span class="text-base">{{$user->id}}</span></li>
                                    <li>Order Created: <span class="text-base">{{$user->created_at}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card">
                        <div class="card-aside-wrap">
                            <div class="card-content">
                                <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#"><em class="icon ni ni-repeat"></em><span>Transactions History</span></a>
                                    </li>
                                    <li class="nav-item nav-item-trigger d-xxl-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
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
                                </div><!-- .card-inner -->
                            </div><!-- .card-content -->
                            <div class="card-aside card-aside-right user-aside toggle-slide toggle-slide-right toggle-break-xxl" data-content="userAside" data-toggle-screen="xxl" data-toggle-overlay="true" data-toggle-body="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <div class="badge badge-outline-light badge-pill ucap">{{$user->username}}</div>
                                                <h5>{{$user->full_name}}</h5>
                                                <span class="sub-text">{{$user->email}}</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title-alt mb-2">Additional</h6>
                                        <div class="row g-3">
                                            <div class="col-6">
                                                <span class="sub-text">User ID:</span>
                                                <span>{{$user->id}}</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Phone Number:</span>
                                                <span>{{$user->phone}}</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Province/State:</span>
                                                <span class="lead-text text-success">{{$user->province}}</span>
                                            </div>
                                            <div class="col-6">
                                                <span class="sub-text">Register At:</span>
                                                <span>{{$user->created_at}}</span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-aside -->
                        </div><!-- .card-aside-wrap -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection