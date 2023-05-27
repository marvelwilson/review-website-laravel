@extends('layouts.super')
@section('content')
<!-- content @s -->
<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Dashboard</h3>
                        </div><!-- .nk-block-head-content -->

                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Orders</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">464</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger"><span>
                                                        Today Analysics</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Revenue</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">42422</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger"><span>
                                                        Today Analysics</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Today Customers</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">2424</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger">Today Analysics</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->
                        <div class="col-xxl-3 col-sm-6">
                            <div class="card">
                                <div class="nk-ecwg nk-ecwg6">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Fulfilled Orders</h6>
                                            </div>
                                        </div>
                                        <div class="data">
                                            <div class="data-group">
                                                <div class="amount">2424</div>
                                                <div class="nk-ecwg6-ck">
                                                    <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                </div>
                                            </div>
                                            <div class="info"><span class="change up text-danger">Today Analysics</span></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .nk-ecwg -->
                            </div><!-- .card -->
                        </div><!-- .col -->

                        <div class="col-xxl-8">
                            <div class="card card-full">
                                <div class="card-inner">
                                    <div class="card-title-group">
                                        <div class="card-title">
                                            <h6 class="title">Message</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-inner">
                                    <div class="nk-tb-list mt-n2">
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
                                                    <th class="nk-tb-col"><span class="sub-text">Phone</span></th>
                                                    <th class="nk-tb-col tb-col-mb"><span class="sub-text">Subject</span></th>
                                                    <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                    <th class="nk-tb-col tb-col-lg"><span class="sub-text">Created At</span></th>
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
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-info">
                                                                <span class="tb-lead">{{$message->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                <span>{{$message->email}}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb" data-message="35040.34">
                                                        <span class="tb-amount">{{$message->phone}} </span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">{{$message->subject}}</span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <span class="tb-status text-success">{{$message->status}}</span>
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
                                                                            <li><a href="{{route('super.deletemessage', ['id'=> $message->id])}}"><em class="icon ni ni-eye"></em><span>View message</span></a></li>

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
                                </div>
                            </div><!-- .card -->
                        </div>
                    </div><!-- .row -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->
@endsection