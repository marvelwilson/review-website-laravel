@extends('layouts.super')
@section('content')
<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-xl">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="components-preview">

                    <div class="nk-block nk-block-lg">

                        <div class="card card-preview">
                            <div class="card-inner">
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="title nk-block-title">Create Order</h4>
                                        </div>
                                    </div>
                                    <form action="{{ route('super.storeorder') }}" method="POST">
                                        @csrf
                                        <div class="row g-gs">
                                            <div class="col-lg-6">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title">Sender Info</h5>
                                                        </div>
                                                        <div class="row gy-4">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Sender</label>
                                                                    <input type="text" class="form-control form-control-lg" name="sender" placeholder="Enter sender name">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Pick up</label>
                                                                    <input type="text" class="form-control form-control-lg " name="sender_pickup" placeholder="Enter your pick up">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Sender Email</label>
                                                                    <input type="email" class="form-control form-control-lg " name="sender_email" placeholder="Enter sender email">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Sender Phone</label>
                                                                    <input type="text" class="form-control form-control-lg " name="sender_no" placeholder="Enter sender phone number">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Package Name</label>
                                                                    <input type="text" class="form-control form-control-lg" name="product" placeholder="Enter Package name">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Package Size</label>
                                                                    <select class=" form-control form-control-lg" name="size">
                                                                        <option>Default Option</option>
                                                                        @foreach($sizes as $size)
                                                                        <option value="{{$size->name}}">{{$size->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <label class="form-label" for="cf-default-textarea">Description(optional)</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" name="desc" placeholder="Write short description"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title">Receiver Info</h5>
                                                        </div>
                                                        <div class="row gy-4">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Receiver</label>
                                                                    <input type="text" class="form-control form-control-lg" name="receiver" placeholder="Enter receiver name">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Drop off</label>
                                                                    <input type="text" class="form-control form-control-lg " name="receiver_dropoff" placeholder="Enter your dropoff">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Receiver Email</label>
                                                                    <input type="email" class="form-control form-control-lg " name="receiver_email" placeholder="Enter receiver email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Receiver Phone</label>
                                                                    <input type="text" class="form-control form-control-lg " name="receiver_no" placeholder="Enter receiver phone number">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="birth-day">Select Vehicle</label>
                                                                    <select class=" form-control form-control-lg" name="vehicle">
                                                                        <option>Default Option</option>
                                                                        @foreach($vehicles as $vehicle)
                                                                        <option value="{{$vehicle->name}}">{{$vehicle->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Coupon code(optional)</label>
                                                                    <input type="text" class="form-control form-control-lg" name="coupon" placeholder="Enter coupon code">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Amount</label>
                                                                    <input type="text" class="form-control form-control-lg" name="amount" placeholder="Enter amount">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="phone-no">Sum Total</label>
                                                                    <input type="text" class="form-control form-control-lg" name="sum_amount" placeholder="Enter sum total">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-lg-7 offset-lg-5">
                                                <div class="form-group mt-2">
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- .nk-block -->
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div><!-- .components-preview -->
            </div>
        </div>
    </div>
</div>
@endsection