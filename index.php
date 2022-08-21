<!-- دالة لاستدعاء رأس الصفحة -->
<?php
get_header();
?>

        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex align-items-center" style="background-image: url('<?php echo get_theme_file_uri('assets/img/hero-background.png') ?>');background-repeat: no-repeat; background-size: cover;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h1><?php bloginfo('name') ?></h1>
                        <h2><?php bloginfo('description') ?></h2>
                        <h2>
                            <span id="h2firstline">YOUR FRIEND ..</span>
                            <span id="h2secline">IN THE BUSINESS WORLD!</span>
                        </h2>
                        <div class="d-lg-flex">
                            <a href="#cta" class="btn-get-started scrollto">Hire us</a>
                            <a href="https://www.youtube.com/watch?v=Tw1csSKANg4&ab_channel=TechMakers" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="<?php echo get_theme_file_uri('assets/img/hero-img.png') ?>" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero -->

        <?php (is_home() || is_front_page() || is_archive() || is_category()) ?>

        <main id="main">
            <!-- ======= About Us Section ======= -->
            <section id="about" class="about">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>About Us</h2>
                    </div>
                    <div class="row content">
                        <div class="col-lg-6">
                            <p>Sections of the company and the mission of each department.</p>
                            <ul>
                                <li><i class="ri-check-double-line"></i> Engineering and interior design.</li>
                                <li><i class="ri-check-double-line"></i> Visuals: (Video Production, Graphic Design, and Games).</li>
                                <li><i class="ri-check-double-line"></i> programming.</li>
                                <li><i class="ri-check-double-line"></i> Content writing.</li>
                                <li><i class="ri-check-double-line"></i> E-Marketing.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0">
                            <p>
                                Our company is focused on web developing as well as we offer
                                a wide range of well-designed multimedia services,
                                which include programming, marketing, translation and content writing services, interior design and publishing.
                            </p>
                            <a href="about-page.html" class="btn-learn-more">Learn More</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About Us Section -->
            
            <!-- ======= Cliens Section ======= -->
            <section id="cliens" class="cliens">
                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-1.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-2.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-3.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-4.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-5.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="<?php echo get_theme_file_uri('assets/img/clients/client-6.png') ?>" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Cliens Section -->

            <!-- ======= Why Us Section ======= -->
            <section id="why-us" class="why-us section-bg">
                <div class="container-fluid" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
                            <div class="content">
                                <h3>Why to choose <strong>Tech Maker..?</strong></h3>
                            </div>
                            <div class="accordion-list">
                                <ul>
                                    <li>
                                        <a data-toggle="collapse" class="collapse" href="#accordion-list-1"><span>01</span> You can count on us <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-1" class="collapse show" data-parent=".accordion-list">
                                            <p>We provide highly efficient services and innovative solutions in multiple fields to exceed your expectations!.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#accordion-list-2" class="collapsed"><span>02</span> We are always here for you <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-2" class="collapse" data-parent=".accordion-list">
                                            <p>Our team is here 24/7 and always ready to help you and solve your problems, You can contact us at any time through multiple communication methods.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <a data-toggle="collapse" href="#accordion-list-3" class="collapsed"><span>03</span> Continuous training and development <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="accordion-list-3" class="collapse" data-parent=".accordion-list">
                                            <p>Tech Makers always develop the skills of their employees to be at a high technical and professional level, and they always keep pace with development.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style="background-image: url('<?php echo get_theme_file_uri('assets/img/why-us.png') ?>');" data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                    </div>
                </div>
            </section>
            <!-- End Why Us Section -->

            <!-- ======= Skills Section ======= -->
            <section id="skills" class="skills">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <img src="<?php echo get_theme_file_uri('assets/img/skills.png') ?>" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                            <h3>Our Skills</h3>
                            <p class="font-italic"></p>
                            <div class="skills-content">
                                <div class="progress">
                                    <span class="skill">DESIGN <i class="val">95%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">DEVELOPMENT <i class="val">85%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">WRITING CONTENT <i class="val">90%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">MARKETING <i class="val">80%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Skills Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Services</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3  col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-play-circle"></i></div>
                                <h4>Motion Graphics</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-copy-alt"></i></div>
                                <h4>Publications</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-share-alt"></i></div>
                                <h4>Sharing &amp; Publishing</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-cart"></i></div>
                                <h4>Digital Marketing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3  col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-game"></i></div>
                                <h4>Games Design</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-file-image"></i></div>
                                <h4>Infographic</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-cube"></i></div>
                                <h4>3D Modeling</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-keyboard"></i></div>
                                <h4>Translation &amp; content writing</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3  col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-window-alt"></i></div>
                                <h4>Web design &amp; development</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-mobile-alt"></i></div>
                                <h4>Mobile application</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bx-briefcase-alt-2"></i></div>
                                <h4>Educational programs</h4>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
                            <div class="icon-box">
                                <div class="icon"><i class="bx bxs-id-card"></i></div>
                                <h4>UI &amp; UX</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Services Section -->

            <!-- ======= Cta Section ======= -->
            <section id="cta" class="cta">
                <div class="container" data-aos="zoom-in">
                    <div class="row">
                        <div class="col-lg-9 text-center text-lg-left">
                            <h2>Ask for a service</h2>
                        </div>
                        <div class="col-lg-3 cta-btn-container text-center">
                            <a class="cta-btn align-middle" href="#">Hire us</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Cta Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Portfolio</h2>
                        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Visuals</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-1-app.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>App 1</h4>
                                    <p>App</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-1-app.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-2-web.JPG') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Animation Catalog</h4>
                                    <p>Web</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-2-web.gif') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Animation Catalog"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-3-app.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>App</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-3-app.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-4-Visuals.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Visual identity</h4>
                                    <p>Visuals</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-4-Visuals.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Visual identity"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-5-web.JPG') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>3D Layered Social Media Icon Hover</h4>
                                    <p>Web</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-5-web.gif') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="3D Layered Social Media Icon Hover"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-7-Visuals.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Logo</h4>
                                    <p>Visuals</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-7-Visuals.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-8-Visuals.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Logo</h4>
                                    <p>Visuals</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-8-Visuals.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                                <div class="portfolio-img"><img src="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-9-web.png') ?>" class="img-fluid" alt=""></div>
                                <div class="portfolio-info">
                                    <h4>Web 3</h4>
                                    <p>Web</p>
                                    <a href="<?php echo get_theme_file_uri('assets/img/portfolio/portfolio-9-web.png') ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bxs-zoom-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center showMore" data-aos="fade-up" data-aos-delay="100" ><a href="index.html">Show more</a></div>
            </section>
            <!-- End Portfolio Section -->

            <!-- ======= Team Section ======= -->
            <section id="team" class="team section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Team</h2>
                    </div>
                    <div class="row team-carousel owl-carousel">
                        <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="200">
                                <div class="pic"><img src="<?php echo get_theme_file_uri('assets/img/team/team-2.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Hussein Ouda</h4>
                                    <span>Team Leader</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="100">
                                <div class="pic"><img src="<?php echo get_theme_file_uri('assets/img/team/team-1.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Ramzi Jarad</h4>
                                    <span>Web Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="300">
                                <div class="pic"><img src="<?php echo get_theme_file_uri('assets/img/team/team-3.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Muhamad Hassan</h4>
                                    <span>UI | UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 d-flex align-items-stretch">
                            <div class="member" data-aos="zoom-in" data-aos-delay="400">
                                <div class="pic"><img src="<?php echo get_theme_file_uri('assets/img/team/team-4.jpg') ?>" class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>Mustafa Felfel</h4>
                                    <span>Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Team Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
                <div class="container">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo get_theme_file_uri('assets/img/testimonials/testimonials-1.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Mrs. Sahar Hammo</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    You have always been hardworking and ambitious. And i’m sure you will success. Go confidently in the direction of your dreams!” Wish you all the best.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo get_theme_file_uri('assets/img/testimonials/testimonials-2.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Mr. Mahmoud Hammouda</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    A creative and distinguished team with the ability to solve the most difficult software problems. My wishes for them are all success.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo get_theme_file_uri('assets/img/testimonials/testimonials-3.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Mrs. Bessan Al-Jamal</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Talent makes you win games but teamwork makes you win trophies. This is a distinguished and creative team, and I am sure of its great success.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="<?php echo get_theme_file_uri('assets/img/testimonials/testimonials-4.jpg') ?>" class="testimonial-img" alt="">
                                <h3>Dr. Mohammed Ouda</h3>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    I recommend other companies to start doing business with Tech Makers, because they will quickly find a solution for any complex Service Management situation. With their capacity, quality and knowledge, Tech Makers can help any company achieve its goals.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Testimonials Section -->

            <!-- ======= Contact Section ======= -->  
            <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contact</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">
                                <div class="address">
                                    <i class="icofont-google-map"></i>
                                    <p>Ath Thara St, Next to thailandi Restaurant, Gaza</p>
                                </div>
                                <div class="email">
                                    <i class="icofont-envelope"></i>
                                    <p>hello@techmakers.tech</p>
                                </div>
                                <div class="skype">
                                    <i class="icofont-skype"></i>
                                    <a href="https://join.skype.com/invite/dQcjNVtV1mmO" target="_blank"><p>techmakers</p></a>
                                </div>
                                <div class="phone">
                                    <i class="icofont-whatsapp"></i>
                                    <a href="https://wa.me/970592116761" target="_blank"><p>+970592116761</p></a>
                                </div>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33958.77311390287!2d34.48895022561317!3d31.504148710066023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7f054e542767%3A0x7ff98dc913046392!2z2LrYstip!5e0!3m2!1sar!2s!4v1553459533102" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                        <div class="validate"></div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                        <div class="validate"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                                    <div class="validate"></div>
                                </div>
                                <div class="mb-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center"><button type="submit">Send Message</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Contact Section -->
        </main>
        <!-- End #main -->
        
<!-- دالة لاستدعاء ذيل الصفحة -->
<?php 
get_footer();
?>
