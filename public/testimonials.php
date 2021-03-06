<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 2/7/15
 * Time: 4:49 PM
 */
$pageTitle = "Testimonials";
include('includes/head.php');
include('includes/nav.php');
include('includes/comments.php');

?>


<main id="body">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h2 id="testimonialsText">Just a few testimonials from past clients</h2><hr />
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                <p><?php
                        foreach($comments as $comment){
                            echo $comment . "<br /><br /><hr />";
                        }
                    ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" id="testimonialsImage">
                <img src="img/Testimonials.jpg" alt="HA Electric LLC LED Electric Lighting Bar Restaurant Salon Work" class="img-responive center-block"  height="100%" width="100%">
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4>Please feel free to <a href="mailto:adarezek@haelectricllc.com?subject=Testimonial of your work!">email</a> your comments to us!</h4>

            </div>
        </div>
    </div>
</main>












<?php
include('includes/footer.php');
include('includes/bottom.php');
?>