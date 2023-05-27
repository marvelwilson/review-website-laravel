@extends('layouts.user')
@section('content')
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-lg">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a href="html/invest/invest.html" class="back-to"><em class="icon ni ni-arrow-left"></em><span>Back to plan</span></a></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Ready to get started?</h2>
                        </div>
                    </div>
                </div><!-- nk-block-head -->
                <div class="nk-block invest-block">
                    <form action="#" class="invest-form">
                        <div class="row g-gs">
                            <div class="col-lg-7">
                                <div class="invest-field form-group">
                                    <input type="hidden" value="silver" name="iv-plan" id="invest-choose-plan">
                                    <div class=" invest-cc-dropdown">
                                        <a class="invest-cc-choosen dropdown-indicator">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-offer-fill"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">{{$plan->name}}</span>
                                                    <span class="coin-text">Invest for {{$plan->days}} days and get monthly profit {{$plan->interest}}%</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div><!-- .dropdown -->
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="form-label-group">
                                        <label class="form-label">Choose Payment Method</label>
                                    </div>
                                    <input type="hidden" value="wallet" name="iv-wallet" id="invest-choose-wallet">
                                    <div class="dropdown invest-cc-dropdown">
                                        <a href="#" class="invest-cc-choosen dropdown-indicator" data-toggle="dropdown">
                                            <div class="coin-item">
                                                <div class="coin-icon">
                                                    <em class="icon ni ni-wallet-alt"></em>
                                                </div>
                                                <div class="coin-info">
                                                    <span class="coin-name">NioWallet</span>
                                                    <span class="coin-text">Current balance: 2.014095 BTC ( $18,934.84 )</span>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-auto dropdown-menu-mxh">
                                            <ul class="invest-cc-list">
                                                <li class="invest-cc-item selected">
                                                    <a href="#" class="invest-cc-opt" data-plan="silver">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-wallet-alt"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">NioWallet</span>
                                                                <span class="coin-text">Current balance: 2.014095 BTC ( $18,934.84 )</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                                <li class="invest-cc-item selected">
                                                    <a href="#" class="invest-cc-opt" data-plan="starter">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-sign-btc"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">BTC Wallet</span>
                                                                <span class="coin-text">Current balance: 2.014095 BTC</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                                <li class="invest-cc-item">
                                                    <a href="#" class="invest-cc-opt" data-plan="dimond">
                                                        <div class="coin-item">
                                                            <div class="coin-icon">
                                                                <em class="icon ni ni-sign-usd"></em>
                                                            </div>
                                                            <div class="coin-info">
                                                                <span class="coin-name">USD Wallet</span>
                                                                <span class="coin-text">Current balance: $18,934.84</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li><!-- .invest-cc-item -->
                                            </ul>
                                        </div>
                                    </div><!-- .dropdown -->
                                </div><!-- .invest-field -->
                                <div class="invest-field form-group">
                                    <div class="custom-control custom-control-xs custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox">
                                        <label class="custom-control-label" for="checkbox">I agree the <a href="#">terms and &amp; conditions.</a></label>
                                    </div>
                                </div><!-- .invest-field -->
                            </div><!-- .col -->
                            <div class="col-xl-4 col-lg-5 offset-xl-1">
                                <div class="card card-bordered ml-lg-4 ml-xl-0">
                                    <div class="nk-iv-wg4">
                                        <div class="nk-iv-wg4-sub">
                                            <h6 class="nk-iv-wg4-title title">Your Investment Details</h6>
                                            <ul class="nk-iv-wg4-overview g-2">
                                                <li>
                                                    <div class="sub-text">Name of scheme</div>
                                                    <div class="lead-text">{{$plan->name}}</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term of the scheme</div>
                                                    <div class="lead-text">{{$plan->days}} days</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Monthly profit</div>
                                                    <div class="lead-text">$ 11.99</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Monthly profit %</div>
                                                    <div class="lead-text">{{$plan->interest}} %</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Total net profit</div>
                                                    <div class="lead-text">$ 249.99</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Total Return</div>
                                                    <div class="lead-text">$ 499.99</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term start at</div>
                                                    <div class="lead-text">Today (12-04-2019)</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Term end at</div>
                                                    <div class="lead-text">12 - 25 - 2019</div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="sub-text">Payment Method</div>
                                                    <div class="lead-text">NioWallet</div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="sub-text">Amount to invest</div>
                                                    <div class="lead-text">$ 250.00</div>
                                                </li>
                                                <li>
                                                    <div class="sub-text">Conversion Fee <span>(0.5%)</span></div>
                                                    <div class="lead-text">$ 1.25</div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub">
                                            <ul class="nk-iv-wg4-list">
                                                <li>
                                                    <div class="lead-text">Total Charge</div>
                                                    <div class="caption-text text-primary">$ 251.25</div>
                                                </li>
                                            </ul>
                                        </div><!-- .nk-iv-wg4-sub -->
                                        <div class="nk-iv-wg4-sub text-center bg-lighter">
                                            <a href="#" class="btn btn-lg btn-primary ttu" data-toggle="modal" data-target="#invest-plan">Confirm &amp; proceed</a>
                                        </div><!-- .nk-iv-wg4-sub -->
                                    </div><!-- .nk-iv-wg4 -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </form>
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection