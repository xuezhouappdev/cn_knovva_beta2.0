<?php
$pageTitle="关于我们 | Knovva Academy";
include 'header.php';


	class teacher {
        var $name;
        var $bio;
        var $title;
        var $imgURL;

        function __construct($name, $bio, $title, $imgURL) {
            $this->name = $name;
            $this->bio =  $bio;
            $this->title = $title;
            $this->imgURL = $imgURL;

        }

        function set_name($new_name) {
            $this->name = $new_name;
        }


        public function get_name() {
            return $this->name;
        }

        function get_bio() {
            return $this->bio;
        }

        function get_title() {
            return $this->title;
        }

        function get_imgURL() {
            return $this->imgURL.".jpg";
        }

    }

    $teacher_Ross = new Teacher("Ross Weissman","哈佛大学教育学硕士，擅长课外学习项目设计。曾就职于哈佛大学心理系、约翰霍普金斯大学。曾深入北极圈、墨西哥、奇瓦瓦沙漠等偏远地区从事青少年体验式教育工作。","Chief Learning Officer","./img/portrait/portrait-ross");
    $teacher_Pat = new Teacher("Patricia Lozada","哈佛大学肯尼迪政治学院硕士，曾任哈佛大学公共服务与公共管理研究员，联合国公共政策特别顾问，在南美洲从事多年政府官员工作。","Academic Designer","./img/portrait/portrait-pat");
    $teacher_Abby = new Teacher("Abby Hu","哈佛大学肯尼迪政治学院硕士，中国人民大学应用经济学学士。在青少年夏令营、领导力培训方面有丰富经验。","Senior Product Manager","./img/portrait/portrait-abby");
    $teacher_Orly = new Teacher("Orly Barad","哈佛大学教育学院硕士，曾就职于哈佛大学医学院、波士顿大学，为两所顶尖学校设计在线课程，擅长网络课程学习体验优化。
","Senior Online Learning Designer","./img/portrait/portrait-orly");
    $teacher_Chunxiao = new Teacher("Chunxiao Han","哈佛大学教育学院硕士，北京外国语大学英语语言文学学士。曾在北京新东方学校、北外青少英语、北京冷泉村希望社区、北京市盲人学校和非洲喀麦隆等地任英语语言教师。","Academic Specialist","./img/portrait/portrait-chunxiao");
    $teacher_Becca = new Teacher("Rebecca Shuman","哈佛大学教育学院硕士，深爱文学、艺术，长期致力于国际学 生英语素质培养。她曾帮助不同教育环境中的学生开展适应性学习，热衷于研究创新型教育模式，以促进教育、个人和社会 协同发展。","Educational Specialist","./img/portrait/portrait-becca");




?>



<div class="about-banner" style="background: url('img/about-slider.jpg')center center no-repeat;background-size: cover;height: 80vh">
    <div class="text-wrapper">

        <div class="container">
            <div class="text">
                <h1 class="animated fadeInDown">Knovva Academy —— 未来领袖的摇篮</h1>
            </div>
        </div>

    </div>
</div>



<!--who we are-->
<div class="vision section-about">
    <div class="container">
<!--        <h5>This is your world. Connect to a new generation of learning.</h5>-->

        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-ourteam.jpg">
            </div>

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">
                        <h5>团队介绍</h5>
                        <p><br>Knovva团队拥在自全球各地(北美、南美、中东、西非、东南亚 等)丰富的教学和科研经验。在此基础上，我们整合哈佛大学及麻省 理工学院等美国顶尖教育资源，与全球领先的研究机构、教育机构共同合作。运用最前沿的教育理念和教研成果，为全球学生提供卓越的定制化项目。</p>
                    </div>
                </div>
            </div>

        </div>


        <div class="row justify-content-center">

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">
                        <h5>教育理念</h5>
                        <br><p>求同存异，全局发展<br>
                            Knovva Academy力求最大限度结合科技革新与人文知识，以跨学科和多元文化为基础，挑战碎片化问题解决思维并重构智能教学生态系统。以全局发展思维，全面发展学员“软实力”，用前瞻目光探索全球化背景下的未来教育模式。</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-whatwedo.jpg">
            </div>

        </div>


        <div class="row justify-content-center">
            <div class="col-lg-5">
                <img class="img img-responsive img-thumbnail" src="img/about/about-whatwevalue.jpg"">
            </div>

            <div class="col-lg-5">
                <div class="text-wrapper">
                    <div class="text">

                        <h5>产品设计</h5>
                        <p><br>专精覃思，以小见大<br>
                            Knovva Academy的教育产品结合当下最新授课模式，严选教材， 旨在以精准高效、多维互动的课程，让学习不再受文化以及地域的限制，培养全方面人才。
                            读角兽英文原著精读课程以文学思辨为导向，同步提高学员的词汇积
                            累与文化素养，巩固语言和写作基础。在此基础下，跨界课程将带领
                            中外学员一起，以混合式学习构建学知网络，共同展望未来。</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--our team-->
<div class="ourteam jumbotron">
    <div class="container">
        <h3>学术团队</h3>
        <div class="row justify-content-center">
            <!--1-->
            <div class="col-lg-3">
                <div class="card" >
                    <a data-toggle="modal" data-target="#myModal2">
                        <img class="img img-responsive" src=<?php echo $teacher_Ross->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Ross->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Ross->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Ross->get_title(); ?></h6>
                                            <p><?php echo $teacher_Ross->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Ross->get_name(); ?></h5>
                        <p><?php echo $teacher_Ross->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--2-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalPat">
                        <img class="img img-responsive" src=<?php echo $teacher_Pat->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalPat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Pat->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Pat->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Pat->get_title(); ?></h6>
                                            <p><?php echo $teacher_Pat->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Pat->get_name(); ?></h5>
                        <p><?php echo $teacher_Pat->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--3-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalAbby">
                        <img class="img img-responsive" src=<?php echo $teacher_Abby->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalAbby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Abby->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Abby->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Abby->get_title(); ?></h6>
                                            <p><?php echo $teacher_Abby->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Abby->get_name(); ?></h5>
                        <p><?php echo $teacher_Abby->get_title(); ?></p>
                    </div>
                </div>
            </div>


        </div>

        <div class="row justify-content-center">

            <!--4-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalOrly">
                        <img class="img img-responsive" src=<?php echo $teacher_Orly->get_imgURL(); ?> >
                    </a>


                    <div class="modal fade profile-modal" id="myModalOrly" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Orly->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Orly->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Orly->get_title(); ?></h6>
                                            <p><?php echo $teacher_Orly->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Orly->get_name(); ?></h5>
                        <p><?php echo $teacher_Orly->get_title(); ?></p>
                    </div>
                </div>
            </div>
            <!--5-->


            <div class="col-lg-3">
                <div class="card" id="test">

                    <a data-toggle="modal" data-target="#myModalBecca">
                        <img class="img img-responsive" src=<?php echo $teacher_Chunxiao->get_imgURL(); ?> >
                    </a>
                    <div class="modal fade profile-modal" id="myModalBecca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Chunxiao->get_imgURL(); ?> />
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Chunxiao->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Chunxiao->get_title(); ?></h6>
                                            <p><?php echo $teacher_Chunxiao->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Chunxiao->get_name(); ?></h5>
                        <p><?php echo $teacher_Chunxiao->get_title(); ?></p>
                    </div>
                </div>
            </div>

            <!--6-->
            <div class="col-lg-3">
                <div class="card">

                    <a data-toggle="modal" data-target="#myModalChunxiao">
                        <img class="img img-responsive" src=<?php echo $teacher_Becca->get_imgURL(); ?> >
                    </a>
                    <div class="modal fade profile-modal" id="myModalChunxiao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img class="img img-responsive" width="300px" height="auto" src=<?php echo $teacher_Becca->get_imgURL(); ?>>
                                        </div>
                                        <div class="col-md-7">
                                            <h5><?php echo $teacher_Becca->get_name(); ?></h5>
                                            <h6><?php echo $teacher_Becca->get_title(); ?></h6>
                                            <p><?php echo $teacher_Becca->get_bio(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-wrapper">
                        <h5><?php echo $teacher_Becca->get_name(); ?></h5>
                        <p><?php echo $teacher_Becca->get_title(); ?></p>
                    </div>
                </div>
            </div>

<!--            <div class="col-lg-3">-->
<!--                <div class="card">-->
<!---->
<!--                    <img class="img img-responsive" src="http://via.placeholder.com/300">-->
<!---->
<!--                    <div class="text-wrapper">-->
<!--                        <h5>Teacher Name</h5>-->
<!--                        <p>Title</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="col-lg-3">-->
<!--                <div class="card">-->
<!---->
<!--                    <a data-toggle="modal" data-target="#myModal2"><img class="img img-responsive" src="http://via.placeholder.com/300"></a>-->
<!---->
<!--                    <div class="modal fade profile-modal" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--                        <div class="modal-dialog" role="document">-->
<!--                            <div class="modal-content">-->
<!--                                <div class="modal-header">-->
<!--                                    <h5 class="modal-title" id="exampleModalLabel"></h5>-->
<!--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                                        <span aria-hidden="true">&times;</span>-->
<!--                                    </button>-->
<!--                                </div>-->
<!--                                <div class="modal-body">-->
<!--                                    <div class="row">-->
<!--                                        <div class="col-md-5">-->
<!--                                            <img class="img img-responsive" src="http://via.placeholder.com/300x350">-->
<!--                                        </div>-->
<!--                                        <div class="col-md-7">-->
<!--                                            <h5>Teacher name</h5>-->
<!--                                            <h6>Title</h6>-->
<!--                                            <p>Profile here</p>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <div class="text-wrapper">-->
<!--                        <h5>Teacher Name</h5>-->
<!--                        <p>Title</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>

    </div>

</div>


<!--our partner-->
<div class="ourpartner section-partner">
    <div class="container">
        <h3>合作学校</h3>
        <hr/>
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
                                    <p>“ModelG20教会我最多的就是认清不足，寻找动力，然后继续披荆斩棘，首先要有一个不错的梦想，然后不管你遇到的是什么困难，它来的或早或晚，都不会阻拦你成为你想要成为的那个人。”<br/></p>
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


    $(".card").hover(function(){
        $(this).find('h5').addClass('changeColor');
        //alert('hello');
    },function(){
        $(this).find("h5").removeClass('changeColor');
    });
</script>