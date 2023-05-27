@extends('layouts.user')
@section('content')
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head">
                    <div class="nk-block-between-md g-3">
                        <div class="nk-block-head-content">
                            <div class="nk-block-head-sub"><span>Welcome!</span></div>
                            <div class="align-center flex-wrap pb-2 gx-4 gy-3">
                                <div>
                                    <h2 class="nk-block-title fw-normal">{{Auth::user()->username}}</h2>
                                </div>
                                <div><a href="html/invest/schemes.html" class="btn btn-white btn-light">My Plans <em class="icon ni ni-arrow-long-right ml-2"></em></a></div>
                            </div>
                            <div class="nk-block-des">
                                <p>At a glance summary of your investment account. Have fun!</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                        <div class="nk-block-head-content d-none d-md-block">
                            <div class="nk-slider nk-slider-s1">
                                <div class="slider-init" data-slick='{"dots": true, "arrows": false, "fade": true}'>
                                    <div class="slider-item">
                                        <div class="nk-iv-wg1">
                                            <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                            <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6>
                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                            <div class="nk-iv-wg1-progress">
                                                <div class="progress-bar bg-primary" data-progress="80"></div>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-iv-wg1">
                                            <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                            <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6>
                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                            <div class="nk-iv-wg1-progress">
                                                <div class="progress-bar bg-primary" data-progress="80"></div>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                    <div class="slider-item">
                                        <div class="nk-iv-wg1">
                                            <div class="nk-iv-wg1-sub sub-text">My Active Plans</div>
                                            <h6 class="nk-iv-wg1-info title">Silver - 4.76% for 21 Days</h6>
                                            <a href="#" class="nk-iv-wg1-link link link-light"><em class="icon ni ni-trend-up"></em> <span>Check Details</span></a>
                                            <div class="nk-iv-wg1-progress">
                                                <div class="progress-bar bg-primary" data-progress="80"></div>
                                            </div>
                                        </div>
                                    </div><!-- .slider-item -->
                                </div>
                                <div class="slider-dots"></div>
                            </div><!-- .nk-slider -->
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="nk-news card card-bordered">
                        <div class="card-inner">
                            <div class="nk-news-list">
                                <a class="nk-news-item" href="#">
                                    <div class="nk-news-icon">
                                        <em class="icon ni ni-card-view"></em>
                                    </div>
                                    <div class="nk-news-text">
                                        <p>Do you know the latest update of 2019? <span> A overview of our is now available on YouTube</span></p>
                                        <em class="icon ni ni-external"></em>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .nk-block -->

                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="nk-refwg">
                            <div class="nk-refwg-invite card-inner">
                                <div class="nk-refwg-head g-3">
                                    <div class="nk-refwg-title">
                                        <h5 class="title">Refer Us & Earn</h5>
                                        <div class="title-sub">Use the bellow link to invite your friends.</div>
                                    </div>
                                    <div class="nk-refwg-action">
                                        <a href="#" class="btn btn-primary">Invite</a>
                                    </div>
                                </div>
                                <div class="nk-refwg-url">
                                    <div class="form-control-wrap">
                                        <div class="form-clip clipboard-init" data-clipboard-target="#refUrl" data-success="Copied" data-text="Copy Link"><em class="clipboard-icon icon ni ni-copy"></em> <span class="clipboard-text">Copy Link</span></div>
                                        <div class="form-icon">
                                            <em class="icon ni ni-link-alt"></em>
                                        </div>
                                        <input type="text" class="form-control copy-text" id="refUrl" value="https://dashlite.net/?ref=4945KD48">
                                    </div>
                                </div>
                            </div>
                            <div class="nk-refwg-stats card-inner bg-lighter">
                                <div class="nk-refwg-group g-3">
                                    <div class="nk-refwg-name">
                                        <h6 class="title">My Referral <em class="icon ni ni-info" data-toggle="tooltip" data-placement="right" title="Referral Informations"></em></h6>
                                    </div>
                                    <div class="nk-refwg-info g-3">
                                        <div class="nk-refwg-sub">
                                            <div class="title">394</div>
                                            <div class="sub-text">Total Joined</div>
                                        </div>
                                        <div class="nk-refwg-sub">
                                            <div class="title">548.49</div>
                                            <div class="sub-text">Referral Earn</div>
                                        </div>
                                    </div>
                                    <div class="nk-refwg-more dropdown mt-n1 mr-n1">
                                        <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                            <ul class="link-list-plain sm">
                                                <li><a href="#">7 days</a></li>
                                                <li><a href="#">15 Days</a></li>
                                                <li><a href="#">30 Days</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-refwg-ck">
                                    <canvas class="chart-refer-stats" id="refBarChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection