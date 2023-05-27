@extends('layouts.app')
@section('content')
<main class="margin_main_container">
    <div class="user_summary">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <figure>
                            <img src="img/avatar4.jpg" alt="">
                        </figure>
                        <h1>Mark Steinberg</h1>
                        <span>United States</span>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <strong>3</strong>
                                <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Reviews written by you"><i class="icon_star"></i> Reviews</a>
                            </li>
                            <li>
                                <strong>12</strong>
                                <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who have read your reviews"><i class="icon-user-1"></i> Reads</a>
                            </li>
                            <li>
                                <strong>36</strong>
                                <a href="#0" class="tooltips" data-toggle="tooltip" data-placement="bottom" title="Number of people who found your review useful"><i class="icon_like_alt"></i> Useful</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /container -->
        </div>
    </div>
    <!-- /user_summary -->
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-8">
                <div class="review_card">
                    <div class="row">
                        <div class="col-md-2 user_info">
                            <figure><img src="img/avatar4.jpg" alt=""></figure>
                            <h5>Review: "Good Electronics"</h5>
                        </div>
                        <div class="col-md-10 review_content">
                            <div class="clearfix add_bottom_15">
                                <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>5.00/5.00</em></span>
                                <em>Published: 54 minutes ago</em>
                            </div>
                            <h4>"Avesome Experience"</h4>
                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                            <ul>
                                <li><a href="#0" class="btn_delete"><i class="icon-trash"></i>Delete</a></li>
                                <li><a href="#0"><i class="icon-edit-3"></i> Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /review_card -->

                <div class="review_card">
                    <div class="row">
                        <div class="col-md-2 user_info">
                            <figure><img src="img/avatar4.jpg" alt=""></figure>
                            <h5>Review: "Fnac"</h5>
                        </div>
                        <div class="col-md-10 review_content">
                            <div class="clearfix add_bottom_15">
                                <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.00/5.00</em></span>
                                <em>Published: 26.08.2018</em>
                            </div>
                            <h4>"Excellent Product"</h4>
                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                            <ul>
                                <li><a href="#0" class="btn_delete"><i class="icon-trash"></i>Delete</a></li>
                                <li><a href="#0"><i class="icon-edit-3"></i> Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /review_card -->

                <div class="review_card">
                    <div class="row">
                        <div class="col-md-2 user_info">
                            <figure><img src="img/avatar4.jpg" alt=""></figure>
                            <h5>Review: "Da Alfredo"</h5>
                        </div>
                        <div class="col-md-10 review_content">
                            <div class="clearfix add_bottom_15">
                                <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>3.00/5.00</em></span>
                                <em>Published: 12.08.2018</em>
                            </div>
                            <h4>"Could be Better"</h4>
                            <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
                            <ul>
                                <li><a href="#0" class="btn_delete"><i class="icon-trash"></i>Delete</a></li>
                                <li><a href="#0"><i class="icon-edit-3"></i> Edit</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /review_card -->

            </div>
            <!-- /col -->
            <div class="col-lg-4">
                <div class="box_general general_info">
                    <h3>Delete a review<i class="pe-7s-help1"></i></h3>
                    <p><strong>Mucius doctus constituto pri at.</strong> At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro quo corrumpit euripidis...<br><strong><a href="faq.html">Rear more</a></strong></p>
                    <hr>
                    <h3>Post a review<i class="pe-7s-help1"></i></h3>
                    <p>Dolor detraxit duo in, ei sea dicit reformidans. Mel te accumsan patrioque referrentur. Has causae perfecto ut, ex choro assueverit eum...<br><strong><a href="faq.html">Rear more</a></strong></p>
                    <hr>
                    <h3>Approve a review<i class="pe-7s-help1"></i></h3>
                    <p>Sed ne prompta insolens mediocrem, omnium fierent sed an, quod vivendo mel in. Argumentum honestatis ad mel, cu vis quot utroque...<br><strong><a href="faq.html">Rear more</a></strong></p>
                    <hr>
                    <div class="text-center"><a href="faq.html" class="btn_1 small">View al Faq</a></div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</main>
<!--/main-->
@endsection