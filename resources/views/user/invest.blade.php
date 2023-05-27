@extends('layouts.user')
@section('content')
<!-- content @s -->
<div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head text-center">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><span>Choose an Option</span></div>
                        <div class="nk-block-head-content">
                            <h2 class="nk-block-title fw-normal">Investment Plan</h2>
                            <div class="nk-block-des">
                                <p>Choose your investment plan and start earning.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- nk-block -->
                <div class="nk-block">
                    <form action="html/invest/invest-form.html" class="plan-iv">

                        <div class="plan-iv-list nk-slider nk-slider-s2">
                            <ul class="plan-list slider-init" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
						{"breakpoint": 992,"settings":{"slidesToShow": 2}},
						{"breakpoint": 768,"settings":{"slidesToShow": 1}}
					]}'>
                                @foreach($invests as $invest)
                                <li class="plan-item">
                                    <input type="radio" id="plan-iv-1" name="plan-iv" class="plan-control">
                                    <div class="plan-item-card">
                                        <div class="plan-item-head">
                                            <div class="plan-item-heading">
                                                <h4 class="plan-item-title card-title title">{{$invest->name}}</h4>
                                                <p class="sub-text">{{$invest->content}}</p>
                                            </div>
                                            <div class="plan-item-summary card-text">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <span class="lead-text">{{$invest->interest}}%</span>
                                                        <span class="sub-text">Monthly Interest</span>
                                                    </div>
                                                    <div class="col-6">
                                                        <span class="lead-text">{{$invest->days}}</span>
                                                        <span class="sub-text">Term Days</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="plan-item-body">
                                            <div class="plan-item-desc card-text">
                                                <ul class="plan-item-desc-list">
                                                    <li><span class="desc-label">Deposit</span> - <span class="desc-data">${{$invest->deposit}}</span></li>
                                                    <li><span class="desc-label">Deposit Return</span> - <span class="desc-data">{{$invest->return}}</span></li>
                                                    <li><span class="desc-label">Total Return</span> - <span class="desc-data">{{$invest->total_return}}</span></li>
                                                </ul>
                                                <div class="plan-item-action">
                                                    <label class="plan-label">
                                                        <span><a href="{{route('user.investform', ['id'=> $invest->id])}}">Choose this plan</a></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li><!-- .plan-item -->

                                @endforeach

                            </ul><!-- .plan-list -->
                        </div>
                    </form>
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>
<!-- content @e -->

@endsection
