<?php
require_once('program.php');
$pageTitle="学术项目 - 全球青少年领袖模拟G20峰会 | Knovva Academy";
$og_url = "https://www.knovva.com/g20";
//$og_des = "This is for description for G20";
$this_program = $program_g20;
$og_img = "https://knovva.com/".$this_program->get_program_imgURL();

include 'header.php';





?>



<!--g20-banner-->
<div class="g20-banner">
    <div class="container">

        <div class="g20-slogan animated fadeInDown">

            <div class="row justify-content-center">
                <h2 ><?//php  echo $program_g20->get_program_title(); ?></h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-8">
<!--                    <a class="fancy" data-fancybox href="https://youtu.be/FE0rKL_HvbQ" >watch the video</a>-->
                </div>
            </div>

        </div>

    </div>

</div>


<!--course-intro-->
<div class="course">
    <div class="container">
        <h2><?php  echo $program_g20->get_program_title(); ?></h2>

         <div class="row">
           <div class="col-md-8">

               <div class="course-general-info">
                   <div class="row">

<!--                       <div class="col-sm-6 teacher-info">-->
<!--                           <div class="row">-->
<!--                               <div class="col-xs-3 teacher-image">-->
<!--                                   <img class="img figure-img" src="img/teacher-placeholder.jpg" width="50" height="50" >-->
<!--                               </div>-->
<!---->
<!--                               <div class="col-xs-9 teacher-name">-->
<!--                                   <p>teacher</p>-->
<!--                                   <p><b>name</b></p>-->
<!--                               </div>-->
<!--                           </div>-->
<!---->
<!--                       </div>-->

                       <div class="col-sm-6 categories-info">
                           <p>subject</p>
                           <p><b>political science</b></p>
                       </div>
                   </div>
               </div>



               <h5>about the course</h5>
               <p>What is a G20? The G20, also known as the Group of 20, is an international forum that unites some of the most important economies in the world to engage pressing political and economic realities. The G20 Summit is a central gathering of the world’s top economies where decision makers such as Heads of Government, finance, labor, agriculture, trade and energy Ministers discuss, agree and implement reforms on energy sustainability, climate change, labor, education and financial inclusion, decisions that can have major effect on the world’s economy.</p>



           </div>

           <div class="col-md-4">
               <div class="feature-wrapper">
                   <h4>course features</h4>
                   <ul class="list-unstyled">
                       <li><h5><i class="fa fa-calendar" aria-hidden="true"></i>start time:<span class="pull-right">TBD</span></h5></li>
                       <li><h5><i class="fa fa-clock-o" aria-hidden="true"></i>duration:<span class="pull-right">TBD</span></h5></li>
                       <li><h5><i class="fa fa-map-marker" aria-hidden="true"></i>location:<span class="pull-right">Cambridge, MA</span></h5></li>
                       <li><h5><i class="fa fa-users" aria-hidden="true"></i>student:<span class="pull-right">120+</span></h5></li>
                       <li><h5><i class="fa fa-level-up" aria-hidden="true"></i>grade:<span class="pull-right">9 - 12</span></h5></li>
                   </ul>
                   <h5>course price: TBD</h5>


                   <div class="social-share">
                       <!--FB-->
                       <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fknovva.com%2Fg20&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId" width="59" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                       <!--TWITTER-->
                       <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Hi! I think that the Model G20 program is awesome! " data-url="<?php echo $this_program->get_url(); ?>" data-via="knovva_academy" data-related="knovva_academy" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                       <!--Linkedin-->
                       <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                       <script type="IN/Share" data-url="<?php echo $this_program->get_url(); ?>"></script>

                   </div>

                   <a class="enroll-btn" href="http://modelg20.org">Click here for more details</a>



               </div>

           </div>

       </div>
    </div>
</div>



<!--benefits-->
<div class="course-benefits ">
    <div class="container">
        <h2>benefits</h2>
       <div class="row wow fadeIn">
           <div class="col-md-3">
               <i class="fa fa-paper-plane" aria-hidden="true"></i>
               <h5>preparing for future</h5>
               <ul class="">
                   <li>college readiness</li>
                   <li>global marketability</li>
                   <li>portfolio diversification</li>
               </ul>
           </div>
           <div class="col-md-3">
               <i class="fa fa-handshake-o" aria-hidden="true"></i>
               <h5>social development</h5>
               <ul class="">
                   <li>language development</li>
                   <li>develop cross-Cultural communication skills</li>
                   <li>develop international peer group</li>
               </ul>
           </div>

           <div class="col-md-3">
               <i class="fa fa-book" aria-hidden="true"></i>
               <h5>knowledge development</h5>
               <ul class="">
                   <li>learn about global sustainability and policy</li>
                   <li>specialize in your interests</li>
                   <li>pursue your passions of policy and stewardship</li>
               </ul>
           </div>

           <div class="col-md-3">
               <i class="fa fa-graduation-cap" aria-hidden="true"></i>
               <h5>academic skill development</h5>
               <ul class="">
                   <li>collaborative work to effect the environment</li>
                   <li>critical writing and reading</li>
                   <li>research & analytical skills</li>
               </ul>
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
                                    <p>“ModelG20教会我最多的就是认清不足， 寻找动力，然后继续披荆斩棘，首先要 有一个不错的梦想，然后不管你遇到的 是什么困难，它来的或早或晚，都不会 阻拦你成为你想要成为的那个人。”<br/></p>
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
                                    <p>"我非常喜欢这个项目，因为它教会我很多 包括以前在辩论中没有学到过的怎样聪明 的回答别人的问题，以及如何跟别人商谈 谈判，以及怎样进行拉锯战。这些都是很 有用的谈判技巧，但是以前没有知道，现 在知道了觉得十分的有用。" </p>
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
