<?php
include 'initial.php';
include $tpl .'header.php';
?>
<div class="container">
    <section class="bg-welcome">
        <div class="center">
            <h1><small> مرحبا بك</small><br>أحمد الطارون</h1>
        </div>
    </section>
</div>
<section class="section8">
    <div class="container text-right">
        <nav class="nav" id="myTab" role="tablist">
            <a class="nav-link" id="avcourse-tab" data-toggle="tab" href="#avcourse" role="tab" aria-controls="avcourse" aria-selected="false">الكورسات المتاحه</a>
            <a class="nav-link active" id="mycourses-tab" data-toggle="tab" href="#mycourses" role="tab" aria-controls="mycourses" aria-selected="true">كورساتى</a>
        </nav>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="mycourses" role="tabpanel" aria-labelledby="mycourses-tab">
                <div class="row">
                    <div class="col-md-10">
                        <h3>الفيزياء</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"><a href="#">استكمال</a></button>
                    </div>
                    <div class="col-md-2">
                        <img src="layouts/img/physics.jpg" alt="physics">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <h3>الفيزياء</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 70%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"><a href="#">استكمال</a></button>
                    </div>
                    <div class="col-md-2">
                        <img src="layouts/img/physics.jpg" alt="physics">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10">
                        <h3>الفيزياء</h3>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 80%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <button type="button"><a href="#">استكمال</a></button>
                    </div>
                    <div class="col-md-2">
                        <img src="layouts/img/physics.jpg" alt="physics">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="avcourse" role="tabpanel" aria-labelledby="avcourse-tab">
                <h2 class="text-center"><span class="colord">جميع</span> الكورسات</h2>
                <div class="row mt-4">
                    <div class="col-md-6  col-lg-4">
                        <div class="card">
                            <img src="layouts/img/elect.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">2 الالكترونيات</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/math2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">الرياضيات 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/waves.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">مجالات</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/math.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">الرياضيات 1</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/English-101.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">لغة اجنبيه</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/Electronics_Cover_2000x1667.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">الالكترونيات 1</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/physics.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">الفيزياء 2</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/English-101.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href=""> 2لغه اجنبية</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="layouts/img/pcb.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <a href="">PCB</a>
                            </div>
                        </div>
                    </div>
                </div>
                <h2 class="text-center">كورسات <span class="colord">منوعه</span></h2>
                <!--Carousel Wrapper-->
                
                <!--/.Carousel Wrapper-->
            </div>
        </div>
    </div>
</section>
<?php
include $tpl .'footer.php';
?>
<div id="scroll-top">
    <i class="fa fa-chevron-up"></i> 
</div> 
<?php
include $tpl .'partial/quotes.php';
include $tpl .'scripts.php';
?>
