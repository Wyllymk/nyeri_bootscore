<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content py-5 mt-5">
    <div id="primary" class="content-area">

        <!-- Hook to add something nice -->
        <?php bs_after_primary(); ?>

        <main id="main" class="site-main">

            <div class="content-club">
                <!-- Header-->
                <header class="bg-dark  header-1 " style="padding-top:150px;">
                    <div class="container px-5">
                        <div class="text-center d-flex justify-content-center">
                            <h1 class="fw-bold text-white  display-1 pt-5">WELCOME TO NYERI CLUB</h1>

                        </div>
                    </div>
                </header>

                <div class="info">
                    <h1>COME EXPERINCE OUR EXQUISITE COURSE</h1>
                    <p>A CLUB FOR TRUE ENTHUSIASTS, FINEST GOLF EXPERINCE IN ALL FACETS OF THE GAME</p>
                </div>
                <!-- Holes section-->
                <div class="holes">
                    <h1>THE HOLES</h1>

                    <div class="row row-cols-1 row-cols-md-3 g-2 px-5">
                        <div class=" col">
                            <div class=" card h-100">
                                <img src="<?php echo esc_url(get_template_directory_uri() .'/img/allan-nygren--xvKQuNtOhI-unsplash.jpg')?>"
                                    class="card-img-top" alt="Skyscrapers" />
                                <div class="card-body">
                                    <h5 class="card-title">Hole No.1</h5>
                                    <p class="card-text">
                                        welcome to nyeri golf club...
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo esc_url(get_template_directory_uri() .'/img/allan-nygren--xvKQuNtOhI-unsplash.jpg')?>"
                                    class="card-img-top" alt="Los Angeles Skyscrapers" />
                                <div class="card-body">
                                    <h5 class="card-title">Hole No.2</h5>
                                    <p class="card-text">
                                        welcome to nyeri golf club...
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card h-100">
                                <img src="<?php echo esc_url(get_template_directory_uri() .'/img/allan-nygren--xvKQuNtOhI-unsplash.jpg')?>"
                                    class="card-img-top" alt="Palm Springs Road" />
                                <div class="card-body">
                                    <h5 class="card-title">Hole No.3</h5>
                                    <p class="card-text">
                                        welcome to nyeri Golf club...
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-3 g-2 p-5">
                    <div class=" col">
                        <div class=" card h-100">
                            <img src="<?php echo esc_url(get_template_directory_uri() .'/img/allan-nygren--xvKQuNtOhI-unsplash.jpg')?>"
                                class="card-img-top" alt="Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Hole No.4</h5>
                                <p class="card-text">
                                    welcome to nyeri golf club...
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo esc_url(get_template_directory_uri() .'/img/allan-nygren--xvKQuNtOhI-unsplash.jpg')?>"
                                class="card-img-top" alt="Los Angeles Skyscrapers" />
                            <div class="card-body">
                                <h5 class="card-title">Hole No.5</h5>
                                <p class="card-text">
                                    welcome to nyeri golf club...
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <img src="../wp-content/themes/nyeri-club/assets/img/allan-nygren--xvKQuNtOhI-unsplash.jpg"
                                class="card-img-top" alt="Palm Springs Road" />
                            <div class="card-body">
                                <h5 class="card-title">Hole No.6</h5>
                                <p class="card-text">
                                    welcome to nyeri golf club...
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="member">
                <h1>JOIN NYERI CLUB TODAY</h1>
                <button type="button" class="btn btn-primary btn-lg">BECOME A MEMBER</button>
            </div>

            <div class="upcoming-events ">
                <h1 style="text-align:center">UPCOMING EVENTS</h1>
                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">EQUITY BANK TOURNAMENT</h2>
                                <h3 style="color:#06b234fe">JUNE 2022</h3>
                                <p class="card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium
                                    doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                    veritatis et quasi
                                    architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                    voluptas sit
                                    aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui
                                    ratione
                                    voluptatem
                                    sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                    consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                                    dolore
                                    magnam
                                    aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum
                                    exercitationem
                                    ullam corporis
                                    suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel
                                    eum
                                    iure
                                    reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur,
                                    vel
                                    illum qui
                                    dolorem eum fugiat quo voluptas nulla pariatur?</p>
                                <a href="#" class="btn btn-primary">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <img class=" card-img" style="height: 370px;width: auto;"
                                src=" ../wp-content/themes/nyeri-club/assets/img/allan-nygren--xvKQuNtOhI-unsplash.jpg"
                                alt="Card image">
                        </div>
                    </div>
                </div>

        </main>
    </div>
</div>

<?php
get_footer();