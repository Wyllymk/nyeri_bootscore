<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>

<footer>

    <div class="bootscore-footer bg-body-tertiary pt-5 pb-3">
        <footer class="bg-info">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-4 col-sm-6">
                        <h5 class="text-uppercase fw-bold tnr">Menu</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About Us</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gold</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Membership</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Facilities</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Special Events</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tenders</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Contact Us</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <h5 class="text-uppercase fw-bold tnr">Contact</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2 d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                                <a href="#" class="nav-link p-0 text-muted">Nyeri - Kenya</a>
                            </li>
                            <li class="nav-item mb-2 d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-telephone" viewBox="0 0 16 16">
                                    <path
                                        d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                </svg>
                                <a href="#" class="nav-link p-0 text-muted">+254 78 899 888</a>
                            </li>
                            <li class="nav-item mb-2 d-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope-at" viewBox="0 0 16 16">
                                    <path
                                        d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z" />
                                    <path
                                        d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z" />
                                </svg>
                                <a href="#" class="nav-link p-0 text-muted">info@nyericlub.com</a>
                            </li>
                            <li class="nav-item mb-2">
                                <div class="d-inline-block"><a href="#"
                                        class="btn btn-primary nav-link py-2 px-5 text-light text-uppercase">Become a
                                        Member</a></div>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-4 col-sm-6 mx-sm-auto">
                        <h5 class="text-uppercase fw-bold tnr">Helpful Links</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">News & Events</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Gallery</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Reciprocating
                                    Clubs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Guest Information</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Scoreboard</a></li>
                        </ul>
                    </div>
                    <p class="text-dark text-center ">All Rights Reserved. Designed and created by The JITU in
                        collaboration
                        with Dedan Kimathi University of Technology</p>
                </div>
            </div>


        </footer>
    </div>

    <div class="bootscore-info bg-body-tertiary text-body-tertiary border-top py-2 text-center">
        <small class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?>
            <?php bloginfo('name'); ?></small>
    </div>

</footer>

<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span
        class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>