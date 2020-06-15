<?php
    /*
    Template Name: Dementia Support subpage
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

    <section id="container-fluid sub-page">
        <div class="row leaf-bg">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">

                <!--                    Add breadcrumb plugin here-->

                <h1><?php the_field("titleforsupportpage"); ?></h1>
            </div>
            <div class="col-xs-1"></div>

        </div><!--            row with leaf background-->
        <!--            Add text-to-speech function HERE
-->

        <div class="row intro">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <!--image-->
                <img class="landing-img" src="<?php the_field("supportimage");?>">

                <p class="a-list"><?php the_field("bodyforsupporttext"); ?> </p>


            </div>
            <div class="col-xs-1"></div>
        </div><!--        row-->

    </section>

    <section class="container-fluid more-info">
        <div class="col-xs-1"></div>
        <div class="col-xs-10">
            <h2><?php the_field("headingforservicesection"); ?></h2>
            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice1"); ?></h3>
                    <p><?php the_field("bodyforservice1"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice1"); ?>" class="btn red-btn" role="button">
                        </a>
                    </div>
                    <!--button to families and friends course -->


                </div>
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice2"); ?></h3>
                    <p><?php the_field("bodyforservice2"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice2"); ?>" class="btn red-btn" role="button">
                        </a>
                    </div>
                    <!--friendship clubs -->
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <h3><?php the_field("subheadingforservice3"); ?></h3>
                    <p><?php the_field("bodyforservice3"); ?> </p>

                    <div class="learnmore">
                        <a href="<?php the_field("buttonforservice3"); ?>" class="btn red-btn" role="button">
                        </a>
                    </div>
                    <!--button to adjusting to change -->


                </div>

            </div>

        </div>
        <div class="col-xs-1"></div>
    </section>
    
    <section class="container-fluid resources">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("supportresourcesheading"); ?></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource1"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource2"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource3"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource4"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource5"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource6"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource7"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource8"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource9"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource10"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource11"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="pdf-link">
                            <a href="<?php the_field("supportresource12"); ?>" class="btn grey-btn" role="button">
                            </a>
                        </div>                
                    </div>
                    
                </div>
                

            </div>
            <div class="col-xs-1"></div>
        </section><!--    Our resources-->


</div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>