<?php
$pageTitle="职位 - 课程设计实习生 | Knovva Academy";
$position = "课程设计实习生";
$embed_url ="position_kechengsheji";
$og_img = "https://www.knovva.com/img/knovva-social-logo.jpg";
include 'header.php';

?>



    <!--position banner-->
    <div class="position-banner" style="background: url('./img/position-curriculumdesign.jpg') center
     center no-repeat;background-size: cover;">
        <div class="container">
            <div class="row justify-content-center">
                <h1><?php echo $position;?></h1>
            </div>

            <div class="row justify-content-center">
                <p>中国北京</p>
            </div>


        </div>
    </div>



    <!-- breadcrumb-->
    <div class="breadcrumb-wrapper">
        <div class="container">
            <nav class="breadcrumb">
                <a class="breadcrumb-item" href="index.php">首页</a>
                <a class="breadcrumb-item" href="careers.php">招聘信息</a>
                <a class="breadcrumb-item" href="#"><?php echo $position;?></a>
            </nav>
        </div>
    </div>


    <div class="job-description">
        <div class="container">

                <h3><?php echo $position;?></h3>
                <br>


                <h5>企业介绍</h5>
                <p>Knovva Academy总部位于美国波士顿，是专注开发创新型教学产品的前沿教育科技公司。作为美国顶尖高中的系统化内容提供方，Knovva Academy为全球高中生提供新型校外课程、进行多元化教学补充。
                </p>

                <h5>产品介绍</h5>
                <p>读角兽英语文学素养提高课程是由Knovva Academy哈佛团队带领的英语原著阅读课程，中外双师同步线上授课，每期精选经典英文原著详细解读。配合轻松课堂氛围，通过24周的文本阅读循序渐进，学生将逐步拓展词汇量、储备历史文化知识、提升阅读理解和文学思辨素养。寓学于乐，从而提升SAT等应试能力、体验英美大学课程及阅读模式。
                </p>

                <h5>岗位职责
                </h5>
                <ul>
                    <li>协助课程研发主管完成在线课程产品的策划工作。</li>
                    <li>与课程设计团队共同探讨搭建课程设计框架体系，编写教案，并完成教研任务。</li>
                    <li>与课程领域专家沟通，不断完善课程设计。</li>
                    <li>参与试课、课程执行、学习监控与教学反馈。</li>
                    <li>不断优化课程内容，提升课程质量。</li>
                    <li>思路清晰，独立思考，具有创新思维和意识，抗压能力强，具有团队合作精神。</li>
                </ul>


                <h5>工作福利</h5>
                <ul>
                    <li>实践哈佛教育学院最前沿教育理念及方法。</li>
                    <li>有竞争力的薪酬福利。</li>
                    <li>有浓厚创业氛围的跨国工作环境。</li>
                </ul>



<!--            <p>The <b>Curriculum Designer</b> is a full-time position based in Knovva Academy’s office in the Seaport neighborhood of Boston. Salary is competitive and commensurate with experience. <b>Must be authorized to work in the United States.</b></p>-->


                <h5>简历投递</h5>
            <p>请将简历投递至<a href="mailto:chunxiao.han@knovva.com ?Subject=简历投递" target="_top">chunxiao.han@knovva.com</a>。</p>
            <div class="social-share">
                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fknovva.com/<?php echo $embed_url;?>&layout=button&size=small&mobile_iframe=true&width=59&height=20&appId" width="59" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Check out the open position - ​<?php echo $position; ?> -  at Knovva Academy" data-url="https://knovva.com/<?php echo $embed_url;?>" data-via="knovva_academy" data-related="knovva_academy" data-show-count="true">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                <!--Linkedin-->
                <script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                <script type="IN/Share" data-url="<?php echo 'https://knovva.com/position_academic_2'; ?>"></script>

            </div>
            </div>


        </div>
    </div>






<?php
include 'footer.php';
?>
