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
                            <h3 class="nk-block-title page-title">User / <strong class="text-primary small">{{$user->full_name}}</strong></h3>
                            <div class="nk-block-des text-soft">
                                <ul class="list-inline">
                                    <li>User ID: <span class="text-base">{{$user->id}}</span></li>
                                    <li>Order Created: <span class="text-base">{{$order->created_at}}</span></li>
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
                                        <a class="nav-link active" href="#"><em class="icon ni ni-user-circle"></em><span>Delivery Details</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('super.historyorder', ['id'=> $user->id])}}"><em class="icon ni ni-repeat"></em><span>Transactions History</span></a>
                                    </li>
                                    <li class="nav-item nav-item-trigger d-xxl-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger" data-target="userAside"><em class="icon ni ni-user-list-fill"></em></a>
                                    </li>
                                </ul><!-- .nav-tabs -->
                                <div class="card-inner">
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">Sender Information</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="profile-ud-list">

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Full Name</span>
                                                    <span class="profile-ud-value">{{$order->sender}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Pickup Address</span>
                                                    <span class="profile-ud-value">{{$order->sender_pickup}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Mobile Number</span>
                                                    <span class="profile-ud-value">{{$order->sender_no}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email Address</span>
                                                    <span class="profile-ud-value">{{$order->sender_email}}</span>
                                                </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->

                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">Receiver Information</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="profile-ud-list">

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Full Name</span>
                                                    <span class="profile-ud-value">{{$order->receiver}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Pickup Address</span>
                                                    <span class="profile-ud-value">{{$order->receiver_dropoff}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Mobile Number</span>
                                                    <span class="profile-ud-value">{{$order->receiver_no}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email Address</span>
                                                    <span class="profile-ud-value">{{$order->receiver_email}}</span>
                                                </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->

                                    <div class="nk-divider divider md"></div>
                                    <div class="nk-block">
                                        <div class="nk-block-head nk-block-head-sm nk-block-between">
                                            <h5 class="title">Delivery Note</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="bq-note">
                                            <div class="bq-note-item">
                                                <div class="bq-note-text">
                                                    <p>{{$order->desc}}</p>
                                                </div>
                                            </div><!-- .bq-note-item -->
                                        </div><!-- .bq-note -->
                                    </div><!-- .nk-block -->
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">Delivery Information</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="profile-ud-list">

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Product</span>
                                                    <span class="profile-ud-value">{{$order->product}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Vehicle</span>
                                                    <span class="profile-ud-value">{{$order->vehicle}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Status</span>
                                                    <span class="profile-ud-value">{{$order->status}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Size</span>
                                                    <span class="profile-ud-value">{{$order->size}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Amount</span>
                                                    <span class="profile-ud-value">{{$order->amount}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Total Amount</span>
                                                    <span class="profile-ud-value">{{$order->sum_amount}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Created order</span>
                                                    <span class="profile-ud-value">{{$order->created_at}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Fulfilled Order</span>
                                                    <span class="profile-ud-value">{{$order->updated_at}}</span>
                                                </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->
                                    @if($order->driver_id != 0)
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <h5 class="title">Rider Information</h5>
                                        </div><!-- .nk-block-head -->
                                        <div class="profile-ud-list">

                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Full Name</span>
                                                    <span class="profile-ud-value">{{$driver->full_name}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Username</span>
                                                    <span class="profile-ud-value">{{$driver->username}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Mobile Number</span>
                                                    <span class="profile-ud-value">{{$driver->phone}}</span>
                                                </div>
                                            </div>
                                            <div class="profile-ud-item">
                                                <div class="profile-ud wider">
                                                    <span class="profile-ud-label">Email Address</span>
                                                    <span class="profile-ud-value">{{$driver->email}}</span>
                                                </div>
                                            </div>
                                        </div><!-- .profile-ud-list -->
                                    </div><!-- .nk-block -->
                                    @endif

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