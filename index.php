<?php include "inc/head.php"; ?>
<?php include "inc/header.php"; ?>

<div class="wrapper_main">
    <main class="content">
        <section class="slider">
            <div class="left_box">
                <div class="js_slider_top">
                    <div>
                        <div class="item">
                            <img src="img/slider_img_1.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <img src="img/slider_img_2.jpg" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="item">
                            <img src="img/slider_img_3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="wrapper_arrow">
                    <span class="prev"><?php include 'img/arrow_left.svg'; ?></span>
                    <span class="next"><?php include 'img/arrow_right.svg'; ?></span>
                </div>
            </div>
            <div class="right_box">
                <div class="sub_title">about NMAPPD</div>
                <h1 class="title_h1">Let’s become an agent <span>for change.</span></h1>
                <p>NMAPPD is a 4 statewide consortium of providers licensed to deliver services to individuals with
                    physical and developmental disabilities.</p>
                <p>Since 1985, NMAPPD has provided advocacy, counsel and other services to more than 80 member
                    organizations that share a common dedication to the needs of individuals and families with
                    disabilities.</p>
            </div>
        </section>

        <section class="association">
            <div class="container">
                <h2 class="title_h2">New Mexico Association of Providers
                    for People with Disabilities</h2>
                <div class="module__box">
                    <div class="row same_height">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <div class="icon">
									<?php include 'img/association_img_1.svg'; ?>
                                </div>
                                <h3 class="title_h3">Our Mission</h3>
                                <p>NMAPPD supports and advocates for organizations that enhance the lives of people with
                                    disabilities and their families.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <div class="icon">
									<?php include 'img/association_img_2.svg'; ?>
                                </div>
                                <h3 class="title_h3">Our Vision</h3>
                                <p>To advance excellence programs and services through informing, educating and
                                    networking with the disabilities community.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <div class="icon">
									<?php include 'img/association_img_3.svg'; ?>
                                </div>
                                <h3 class="title_h3">Who We Are</h3>
                                <p>NMAPPD is a 501(c) 4 statewide consortium of providers licensed to deliver services
                                    to individuals with physical and developmental disabilities.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper_btn">
                    <a href="#" class="btn btn_no_bg">More About Us</a>
                </div>
            </div>
        </section>

        <section class="our_partners">
            <div class="container">
                <h2 class="title_h2">Our Partners</h2>
                <div class="sub_title">NMAPPD proudly presents our Partners.</div>
                <div class="module__box module__box_2">
                    <div class="row same_height">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <img src="img/our-partners_img_1.svg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <img src="img/our-partners_img_1.svg" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="item item_h">
                                <img src="img/our-partners_img_1.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="send_message">
            <div class="container">
                <h2 class="title_h2">Send us a message</h2>
                <form action="/">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input class="form-input" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input class="form-input" type="text"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input class="form-input" type="email"/>
                    </div>
                    <div class="form-group area">
                        <label class="form-label">Message</label>
                        <textarea class="form-input"></textarea>
                    </div>
                    <button class="btn">Send a message</button>
                </form>
            </div>
        </section>

    </main>

	<?php include "inc/footer.php"; ?>
</div>
</body>
</html>
