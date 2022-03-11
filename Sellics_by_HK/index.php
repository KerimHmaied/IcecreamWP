<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link rel="shortcut icon" type="image/x-icon" href="#">
        <!-- Place favicon.ico in the root directory -->
        
		<!-- CSS here -->
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
    </head>
    <body>

       
    <!-- header-area START -->
    <div class="header-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="menu-area">
                        <nav>
                            <ul id="nav">
                                <li class="one"><a href="#" >Home</a></li>
                                <li class="two"><a href="#" >About Us</a></li> 
                                <li class="three"><a href="#" >Contact</a></li>  
                                <hr>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-area END -->

    <main>


        <section class="hero_area" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/hero-bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="hero_cont">
                            <h1>Sign up for unlimited Ice-cream delivery</h1>
                            <form action="#">
                                <div class="email">
                                    <input type="text" placeholder="E-mail">
                                    <a href="#">Get Your Ice-cream</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/desktop.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="sgl_blg">
                            <i>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog1.png" alt="">
                            </i>
                            <p>When it comes to gelatos and sorbets, Berlin may not quite rival Rome — but it sure gets pretty close. Germans have come to love their ice cream after all, another gift that Gastarbeiter, guest workers from Italy, brought with them in the 1950s and 60s. Our favourite ice cream shops keep the traditions alive — and put a new twist on them.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sgl_blg">
                            <i>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog2.png" alt="">
                            </i>
                            <p>Grapefruit and Earl Grey? Or Roasted Chicory Coffee? Jones isn’t afraid of bold tastes. But every single of their scoops, even the most bizarre sounding flavour combinations, are a winner. You may have seen their little pastel- yellow truck at all the most beautiful markets and street parties, but you can also taste their concoctions at their own gelateria in Schöneberg.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="sgl_blg">
                            <i>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog3.png" alt="">
                            </i>
                            <p>Popsicles are underrated – and California Pops gives them the spotlight they truly deserve. Sold at their shops in Kreuzberg and Prenzlauer Berg (and available for deliveries, too), their popsicles are very instagrammable but also very delicious. We love the mango- coconut flavour and the very fresh and fruity sorbets.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="ice_cream">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ice_cont">
                            <h2>Get your unlimited ice cream delivery now</h2>
                            <p>From seasonal ice cream recipes and limited edition offerings to coupons and special promotions—this club is made for real ice cream lovers!</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ice_cream_form">
                            <form action="">
                                <div class="stap1">
                                    <label for="">Email*
                                        <input type="text" placeholder="">
                                    </label>
                                    <label for="">First name
                                        <input type="text" placeholder="">
                                    </label>
                                    <label for="">Last name
                                        <input type="text" placeholder="">
                                    </label>
                                    <a href="javascript:void(0)" class="thm_btn nextBtn">Next</a>
                                </div>
                                <div class="stap2">
                                    <label for="" class="mb-0">Which ice cream taste you like?</label>
                                    <div class="radio_btn_wrp">
                                        <label class="containers">Vanilla
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="containers">Strawberry
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="containers">Coconut
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="containers">Mango
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                          <label class="containers">Other
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                          </label>
                                    </div>
                                    <label for="">How many servings of ice cream do you <br> consume per month?
                                        <input type="text">
                                    </label>
                                    <label for="">How many months should your ice cream <br> supply last for?
                                        <input type="text">
                                    </label>
                                    <a href="javascript:void(0)" class="thm_btn">Submit</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </main>

    <footer class="footer_area">
        <div class="container">
            <div class="col-lg-12">
                <div class="footer_cont">
                    <i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="1345.5" height="472.542" viewBox="0 0 1345.5 472.542">
                            <g id="Group_40" data-name="Group 40" transform="translate(-77 -1964.008)">
                              <g id="Group_37" data-name="Group 37" transform="translate(747.085 2056.145)">
                                <path id="Path_1" data-name="Path 1" d="M1567.664,515.515l-82.755-263.956h165.51Z" transform="translate(-1474.806 -135.11)" fill="#ffe7c7"/>
                                <rect id="Rectangle_5" data-name="Rectangle 5" width="187.433" height="63.027" rx="31.513" transform="translate(0 91.05)" fill="#ffc7d3"/>
                                <path id="Path_2" data-name="Path 2" d="M1649.44,189.615a66.563,66.563,0,0,1-12.329,38.348c-15.008,21.46-128.956,22.834-144.348,3.11a67.055,67.055,0,0,1-14.628-41.458c0-40.952,38.348-74.15,85.652-74.15S1649.44,148.662,1649.44,189.615Z" transform="translate(-1473.828 -115.465)" fill="#ffc7d3"/>
                                <line id="Line_4" data-name="Line 4" x2="76.081" y2="39.97" transform="translate(63.754 160.928)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_5" data-name="Line 5" x2="63.269" y2="33.239" transform="translate(66.417 198.298)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_6" data-name="Line 6" y1="76.081" x2="39.97" transform="translate(73.835 163.386)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_7" data-name="Line 7" y1="63.269" x2="33.239" transform="translate(101.219 188.654)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_3" data-name="Path 3" d="M1668.961,285.89c0,15.945-7.959,28.871-17.777,28.871-6.68,0-7.2-5.273-9.07-14.44-2.385-11.7-12.021-6.125-12.021-19.609,0-15.946,11.272-16.4,21.09-16.4S1668.961,269.945,1668.961,285.89Z" transform="translate(-1495.763 -136.951)" fill="#ffc7d3"/>
                              </g>
                              <g id="Group_36" data-name="Group 36" transform="translate(510.551 1995.222)">
                                <path id="Path_8" data-name="Path 8" d="M1705.88,994.175l-83.253-265.546h166.507Z" transform="translate(-1612.463 -611.479)" fill="#ffe7c7"/>
                                <rect id="Rectangle_9" data-name="Rectangle 9" width="188.562" height="63.406" rx="31.703" transform="translate(0 91.599)" fill="#d7fffa"/>
                                <path id="Path_9" data-name="Path 9" d="M1788.189,667.131a66.96,66.96,0,0,1-12.4,38.578c-15.1,21.589-129.732,22.971-145.217,3.129a67.456,67.456,0,0,1-14.716-41.708c0-41.2,38.579-74.6,86.169-74.6S1788.189,625.933,1788.189,667.131Z" transform="translate(-1611.52 -592.535)" fill="#d7fffa"/>
                                <line id="Line_15" data-name="Line 15" x2="76.539" y2="40.211" transform="translate(64.138 161.898)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_16" data-name="Line 16" x2="63.65" y2="33.439" transform="translate(66.817 199.492)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_17" data-name="Line 17" y1="76.539" x2="40.211" transform="translate(74.28 164.37)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_18" data-name="Line 18" y1="63.65" x2="33.439" transform="translate(101.828 189.79)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_10" data-name="Path 10" d="M1806.913,763.091c0,16.042-8.006,29.046-17.883,29.046-6.721,0-7.246-5.305-9.125-14.528-2.4-11.775-12.093-6.162-12.093-19.727,0-16.042,11.34-16.5,21.217-16.5S1806.913,747.049,1806.913,763.091Z" transform="translate(-1632.673 -613.254)" fill="#d7fffa"/>
                              </g>
                              <g id="Group_39" data-name="Group 39" transform="translate(1233.939 2035.579)">
                                <path id="Path_8-2" data-name="Path 8" d="M1705.88,994.175l-83.253-265.546h166.507Z" transform="translate(-1612.463 -611.479)" fill="#ffe7c7"/>
                                <rect id="Rectangle_9-2" data-name="Rectangle 9" width="188.562" height="63.406" rx="31.703" transform="translate(0 91.599)" fill="#d7fffa"/>
                                <path id="Path_9-2" data-name="Path 9" d="M1788.189,667.131a66.96,66.96,0,0,1-12.4,38.578c-15.1,21.589-129.732,22.971-145.217,3.129a67.456,67.456,0,0,1-14.716-41.708c0-41.2,38.579-74.6,86.169-74.6S1788.189,625.933,1788.189,667.131Z" transform="translate(-1611.52 -592.535)" fill="#d7fffa"/>
                                <line id="Line_15-2" data-name="Line 15" x2="76.539" y2="40.211" transform="translate(64.138 161.898)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_16-2" data-name="Line 16" x2="63.65" y2="33.439" transform="translate(66.817 199.492)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_17-2" data-name="Line 17" y1="76.539" x2="40.211" transform="translate(74.28 164.37)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_18-2" data-name="Line 18" y1="63.65" x2="33.439" transform="translate(101.828 189.79)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_10-2" data-name="Path 10" d="M1806.913,763.091c0,16.042-8.006,29.046-17.883,29.046-6.721,0-7.246-5.305-9.125-14.528-2.4-11.775-12.093-6.162-12.093-19.727,0-16.042,11.34-16.5,21.217-16.5S1806.913,747.049,1806.913,763.091Z" transform="translate(-1632.673 -613.254)" fill="#d7fffa"/>
                              </g>
                              <g id="Group_35" data-name="Group 35" transform="translate(300.108 2035.496)">
                                <path id="Path_5" data-name="Path 5" d="M1854.468,650.126,1777.16,403.544h154.616Z" transform="translate(-1767.722 -294.76)" fill="#ffe7c7"/>
                                <rect id="Rectangle_8" data-name="Rectangle 8" width="175.096" height="58.878" rx="29.439" transform="translate(0 85.057)" fill="#fffbd7"/>
                                <path id="Path_6" data-name="Path 6" d="M1930.416,336.719a62.181,62.181,0,0,1-11.517,35.823c-14.02,20.047-120.467,21.331-134.846,2.9a62.632,62.632,0,0,1-13.665-38.728c0-38.257,35.823-69.269,80.014-69.269S1930.416,298.462,1930.416,336.719Z" transform="translate(-1766.363 -267.45)" fill="#fffbd7"/>
                                <line id="Line_11" data-name="Line 11" x2="71.073" y2="37.34" transform="translate(59.557 150.336)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_12" data-name="Line 12" x2="59.104" y2="31.051" transform="translate(62.046 185.245)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_13" data-name="Line 13" y1="71.073" x2="37.34" transform="translate(68.975 152.631)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_14" data-name="Line 14" y1="59.104" x2="31.051" transform="translate(94.556 176.236)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_7" data-name="Path 7" d="M1958.654,436.455c0,14.9-7.435,26.971-16.607,26.971-6.241,0-6.729-4.926-8.473-13.489-2.228-10.935-11.23-5.722-11.23-18.319,0-14.9,10.53-15.322,19.7-15.322S1958.654,421.559,1958.654,436.455Z" transform="translate(-1796.857 -297.319)" fill="#fffbd7"/>
                              </g>
                              <g id="Group_38" data-name="Group 38" transform="translate(993.798 2002.075)">
                                <path id="Path_5-2" data-name="Path 5" d="M1857.432,659.579,1777.16,403.544H1937.7Z" transform="translate(-1767.361 -290.59)" fill="#ffe7c7"/>
                                <rect id="Rectangle_8-2" data-name="Rectangle 8" width="181.809" height="61.135" rx="30.568" transform="translate(0 88.318)" fill="#fffbd7"/>
                                <path id="Path_6-2" data-name="Path 6" d="M1936.55,339.374a64.564,64.564,0,0,1-11.959,37.2c-14.557,20.816-125.085,22.149-140.015,3.016a65.033,65.033,0,0,1-14.189-40.213c0-39.723,37.2-71.924,83.082-71.924S1936.55,299.651,1936.55,339.374Z" transform="translate(-1766.209 -267.45)" fill="#fffbd7"/>
                                <line id="Line_11-2" data-name="Line 11" x2="73.798" y2="38.771" transform="translate(61.841 156.099)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_12-2" data-name="Line 12" x2="61.37" y2="32.242" transform="translate(64.424 192.347)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_13-2" data-name="Line 13" y1="73.798" x2="38.771" transform="translate(71.619 158.483)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_14-2" data-name="Line 14" y1="61.37" x2="32.242" transform="translate(98.181 182.992)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_7-2" data-name="Path 7" d="M1960.046,437.228c0,15.467-7.72,28-17.243,28-6.48,0-6.987-5.115-8.8-14.007-2.313-11.354-11.66-5.941-11.66-19.021,0-15.466,10.934-15.909,20.457-15.909S1960.046,421.761,1960.046,437.228Z" transform="translate(-1792.046 -292.758)" fill="#fffbd7"/>
                              </g>
                              <g id="Group_34" data-name="Group 34" transform="translate(77 1964.008)">
                                <path id="Path_1-2" data-name="Path 1" d="M1567.664,515.515l-82.755-263.956h165.51Z" transform="translate(-1474.806 -135.11)" fill="#ffe7c7"/>
                                <rect id="Rectangle_5-2" data-name="Rectangle 5" width="187.433" height="63.027" rx="31.513" transform="translate(0 91.05)" fill="#ffc7d3"/>
                                <path id="Path_2-2" data-name="Path 2" d="M1649.44,189.615a66.563,66.563,0,0,1-12.329,38.348c-15.008,21.46-128.956,22.834-144.348,3.11a67.055,67.055,0,0,1-14.628-41.458c0-40.952,38.348-74.15,85.652-74.15S1649.44,148.662,1649.44,189.615Z" transform="translate(-1473.828 -115.465)" fill="#ffc7d3"/>
                                <line id="Line_4-2" data-name="Line 4" x2="76.081" y2="39.97" transform="translate(63.754 160.928)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_5-2" data-name="Line 5" x2="63.269" y2="33.239" transform="translate(66.417 198.298)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_6-2" data-name="Line 6" y1="76.081" x2="39.97" transform="translate(73.835 163.386)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <line id="Line_7-2" data-name="Line 7" y1="63.269" x2="33.239" transform="translate(101.219 188.654)" fill="none" stroke="#eacca7" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"/>
                                <path id="Path_3-2" data-name="Path 3" d="M1668.961,285.89c0,15.945-7.959,28.871-17.777,28.871-6.68,0-7.2-5.273-9.07-14.44-2.385-11.7-12.021-6.125-12.021-19.609,0-15.946,11.272-16.4,21.09-16.4S1668.961,269.945,1668.961,285.89Z" transform="translate(-1495.763 -136.951)" fill="#ffc7d3"/>
                              </g>
                            </g>
                          </svg>                          
                    </i>
                    <p>Ice-cream All Rights Reserved! 2020</p>
                </div>
            </div>
        </div>
    </footer>

    
		<!-- JS here --> 
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
        <script>
            $('.nextBtn').click(function(){
                $(".ice_cream_form").addClass("next")
            })
        </script>
    </body>
</html>