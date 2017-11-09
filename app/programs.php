<?php
$pageTitle="Programs | Knovva Academy";
include 'header.php';
require_once('program.php');
?>



<!--banner-->
<div class="program-banner" style="">

    <div class="program-slogan ">
        <div class="container">
            <h1 class="animated fadeInDown">学术项目</h1>



        </div>
    </div>
</div>


<!-- programs -->
<div class="programs">
    <div class="container">
<!--        <p>Knovva Academy is inspired by the opportunity to prepare the next generation of young people to become engaged learners who pursue their own passions. Knovva Academy believes that by crossing national, cultural, and disciplinary boundaries, young people will increase their capacities to engage with real-world challenges, and ready themselves to be proactive thinkers and doers</p>-->

        <div class="row ">

           <div class="col-md-6 wow slideInUp">
                <!--card-->
                <div class="shadow" >

                    <!--IMG and deco-->
                    <div class="p-image-wrapper" style="background:url('<?php echo $program_g20->get_program_imgURL(); ?>') center center no-repeat;background-size:contain;">
<!--                        <div class="p-decoration-text" >-->
<!--                            <h4>--><?php //echo $program_g20->get_program_title(); ?><!--</h4>-->
<!--                            <h6><i class="fa fa-calendar" aria-hidden="true"></i>--><?php //echo $program_g20->get_program_date(); ?><!--&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>--><?php //echo $program_g20->get_program_location(); ?><!--&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>--><?php //echo $program_g20->get_program_duration(); ?><!--</h6>-->
<!--                        </div>-->
                    </div>


                    <!--PARA DES-->
                    <div class="p-text-wrapper">
                       <h6><?php echo $program_g20->get_program_title(); ?></h6>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_g20->get_program_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp<?php echo $program_g20->get_program_location(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_g20->get_program_duration(); ?></p>
                    </div>

                </div>
                <!--card-->
            </div>



            <div class="col-md-6 wow slideInUp">
                <!--card-->
                <div class="shadow" >
                    <!--IMG and deco-->
                    <div class="p-image-wrapper" style="background:url('<?php echo $program_si->get_program_imgURL(); ?>') center center no-repeat;background-size:contain;">
<!--                        <div class="p-decoration-text" >-->
<!--                            <h4>--><?php //echo $program_si->get_program_title(); ?><!--</h4>-->
<!--                            <h6><i class="fa fa-calendar" aria-hidden="true"></i>--><?php //echo $program_si->get_program_date(); ?><!--&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                                <i class="fa fa-map-marker" aria-hidden="true"></i>--><?php //echo $program_si->get_program_location(); ?><!--&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                                <i class="fa fa-clock-o" aria-hidden="true"></i>--><?php //echo $program_si->get_program_duration(); ?>
<!--                            </h6>-->
<!--                        </div>-->
                    </div>

                    <!--PARA DES-->
                    <div class="p-text-wrapper">
                        <div class="p-text-wrapper">
                            <h6><?php echo $program_si->get_program_title(); ?></h6>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_si->get_program_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp<?php echo $program_si->get_program_location(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_si->get_program_duration(); ?></p>
                        </div>
                    </div>

                </div>
                <!--card-->
            </div>

        </div>

        <div class="row ">
            <div class="col-md-6 wow slideInUp">
                <!--card-->
                <div class="shadow" >

                    <!--IMG and deco-->
                    <div class="p-image-wrapper" style="background:url('<?php echo $program_redicorn->get_program_imgURL(); ?>') center center no-repeat;background-size:contain;">
<!--                        <div class="p-decoration-text" >-->
<!---->
<!--                            <h4>--><?php //echo $program_redicorn->get_program_title(); ?><!--</h4>-->
<!--                            <h6><i class="fa fa-calendar" aria-hidden="true"></i>--><?php //echo $program_redicorn->get_program_date(); ?><!--&nbsp;&nbsp;&nbsp;-->
<!--                                <i class="fa fa-map-marker" aria-hidden="true"></i>--><?php //echo $program_redicorn->get_program_location(); ?><!--&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--                                <i class="fa fa-clock-o" aria-hidden="true"></i>--><?php //echo $program_redicorn->get_program_duration(); ?>
<!--                            </h6>-->
<!--                        </div>-->
                    </div>

                    <!--PARA DES-->
                    <div class="p-text-wrapper">
                        <h6><?php echo $program_redicorn->get_program_title(); ?></h6>
                        <p><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_redicorn->get_program_date(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp<?php echo $program_redicorn->get_program_location(); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;<?php echo $program_redicorn->get_program_duration(); ?></p>
                    </div>

                </div>
                <!--card-->
            </div>


            <div class="col-md-6 wow slideInRight">
                <!--card-->
<!--                <div class="shadow" >-->
<!---->
<!--                    <!--IMG and deco-->
<!--                    <div class="p-image-wrapper" style="background:url('img/reading-group.jpg') center center no-repeat;background-size:cover;">-->
<!--                        <div class="p-decoration-text" >-->
<!--                            <h4>the innovation reading group</h4>-->
<!--                            <h6><i class="fa fa-calendar" aria-hidden="true"></i>coming soon&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--<!--                                <i class="fa fa-map-marker" aria-hidden="true"></i>boston&nbsp;&nbsp;&nbsp;&nbsp;-->
<!--<!--                                <i class="fa fa-clock-o" aria-hidden="true"></i>2 day-->
<!--                            </h6>-->
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <!--PARA DES-->
<!--                    <div class="p-text-wrapper">-->
<!--<!--                        <h6>business, social science </h6>-->
<!--<!--                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas magna at porttitor vehicula. Nullam augue augue.</p>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
                <!--card-->
            </div>

        </div>



    </div>
</div>







<?php
include 'footer.php';
?>
