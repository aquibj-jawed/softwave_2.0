<div data-elementor-type="wp-post" data-elementor-id="6909" class="elementor elementor-6909">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-0f24006 elementor-section-full_width elementor-section-stretched elementor-section-height-default elementor-section-height-default wpr-particle-no wpr-jarallax-no wpr-parallax-no wpr-sticky-section-no"
        data-id="0f24006" data-element_type="section"
        data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3acf705"
                data-id="3acf705" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-268ff56 elementor-widget__width-initial elementor-widget elementor-widget-html"
                        data-id="268ff56" data-element_type="widget" data-widget_type="html.default">
                        <div class="elementor-widget-container">
                            <script async
                                src="../pagead2.googlesyndication.com/pagead/js/fbcfd.txt?client=ca-pub-7003033308263460"
                                crossorigin="anonymous"></script>
                            <!-- Pixel Code for https://fomo.softwavehub.tech/ -->
                            <script defer
                                src="https://fomo.softwavehub.tech/pixel/vbDoDtejbMHNYghvBsngZ5Dzdz6jAQfI"></script>
                            <!-- END Pixel Code -->
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-e58c4a8 elementor-widget elementor-widget-restly_header_template_one"
                        data-id="e58c4a8" data-element_type="widget"
                        data-widget_type="restly_header_template_one.default">
                        <div class="elementor-widget-container">
                            <script>
                                (function ($) {
                                    "use strict";
                                    $.fn.tpmobilemenu = function (options) {
                                        var opt = $.extend(
                                            {
                                                menuToggleBtn: ".tp-menu-toggle",
                                                bodyToggleClass: "tp-body-visible",
                                                subMenuClass: "tp-submenu",
                                                subMenuParent: "tp-item-has-children",
                                                subMenuParentToggle: "tp-active",
                                                meanExpandClass: "tp-mean-expand",
                                                appendElement: '<span class="tp-mean-expand"></span>',
                                                subMenuToggleClass: "tp-open",
                                                toggleSpeed: 400,
                                            },
                                            options
                                        );

                                        return this.each(function () {
                                            var menu = $(this); // Select menu

                                            // Menu Show & Hide
                                            function menuToggle() {
                                                menu.toggleClass(opt.bodyToggleClass);

                                                // collapse submenu on menu hide or show
                                                var subMenu = "." + opt.subMenuClass;
                                                $(subMenu).each(function () {
                                                    if ($(this).hasClass(opt.subMenuToggleClass)) {
                                                        $(this).removeClass(opt.subMenuToggleClass);
                                                        $(this).css("display", "none");
                                                        $(this).parent().removeClass(opt.subMenuParentToggle);
                                                    }
                                                });
                                            }

                                            // Class Set Up for every submenu
                                            menu.find("li").each(function () {
                                                var submenu = $(this).find("ul");
                                                submenu.addClass(opt.subMenuClass);
                                                submenu.css("display", "none");
                                                submenu.parent().addClass(opt.subMenuParent);
                                                submenu.prev("a").append(opt.appendElement);
                                                submenu.next("a").append(opt.appendElement);
                                            });

                                            // Toggle Submenu
                                            function toggleDropDown($element) {
                                                if ($($element).next("ul").length > 0) {
                                                    $($element).parent().toggleClass(opt.subMenuParentToggle);
                                                    $($element).next("ul").slideToggle(opt.toggleSpeed);
                                                    $($element).next("ul").toggleClass(opt.subMenuToggleClass);
                                                } else if ($($element).prev("ul").length > 0) {
                                                    $($element).parent().toggleClass(opt.subMenuParentToggle);
                                                    $($element).prev("ul").slideToggle(opt.toggleSpeed);
                                                    $($element).prev("ul").toggleClass(opt.subMenuToggleClass);
                                                }
                                            }

                                            // Submenu toggle Button
                                            var expandToggler = "." + opt.meanExpandClass;
                                            $(expandToggler).each(function () {
                                                $(this).on("click", function (e) {
                                                    e.preventDefault();
                                                    toggleDropDown($(this).parent());
                                                });
                                            });

                                            // Menu Show & Hide On Toggle Btn click
                                            $(opt.menuToggleBtn).each(function () {
                                                $(this).on("click", function () {
                                                    menuToggle();
                                                });
                                            });

                                            // Hide Menu On out side click
                                            menu.on("click", function (e) {
                                                e.stopPropagation();
                                                menuToggle();
                                            });

                                            // Stop Hide full menu on menu click
                                            menu.find("div").on("click", function (e) {
                                                e.stopPropagation();
                                            });
                                        });
                                    };

                                    $(".tp-menu-wrapper").tpmobilemenu();
                                })(jQuery);
                            </script>
                            <div class="tp-menu-wrapper">
                                <div class="tp-menu-area text-center">
                                    <button class="tp-menu-toggle"><i class="fas fa-times"></i></button>
                                    <div class="mobile-logo">
                                        <h2>
                                            <a href="index.html" rel="home">
                                                Softwavehub </a>
                                        </h2>
                                    </div>
                                    <div class="tp-mobile-menu">
                                        <ul id="mainmenu" class="menu">
                                            <li id="menu-item-8199"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8199 no-mega">
                                                <a href="#">Services</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-7715"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7715">
                                                        <a href="web-development/index.php">Web Development</a>
                                                    </li>
                                                    <li id="menu-item-7714"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7714">
                                                        <a href="app-development/index.php">App Development</a>
                                                    </li>
                                                    <li id="menu-item-7716"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7716">
                                                        <a href="digital-marketing/index.php">Digital
                                                            Marketing</a></li>
                                                    <li id="menu-item-7717"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7717">
                                                        <a href="graphic-design/index.php">Graphic Design</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-7718"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7718">
                                                <a href="portfolio/index.php">Portfolio</a></li>
                                            <li id="menu-item-7719"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7719 mega column_5">
                                                <a href="#">Solutions</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-7720"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7720">
                                                        <a href="#">On Demand</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-7735"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7735">
                                                                <a href="food-delivery/index.php">Food
                                                                    Delivery</a></li>
                                                            <li id="menu-item-7749"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7749">
                                                                <a href="e-commerce/index.php">E-Commerce</a>
                                                            </li>
                                                            <li id="menu-item-7758"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7758">
                                                                <a href="grocery-delivery/index.php">Grocery
                                                                    Delivery</a></li>
                                                            <li id="menu-item-8882"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8882">
                                                                <a
                                                                    href="multideliver/index.php">MultiDeliver</a>
                                                            </li>
                                                            <li id="menu-item-7775"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7775">
                                                                <a href="taxi-transport/index.php">Taxi &#038;
                                                                    Transport</a></li>
                                                            <li id="menu-item-9227"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9227">
                                                                <a href="logistics/index.php">Logistics</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li id="menu-item-7721"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7721">
                                                        <a href="#">Services</a>
                                                        <ul class="sub-menu">
                                                            <li id="menu-item-7779"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7779">
                                                                <a href="home-service/index.php">Home
                                                                    Service</a></li>
                                                            <li id="menu-item-7793"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7793">
                                                                <a href="education/index.php">Education</a>
                                                            </li>
                                                            <li id="menu-item-9093"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9093">
                                                                <a href="school-crm/index.php">School CRM</a>
                                                            </li>
                                                            <li id="menu-item-7799"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7799">
                                                                <a href="healthcare/index.php">Hospital</a>
                                                            </li>
                                                            <li id="menu-item-7808"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7808">
                                                                <a href="real-estate/index.php">Real Estate</a>
                                                            </li>
                                                            <li id="menu-item-9222"
                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9222">
                                                                <a href="jobs-portal-job-board/index.php">Jobs
                                                                    Portal</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-9513"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9513 no-mega">
                                                <a href="#">Marketing</a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-9514"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9514">
                                                        <a href="whatsapp-marketing/index.php">Whatsapp
                                                            Marketing</a></li>
                                                    <li id="menu-item-9515"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9515">
                                                        <a href="email-marketing/index.php">Email Marketing</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- <li id="menu-item-7751"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7751">
                                                <a
                                                    href="blog-something-wonderful-you-will-read-here/index.html">Blog</a>
                                            </li> -->
                                            <li id="menu-item-7752"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7752">
                                                <a href="contact-us/index.php">Contact Us</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <header id="masthead"
                                class="site-header header-one tp-header restly-header-template-one">
                                <div class="header-top">
                                    <div class="header-top-fluid">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 top-header-left">
                                                <ul>
                                                    <li><span>Call Us:</span>
                                                        <p><a href="tel:919676825571">+919676825571</a></p>
                                                    </li>
                                                    <li><span>Email us:</span>
                                                        <p><a
                                                                href="mailto:support@softwavehub.com">support@softwavehub.com</a>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div
                                                class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 top-header-right">

                                                <div class="office-time">
                                                    <i aria-hidden="true" class="fas fa-clock"></i><span>08:00
                                                        am - 06:00 pm</span>
                                                </div>

                                                <div class="social-icons">
                                                    <ul>
                                                        <li><a href="https://www.facebook.com/people/Softwave-Hub/61551421586813/"
                                                                target="_blank" rel="nofollow"
                                                                title="Facebook"><i aria-hidden="true"
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="https://www.linkedin.com/company/softwavehub/"
                                                                target="_blank" rel="nofollow"
                                                                title="Linkedin"><i aria-hidden="true"
                                                                    class="fab fa-linkedin-in"></i></a></li>
                                                        <li><a href="https://www.instagram.com/softwavehub/"
                                                                target="_blank" rel="nofollow"
                                                                title="Pintarest"><i aria-hidden="true"
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <li><a href="https://www.youtube.com/@softwavehub"
                                                                target="_blank" rel="nofollow"
                                                                title="Youtube"><i aria-hidden="true"
                                                                    class="fab fa-youtube"></i></a></li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-header header-fluid">
                                    <nav class="navbar navbar-expand-lg navbar-light main-navigation"
                                        id="no-sticky">
                                        <div class="logo-area logobg">
                                            <div class="site-branding">
                                                <h2 class="site-title"><a href="index.html"
                                                        rel="home">Softwavehub</a></h2>
                                            </div><!-- .site-branding -->
                                        </div>
                                        <div
                                            class="navbar-collapse nav-menu main-menu d-none d-lg-inline-block">
                                            <ul id="mainmenu" class="ms-4">
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-8199 no-mega">
                                                    <a href="#">Services</a>
                                                    <ul class="sub-menu">
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7715">
                                                            <a href="web-development/index.php">Web
                                                                Development</a></li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7714">
                                                            <a href="app-development/index.php">App
                                                                Development</a></li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7716">
                                                            <a href="digital-marketing/index.php">Digital
                                                                Marketing</a></li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7717">
                                                            <a href="graphic-design/index.php">Graphic
                                                                Design</a></li>
                                                    </ul>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7718">
                                                    <a href="portfolio/index.php">Portfolio</a></li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7719 mega column_5">
                                                    <a href="#">Solutions</a>
                                                    <ul class="sub-menu">
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7720">
                                                            <a href="#">On Demand</a>
                                                            <ul class="sub-menu">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7735">
                                                                    <a href="food-delivery/index.php">Food
                                                                        Delivery</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7749">
                                                                    <a
                                                                        href="e-commerce/index.php">E-Commerce</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7758">
                                                                    <a href="grocery-delivery/index.php">Grocery
                                                                        Delivery</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8882">
                                                                    <a
                                                                        href="multideliver/index.php">MultiDeliver</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7775">
                                                                    <a href="taxi-transport/index.php">Taxi
                                                                        &#038; Transport</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9227">
                                                                    <a href="logistics/index.php">Logistics</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li
                                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7721">
                                                            <a href="#">Services</a>
                                                            <ul class="sub-menu">
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7779">
                                                                    <a href="home-service/index.php">Home
                                                                        Service</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7793">
                                                                    <a href="education/index.php">Education</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9093">
                                                                    <a href="school-crm/index.php">School
                                                                        CRM</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7799">
                                                                    <a href="healthcare/index.php">Hospital</a>
                                                                </li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7808">
                                                                    <a href="real-estate/index.php">Real
                                                                        Estate</a></li>
                                                                <li
                                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9222">
                                                                    <a href="jobs-portal-job-board/index.php">Jobs
                                                                        Portal</a></li>
                                                            </ul>
                                                        </li>
                                                       
                                                    </ul>
                                                </li>
                                                <li
                                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9513 no-mega">
                                                    <a href="#">Marketing</a>
                                                    <ul class="sub-menu">
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9514">
                                                            <a href="whatsapp-marketing/index.php">Whatsapp
                                                                Marketing</a></li>
                                                        <li
                                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9515">
                                                            <a href="email-marketing/index.php">Email
                                                                Marketing</a></li>
                                                    </ul>
                                                </li>
                                                <!-- <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7751">
                                                    <a
                                                        href="blog-something-wonderful-you-will-read-here/index.html">Blog</a>
                                                </li> -->
                                                <li
                                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7752">
                                                    <a href="contact-us/index.php">Contact Us</a></li>
                                            </ul>
                                        </div>
                                        <button type="button" class="tp-menu-toggle d-inline-block d-lg-none"><i
                                                class="fas fa-bars"></i></button>

                                        <div class="button header-cta-button">
                                            <a href="contact-us/index.php" target="_blank" rel="nofollow"
                                                class="theme-btns">Meet With Us</a>
                                        </div>

                                    </nav>
                                </div>
                            </header><!-- #masthead -->
                            <script>
                                (function ($) {
                                    "use strict";
                                    jQuery(".site").addClass("header-template-one-activate");
                                })(jQuery);
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>