<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

        <!-- لووب يضاف في ملف (single.php) 
        للحصول على محتوى - بوست -->
        <?php 
        // The Loop
        if (have_posts()) :
            while (have_posts()) :
                the_post(); //post
        ?>

        <main id="main">
            <!-- ======= Title Section ======= -->
            <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                            <div class="content">
                                <?php 
                                // دالة لعرض التاق 
                                the_category(', ') 
                                ?>
                                <h3><?php the_title() ?></h3>
                                <p><?php /* دالة لاستدعاء تاريخ البوست */ echo get_the_date() ?> by: <strong><?php /* دالة لاستدعاء مؤلف البوست */ the_author_link() ?></strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->

            <!-- ======= Content Section ======= -->
            <section id="skills" class="skills">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3><?php the_title() ?></h3>
                            <p class="font-italic"><?php the_content() ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Skills Section -->
        </main>
        <!-- End #main -->

        <?php 
        // End Loop
            endwhile;
        endif;
        ?>
 
<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
