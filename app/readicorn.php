<?php

require_once('program.php');
$pageTitle="Programs - social innovation and leadership | Knovva Academy";
$og_url = "https://www.knovva.com/social-innovation-leadership";
//$og_des = "This is for description for Social Innovation";
$this_program = $program_redicorn;
$og_img = "https://knovva.com/".$this_program->get_program_imgURL();

include 'header.php';

?>


<!--SI-banner-->
<div class="rd-banner" >
    <div class="container">

        <div class="g20-slogan animated fadeInDown" >

            <div class="row justify-content-center">
<!--                <h2 >social innovation and leadership program</h2>-->
            </div>

<!--            <div class="row justify-content-center">-->
<!--                <div class="col-sm-8">-->
<!--                    <a class="fancy" data-fancybox href="img/g20-landing.mp4" >watch the video</a>-->
<!--                </div>-->
<!--            </div>-->

        </div>

    </div>

</div>


<!--course-intro-->
<div class="course">
    <div class="container">
        <h2><?php echo $this_program->get_program_title(); ?></h2>

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
                           <p>主题</p>
                           <p><b>文学</b></p>
                       </div>
                   </div>
               </div>

               <h5>项目简介</h5>
               <p>由Knovva Acadmey哈佛团队带领的英语原著阅读课程，中外双师同步线上授课，每期精选经典英文原著详细解读。
                   配合轻松课堂氛围，通过24周的文本阅读循序渐进，学生将逐步拓展词汇量、 储备历史文化知识、提升阅读理解和文学思辨素养。寓学于乐，从而提升SAT等应试能力、体验英美大学课程及阅读模式。
               </p>

               <h5>教师团队</h5>
               <p>中教Chunxiao毕业于哈佛大学教育学院，曾在北京新东方学校、北外青少英语和非洲喀麦隆等地积累了丰富的英汉双语教学经验，熟知中国学生英语学习的痛点难关。她将带领大家进行精读理解，并结合SAT核心词汇助学员灵学活用，巩固课堂所知。</p>
               <p>外教Becca同样毕业于哈佛大学教育学院，她来自美国东北部，具备7年互动教学经验。由她带领美国资深教师团队深度解读英美文化、引导思辨讨论。使得汉语到英语的鸿沟不再难以跨越，东方至西方的文化过渡更为直观与易于理解。</p>
           </div>

           <div class="col-md-4">
               <div class="feature-wrapper">
                   <h4>课程信息</h4>
                   <ul class="list-unstyled">
                       <li><h5><i class="fa fa-calendar" aria-hidden="true"></i>开始时间:<span class="pull-right"><?php echo $this_program->get_program_date(); ?></span></h5></li>
                       <li><h5><i class="fa fa-clock-o" aria-hidden="true"></i>课程时长:<span class="pull-right"><?php echo $this_program->get_program_duration(); ?></span></h5></li>
                       <li><h5><i class="fa fa-map-marker" aria-hidden="true"></i>地点:<span class="pull-right">线上课程</span></h5></li>
<!--                       <li><h5><i class="fa fa-users" aria-hidden="true"></i>学生人数:<span class="pull-right">100</span></h5></li>-->
                       <li><h5><i class="fa fa-level-up" aria-hidden="true"></i>适合年级:<span class="pull-right">高中</span></h5></li>
                   </ul>
<!--                   <h5>course price: $2998</h5>-->
                   <div class="social-share">
                       <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fknovva.com/social-innovation-leadership&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId" width="59" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                       <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Hi! I think that the Social Innovation program is awesome! " data-url="<?php echo $this_program->get_url(); ?>" data-via="knovva_academy" data-related="knovva_academy" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                       <!--Linkedin-->
                       <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                       <script type="IN/Share" data-url="<?php echo $this_program->get_url(); ?>"></script>

                   </div>

                   <a class="enroll-btn" data-toggle="modal" data-target="#myModal">了解更多</a>
               </div>
           </div>
       </div>
    </div>
</div>

<!--course structure-->
<div class="course-structure">
    <div class="container">
        <h2>课程结构</h2>

        <table class="table table-striped table-sm">
            <thead>
            <tr >
                <th width="20%" class="text-center">时间点</th>
                <th width="80%">内容</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">课前</th>
                <td>
                    <ul class="list-inline">
                        <li>每周阅读</li>
                        <li>课前学习资料包 - 包括词汇表、导读问题、课堂笔记表</li>
                        <li>微信群答疑 - 群内中教外教同时
                            为学生解答问题</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">课上</th>
                <td>
                    <ul class="list-inline">
                        <li>阅读回顾及背景知识</li>
                        <li>文本细读</li>
                        <li>课间休息</li>
                        <li>文本细读</li>
                        <li>主旨讨论</li>
                        <li>在线答疑互动Q&A</li>
                    </ul>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">课后</th>
                <td>
                    <ul class="list-inline">
                        <li>模拟SAT词汇练习</li>
                        <li>微信群答疑 - 群内中教外教同时文本细读，为学生解答问题</li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>


<!--benefits-->
<div class="course-benefits course-benefits-2col">
    <div class="container">
        <h2>课程特色</h2>

        <div class="row wow justify-content-center fadeIn">
           <div class="col-md-1">
               <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
           </div>

           <div class="col-md-9">
               <p><b>精选优学: </b>摘选经典原著细读解析， 反转人类学、社会学名著的严肃课堂氛围，趣学深思，提升英语文学素养。</p>
           </div>
       </div>

        <div class="row wow justify-content-center fadeIn">

            <div class="col-md-1">
                <i class="fa fa-street-view" aria-hidden="true"></i>
            </div>

            <div class="col-md-9">
                <p><b>双语教学: </b>考点归纳打包讲解，和哈佛学姐一起解构经典。</p>
            </div>
        </div>


        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-binoculars" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p><b>沉浸互动: </b>中美双师互动教学，多元文化背景探讨，给学员纯粹的英文阅读体验。</p>
            </div>
        </div>
        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p><b>跟踪学习: </b>课前学习材料包 + 直播课 + 课后测试+微信群答疑， 随时随地，让学习不受限</p>
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
