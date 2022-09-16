<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

        <main id="main">
            <!-- ======= 404 Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>404 - Page Not Found</h2>
                    </div>
                </div>
            </section>
            <!-- End 404 Section -->
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
                <div id="footer">
                    <div class="footer-newsletter"  style="background: #FFFFFF;">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6">
                                    <?php get_search_form() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Skills Section -->
        </main>
        <!-- End #main -->
        
<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
