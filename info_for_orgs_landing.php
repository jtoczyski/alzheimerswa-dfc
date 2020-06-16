<?php
    /*
    Template Name: Organisations landing
    */
    ?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>
<!--        Body section-->
<div id="page-wrap">

<section id="container-fluid landing-page">
            <div class="row circle-bg">
                <div class="col-xs-1"></div>
                <div class="col-xs-10"> 
                
<!--                    Insert Breadcrumbs-->
                    <h1><?php the_field("titlefororganisationspage"); ?></h1>
                </div>
                <div class="col-xs-1"></div>

            </div><!--            row with circles background-->

            
            <div class="row intro">
                <div class="col-xs-1"></div>
                <div class="col-xs-10">
                     <!--image-->
                    
                    <p><?php the_field("textcontentorganisations"); ?> </p>

                    <img class = "landing-img" alt = "gathering at memory cafe" src ="<?php the_field("organisationspageimage");?>">
                    
                </div>
                <div class="col-xs-1"></div>
            </div><!--        row-->
    
           </section>
            
            <section class="container-fluid more-info">
            <div class="col-xs-1"></div>
            <div class="col-xs-10">
                <h2><?php the_field("titleforfurtherinformationO"); ?></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading1"); ?></h3>
                        <p><?php the_field("Otextforfurtherinfo1"); ?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton1");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton1text");?></h4>
                        </a>
                    </div><!--button to cafes map -->
                        
            
                    </div>
                     <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading2");?></h3>
                        <p><?php the_field("Otextforfurtherinfo2");?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton2");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton2text");?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                    
                        <div class="col-sm-6">
                        <h3><?php the_field("Ofurtherinfosubheading3");?></h3>
                        <p><?php the_field("Otextforfurtherinfo3");?> </p>
                        
                         <div class= "learnmore">
                        <a href="<?php the_field("organisationsbutton3");?>" class="btn red-btn" role="button">
                            <h4><?php the_field("organisationsbutton3text");?></h4>
                        </a>
                    </div><!--button to learnmore -->
                    </div>
                </div>
                
<!--                INSERT map plug-in HERE-->

            </div>
            <div class="col-xs-1"></div>
        </section>
            
    </div>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>