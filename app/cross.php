<?php

require_once('program.php');
$pageTitle="Programs - social innovation and leadership | Knovva Academy";
$og_url = "https://www.knovva.com/social-innovation-leadership";
//$og_des = "This is for description for Social Innovation";
$this_program = $program_si;
$og_img = "https://knovva.com/".$this_program->get_program_imgURL();

include 'header.php';

?>


<!--SI-banner-->
<div class="si-banner" >
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
                           <p><b>商业，社会科学</b></p>
                       </div>
                   </div>
               </div>

               <h5>项目简介</h5>
               <p>“跨界”(CROSS+)项目以混合式学习为依托，将在国际视野、 本土行动、少年领导力、跨文化沟通的主题下，融合模块化学习 的线上形式与定制化的线下活动，为全球高中学生提供完整的活动方案。<br><br>
                   学员可通过此项目积累出众的实践经验，以国际化的视野和多元 思维夯实基础，获得有效的课外补充。“跨界”项目提供跨学科、 跨国界、跨文化、跨媒介的整体解决方案，为培养未来领袖奠定 基石。
               </p>

               <h5>应用形式</h5>
               <p><b>学校课程的创新</b> - “跨界”项目以灵活的线上课程和线下活动为亮点，在可制定化的 前提下，以高度兼容性的课程技术平台为依托，并配备完善的教 师使用手册与培训教程，是学校创新实验性课程的优选。
                   部分波士顿地区的顶尖中学全套或部分地引进该项目，以线上 的“翻转课堂”进行教学，或以线下实践来充实学生课余活动。</p>
               <p><b>课外实践的拓展</b> - 除丰富的选择内容外，“跨界”项目更是为了契合学生的个性发展 开设辅导课程，学生可自主地接受课外实践，获得背景提升。</p>

               <h5>研发团队</h5>
               <p>“跨界”(CROSS+)研发团队来自北美、中东、亚洲，团队构成 同步诠释了“跨界”理念。团队成员毕业于哈佛大学教育学院、政 府学院、附属戏剧学院等，对全球各地的教育现状与学生所需有 深刻的见解，致力于将最前沿、最行之有效的教育方法融入项目 设计。此外，“跨界”的合作开发方为美国最老资历的高中全美高 中前20强的波士顿拉丁学校，为项目质量提供了有力保障。</p>
           </div>

           <div class="col-md-4">
               <div class="feature-wrapper">
                   <h4>课程信息</h4>
                   <ul class="list-unstyled">
                       <li><h5><i class="fa fa-calendar" aria-hidden="true"></i>开始时间:<span class="pull-right"><?php echo $this_program->get_program_date(); ?></span></h5></li>
                       <li><h5><i class="fa fa-clock-o" aria-hidden="true"></i>课程时长:<span class="pull-right"><?php echo $this_program->get_program_duration(); ?></span></h5></li>
                       <li><h5><i class="fa fa-map-marker" aria-hidden="true"></i>地点:<span class="pull-right">线上课程</span></h5></li>
<!--                       <li><h5><i class="fa fa-users" aria-hidden="true"></i>学生人数:<span class="pull-right">20</span></h5></li>-->
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
                <th width="20%" class="text-center">地点</th>
                <th width="80%">内容</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row" class="text-center">线上</th>
                <td>

                   <p><b>模块化课程</b><br>线上课程包含国际理解、本土行动、少 年领导力、跨文化沟通4个模块，各模 块间相互独立、互为补充。各版块为期8 周，分别包含六次线上课程、六次跨国 小组作业及一次跨国项目。学生根据自 身需求选择课程模块进行自主学习，并 在活动导师的辅助下加入跨国小组、完 成任务。</p>
                </td>
            </tr>
            <tr>
                <th scope="row" class="text-center">线下</th>
                <td>

                   <p><b>定制化活动</b><br>线下活动在寒暑假举行，综合学生需 求、线上课程和跨国项目完成情况而定 制，活动周期持续1~4周不等。可选活动 包括:波士顿极速创新挑战赛(Innova- thon)、南美国家发展营、剑桥社创企 业实习等。</p>
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
               <p><b>跨学科: </b>超越学科界限，每一堂线上课程将渗透不同学科的知识 技能及思维方式。学科课程内容涵盖自然科学、人文科学，多维构建学生的全局观和大视野。线下活动要求学生充分调动跨学科知识，为学生成为综合性人才夯实基础。</p>
           </div>
       </div>

        <div class="row wow justify-content-center fadeIn">

            <div class="col-md-1">
                <i class="fa fa-street-view" aria-hidden="true"></i>
            </div>

            <div class="col-md-9">
                <p><b>跨国界: </b>学生来自北美、南美、亚洲、欧洲等地，课程真正打破 跨国交流的物理限制，将跨国协作实现于课堂，让学习无国界。</p>
            </div>
        </div>


        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-binoculars" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p><b>跨文化: </b>以兼容共知为核心设计理念，充分考量学生间的文化差异和语言水平，以阶梯式的跨国任务为贯穿课程。活动由经验丰富的导师配合，辅助学生进行跨文化协作，成为具备全球领导能力的人才。</p>
            </div>
        </div>
        <div class="row wow justify-content-center fadeIn">
            <div class="col-md-1">
                <i class="fa fa-globe" aria-hidden="true"></i>
            </div>
            <div class="col-md-9">
                <p><b>跨媒介: </b>结合多种国际领先教育科技进行课程设计、制作、传递，学生将体验多元化的互动教学活动，并利用多样创新教辅工具完成任务。</p>
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
