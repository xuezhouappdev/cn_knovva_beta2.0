<?php
$pageTitle="Home | Knovva Academy";
include 'header.php';
require_once('program.php');


?>

<!-- TOP Slide -->
<section class="slider">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


            <!--Slider -->
            <div class="carousel-inner index_landing_slider" role="listbox">

                <!--First Slider -->
                    <div class="carousel-item active slider-g20">
                            <div class="container">

                        <div class="text-wrapper animated fadeInUp">
                            <div class="row justify-content-end ">

                                <div class="col-sm-12 ">

<!--                                    <h1 >-->
<!--                                        Model G20 program.-->
<!--                                    </h1>-->
<!--                                    <a class="btn btn-cta">i'm interested</a>-->
                                </div>
                            </div>
                        </div>

                    </div>

                   </div>

            </div>

            <!--scroll for more-->

            <div class="scrollformore" >
                <div class="read_more_wrapper" style="position: absolute">
                    <h5 style="opacity: 0"><a href="#">了解更多</a></h5>
                </div>
            </div>

        </div>


    </div>
</section>


<!-- about slider--WHO WE ARE-->
<section class="about" id="whoweare">
    <div class="container">
         <!--about slider-->
        <div id="carouselExampleControls3" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-around">

                            <div class="col-lg-6">
                                <h4 >公司简介</h4>
                                <p class="animated ">多维教育，极目前瞻，无国界。<br><br>Knovva Academy位于美国波士顿，是专注开发创新型教学产品的前沿教育科技公司。 作为美国顶尖高中的系统化内容提供方， Knovva Academy为全美高中生提供新型校外课程、进行多元化教学补充。&nbsp;&nbsp;
                                </p>

                            </div>

                            <div class="col-lg-5 " >
                                <a data-fancybox href="img/video-mg20.mp4" >
                                    <div  class="videodiv">
                                        <img onmouseover="this.src='img/600p.gif'"
                                             onmouseout="this.src='img/gif-static.gif'" class="playgif img img-responsive"  data-swap="img/600p.gif" src="img/gif-static.gif" style="width: 100%;height: 100%;cursor: pointer">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

<!--                <div class="carousel-item">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-start">-->
<!--                            <div class="col-md-6">-->
<!--                                <h4  >what we do</h4>-->
<!--                                <p class="animated flipInX">Catering to students from around the world, Knovva Academy utilizes a mix of online and in-person courses (blend learning) for teens in order to challenge their expectations about education; we strive to provoke our students to ask, think, and learn content largely untouched in their public school system. We draw on experiential and project-based learning practices to engage students in politics, engineering, computer science, literature, and more. All of these subjects can help students uncover their own passions, and their own directions. </p>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="carousel-item">-->
<!--                    <div class="container">-->
<!--                        <div class="row justify-content-start">-->
<!--                            <div class="col-md-6">-->
<!--                                <h4  >What We Value</h4>-->
<!--                                <p class="animated flipInX">We maintain deep-seated relationships with our students and parents, both during and throughout our programs. We utilize in-person informational sessions, phone calls, digital media, and webinars to build a peer community of students and parents. Our dynamic team of native Mandarin, Spanish, and English speakers allows easy communication, and clarity of cultural expectations. Knovva Academy continues to receive high praise from parents who have felt the deep involvement of their children’s participation in our advanced learning programs.-->
<!--                                </p>-->
<!---->
<!--                            </div>-->
<!---->
<!---->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!---->


            </div>

            <!--CONTROLLER-->
<!--            <div class="controller">-->
<!--                <a class="animated fadeInLeft infinite" href="#carouselExampleControls3" role="button" data-slide="prev">-->
<!--                    <i class="fa fa-caret-left " aria-hidden="true"></i>-->
<!--                    <span class="sr-only">Previous</span>-->
<!--                </a>    &nbsp; &nbsp;-->
<!---->
<!--                <a class="animated fadeInRight infinite" href="#carouselExampleControls3" role="button" data-slide="next">-->
<!--                    <i class="fa fa-caret-right " aria-hidden="true"></i>-->
<!--                    <span class="sr-only">Next</span>-->
<!--                </a>-->
<!--            </div>-->
        </div>
    </div>
</section>



<!--Feature programs-->
<section class="feature-programs  jumbotron ">
    <div class="container">
        <h4>学术项目</h4>
        <div class="row justify-content-center">
            <div class="col-lg-4">

                <div class="card wow slideInUp">
                    <a href="http://www.modelg20cn.org" target="_blank">
                        <img src= '<?php echo $program_g20->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_g20->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_g20->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card wow slideInUp">
                    <a href="cross.php">
                        <img src='<?php echo $program_si->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_si->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_si->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 ">
                <div class="card wow slideInUp">
                    <a href="readicorn.php">
                    <img src='<?php echo $program_redicorn->get_program_imgURL();?>' class="card-img img">
                    </a>
                    <div class="text-wrapper">
                        <h5><?php echo $program_redicorn->get_program_title(); ?></h5>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_date(); ?>&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_location(); ?>&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo $program_redicorn->get_program_duration(); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
<!--            <a class="btn" href="programs.php">Explore the Programs</a>-->
        </div>
    </div>
</section>


<!-- our features -->
<section class="features">

    <div class="container">
        <h4>我们的优势</h4>
        <div class="row justify-content-center">
            <div class="col-md-3 animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive" src="img/earth.svg" style="position:relative;">
                    </div>
                </div>
                <hr/>
                <h3>跨文化领域深度协作</h3>

<!--                <p>项目全程与世界各地优秀青年共同学习，结交好友，体验文化碰撞，搭建全球网络。-->
                </p>
            </div>

            <div class="col-md-3 animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive"  src="img/progress.svg" style="position:relative;" >
                    </div>
                </div>
                <hr/>
                <h3>持续性进阶学习</h3>

<!--                <p>从哈佛学者开发的严谨、体系化的学科中选择最感兴趣的课程，实现个性化学习并应用国际前沿理念。</p>-->
            </div>

            <div class="col-md-3 animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive"  src="img/responsive.svg" style="position:relative;" >
                    </div>
                </div>
                <hr/>
                <h3>自适应学习进度</h3>

<!--                <p>我们为学生及家长提供安全、细致、周到的服务，项目前、中、后均得到资深教师、项目工作人员的学业和成长辅导。</p>-->
            </div>

            <div class="col-md-3 animation-item">
                <div class="animation-container">
                    <div class="animation-inner-wrapper" >
                        <img class="img img-responsive"  src="img/visual.svg" style="position:relative;" >
                    </div>
                </div>
                <hr/>
                <h3>可视化成果输出</h3>

<!--                <p>我们为学生及家长提供安全、细致、周到的服务，项目前、中、后均得到资深教师、项目工作人员的学业和成长辅导。</p>-->
            </div>


        </div>
    </div>
</section>



<!---latest news-->
<div class="gallery-section ">
    <div class="container-fluid">
        <!--        <h4>Recent News</h4>-->
        <div id="lightgallery" class="row justify-content-center">


            <div class="col-md-3" href="img/gallery/gallery1.png">
                <a >
                    <img src="img/gallery/gallery1.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>


            <div class="col-md-3" href="img/gallery/gallery2.png">
                <a >
                    <img src="img/gallery/gallery2.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>

            <div class="col-md-3" href="img/gallery/gallery3.png">
                <a >
                    <img src="img/gallery/gallery3.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>

            <div class="col-md-3" href="img/gallery/gallery4.png">
                <a >
                    <img src="img/gallery/gallery4.png" class="img img-responsive" width="100%" height="auto"  >
                </a>
            </div>




        </div>



    </div>
</div>





<!-- our blog insight-->
<section class="blog jumbotron" style="">
    <div class="container">
        <h4>最新资讯</h4>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="http://sd.sina.com.cn/edu/xykd/2016-02-29/105114132.html" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>哈佛大学模拟G20峰会落幕，山东省实验中学代表表现优秀</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog1.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>类别：教育 </h6>
                                    <h6>2016-2-29 </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
            <div class="col-md-4">
                <a href="http://www.bilingochina.cn/index.php?c=content&a=show&id=291" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>UFEIC学子赴哈佛参加国际青少年模拟G20峰会载誉归来</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog2.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>类别：教育 </h6>
                                    <h6> 2017-2-15 </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>

            <div class="col-md-4">
                <a href="https://www.jiemodui.com/N/70982.html" target="_blank" >
                    <div class="card">
                        <div class="card-body">
                            <h5>Knovva Academy和芥末堆在硅谷主办GET大会</h5>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img class="img img-responsive img-rounded" src="img/blog3.png" width="100%">
                                </div>
                                <div class="col-sm-8">
                                    <h6>类别：教育 </h6>
                                    <h6> 2017-05-11  </h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>

            </div>
        </div>
<!--        <h5><a href="http://blog.knovva.com">阅读更多</a></h5>-->
    </div>

</section>




<!--our partner-->
<div class="ourpartner section-partner ">
    <div class="container">
        <h3>合作学校</h3>

        <div class="row justify-content-center">


            <div class="col-md-2">
                <a href="https://www.gse.harvard.edu/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-hse.png" >
                </a>
            </div>


            <div class="col-md-2">
                <a href="http://chinaeducationsymposium.org/" target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-ces.png" >
                </a>

            </div>

            <div class="col-md-2">
                <a href="https://cambridge.nuvustudio.com/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-nunv.png" >
                </a>
            </div>








            <div class="col-md-2">
                <a href="https://www.facebook.com/huceic/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-hueic.png" >
                </a>
            </div>

            <div class="col-md-2">
                <a href="https://www.rolalang.com/"  target="_blank">
                    <img class="img img-responsive" src="img/partner/partner-rola.png" >
                </a>
            </div>



            <div class="col-md-2">
                <a href="https://www.giantbugfoundation.com/" target="_blank" >
                    <img class="img img-responsive" src="img/partner/partner-gbe.png"  >
                </a>
            </div>




        </div>
    </div>
</div>






<!-- testimonial -->
<section class="testimonial">

    <div class="container-fluid">
<!--        <h4>Testimonial</h4>-->


        <!--Quotes slider -->
        <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>“ModelG20教会我最多的就是认清不足， 寻找动力，然后继续披荆斩棘，首先要有一个不错的梦想，然后不管你遇到的是什么困难，它来的或早或晚，都不会阻拦你成为你想要成为的那个人。”<br/></p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>朱昊 </h6>
                                    <p>安徽省安庆市第一中学</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>"我非常喜欢这个项目，因为它教会我很多，包括以前在辩论中没有学到过的怎样聪明的回答别人的问题，以及如何跟别人商谈谈判，以及怎样进行拉锯战。这些都是很有用的谈判技巧，但是以前没有知道，现在知道了觉得十分的有用。" </p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>暴卓凡 </h6>
                                    <p>辽宁省本溪市高级中学</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>

                                <div class="text-wrapper">
                                    <p>“I was really looking forward to this events, and I am going to try my hardest to come back, because right now it’s been really great. I’m glad all of our ideas are heard, no one person gets to have the solo spotlight.”</p>
                                </div>

                                <div class="author-wrapper">
                                    <h6>Nashon Almeida </h6>
                                    <p> Global Learning Charter School</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <!--CONTROLLER-->
            <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>  <!--Quotes slider ends -->


    </div>
</section>





<?php
include 'footer.php';

?>



<script>
    $('.carousel').carousel({
        interval: 3500
    });
    lightGallery(document.getElementById('lightgallery'));
</script>



