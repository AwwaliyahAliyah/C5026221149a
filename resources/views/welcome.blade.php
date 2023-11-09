<html lang="en">
    <head>
        <title>ETS PWEB Landing Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="mystyle.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function showElements() {
                var emailContainer = document.getElementById("emailContainer");
                var ageCheckBox = document.getElementById("ageCheckBox");
                var signupButton = document.getElementById("signupButton");

                ageCheckBox.style.display = "block";
                signupButton.style.display = "block";
            }

            function validateForm() {
                var email = document.getElementById("email").value;
                var atIndex = email.indexOf("@");
                var dotIndex = email.lastIndexOf(".");
                var domain = email.slice(dotIndex + 1).toLowerCase();
                var validGTLDs = [".com", ".net", ".org", ".edu"];

                if (email.value == "") {
                    alert("Please enter a valid email address");
                    email.focus();
                    return false;
                }

                if (atIndex == -1 || dotIndex == -1 || dotIndex < atIndex + 2) {
                    alert("Please enter a valid email address");
                    document.getElementById("email").focus();
                    return false;
                }

                if (!validGTLDs.includes("." + domain)) {
                alert("Please enter a valid email address");
                document.getElementById("email").focus();
                return false;
                }
            }
        </script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-2" id="mainNav">
            <div class="container px-lg-2">
                <a class="navbar-brand" href="https://www.adidas.com/us">
                    <img src="adidas.png" width="60.08" height="37.73">
                </a>
                <a class="navbar-brand" href="https://parley.tv/">
                    <img src="https://images.squarespace-cdn.com/content/v1/624b15eaed90eb4638ead49d/6e56ebc4-0e92-4478-b571-dafc7ea25609/Parley_for_the_Oceans_logo.png?format=1500w" width="72.34px" height="39.99">
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav my-2 my-lg-0 ml-auto">
                        <li><a class="nav-link text-dark" href="#about">About</a></li>
                        <li><a class="nav-link text-dark" href="#collaboration">Collaboration</a></li>
                        <li><a class="nav-link text-dark" href="#mission">Mission</a></li>
                        <li><a class="nav-link text-dark" href="#product">Product</a></li>
                        <li><a class="nav-link text-dark" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="container-fluid aliyah-banner">
        </header>
        <section class="container-fluid pt-5 pb-5 mb-2" id="about">
            <div class="aliyah-circle"></div>
            <div class="container text-center">
                <div class="aliyah-content">
                    <div class="aliyah-textbox">
                        <h2 class="font-weight-normal">It's not just Shoes<br>It's <span>Adidas UltraBOOST X Parley</span></h2>
                        <p>To launch our partnership and demonstrate a shared vision for collaboration, Parley and adidas unveiled a concept shoe made from reclaimed marine plastic waste at the United Nations in 2015. The Ultra Boost prototype featured an upper made of yarns and filaments reclaimed and recycled from ocean waste and illegal deep-sea gillnets. The fishing gear was once used in poaching operations exploiting vulnerable toothfish species in the Southern Ocean.</p>
                        <p>The adidas x Parley concept shoe was made in just six days in close collaboration with Sea Shepherd supported by green chemist John Warner and designer Alexander Taylor.</p>
                        <a href="#collaboration">Learn More</a>
                    </div>
                    <div class="aliyah-imgBox">
                        <img src="about-product.png" width="400px">
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid pt-5 pb-5 aliyah-collabcolor" id="collaboration">
            <div class="container text-center">
                <h2 class="aliyah-judul">COLLABORATIONS</h2>
                <p>On Earth Day in 2015, Parley first announced its partnership with Adidas</p>
                <hr class="aliyah-line">
                <img src="parley.png" class="aliyah-collabimg">
                <p class="aliyah-collabtext">Leveraging a vast global network that spans science, sport, fashion, ocean conservation and more, adidas x Parley collaborations, limited-edition products and sponsorships have engaged a massive global audience. From an ongoing product line created with Stella McCartney to Ocean Plastic® kits for some of the biggest sports teams on the planet, our collaboration has brought the oceans cause to new audiences who might never have otherwise engaged, taken action and joined the movement.</p>
                <p class="aliyah-collabtext">Highlights so far include upcycled apparel for Manchester United, Real Madrid, Arsenal, Bayern Munich, AC Milan and other Premier League football clubs, team kits for Major League Soccer and the National Hockey League, an ongoing collaboration with the University of Miami that has expanded to ocean education for local youth, tennis apparel and a unique ocean-side tennis match at the Australian Open and a collaboration with New Zealand's famous All Blacks rugby team.</p>
            </div>
        </section>
        <section class="container-fluid pt-5 pb-5 mb-4" id="mission">
            <div class="container text-center">
                <h2 class="aliyah-judul">A MISSION FOR OUR OCEANS</h2>
                <p>Transforming Ocean Waste into High-Performance Footwear</p>
                <hr class="aliyah-line">
                <div class="row pt-4 pb-4">
                    <div class="col-4">
                        <div class="flip-card float-left">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="mission1.jpg" style="width: 300px; height: 300px; border-radius: 10px;">
                              </div>
                              <div class="flip-card-back">
                                <h5 class="font-weight-bold">A MOVEMENT BEGINS</h5>
                                <p class="px-5">How adidas and Parley for the Oceans have teamed up to help end plastic waste through the power of sport. Together, we have motivated millions to #runfortheoceans as we work to clean-up our planet.</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="flip-card mx-4">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="mission2.jpeg" style="width: 300px; height: 300px; border-radius: 10px;">
                              </div>
                              <div class="flip-card-back">
                                <h5 class="font-weight-bold">SMALL STEPS BIG ACTION</h5>
                                <p class="px-5">Passionate young leaders, allies and emerging creators from around the world come together to collaborate on solutions to help protect our oceans and end plastic waste.</p>
                              </div>
                            </div>
                          </div>
                    </div>
                    <div class="col-4">
                        <div class="flip-card float-right">
                            <div class="flip-card-inner">
                              <div class="flip-card-front">
                                <img src="mission3.jpeg" style="width: 300px; height: 300px; border-radius: 10px;">
                              </div>
                              <div class="flip-card-back">
                                <h5 class="font-weight-bold">SYMBOLS OF CHANGE</h5>
                                <p class="px-5">How a global movement is helping to protect our oceans by collecting plastic waste on our shorelines and converting it into beautiful, high-performance products.</p>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid px-0 pb-5 aliyah-product" id="product">
            <div class="container-fluid pt-5 text-center aliyah-top">
                <h2 class="aliyah-judul">OUR PRODUCT</h2>
                <p>Step into the Future with Our Sustainable Footwear Collection</p>
                <hr class="aliyah-line">
            </div>
            <div class="aliyah-content aliyah-row" style="margin-top: -14rem;">
                <div class="aliyah-col">
                    <div class="aliyah-float" style="position: relative; height: 1820px;">
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 0px; top: 0px;">
                            <div class="aliyah-position">
                                <a href="https://media.gq.com/photos/58fa573964989314dc1bd236/master/w_1600%2Cc_limit/adidas%2520parley.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product1.jpg" width="560px" height="560px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas UltraBOOST Uncaged Blue X Parley</h3>
                                </a>
                            </div>
                        </div>
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 560px; top: 0px;">
                            <div class="aliyah-position">
                                <a href="https://laguestlist.com/wp-content/uploads/2018/06/LTD-UltraBOOST-Parleybeauty-shot.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product2.jpg" width="560px" height="700px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas UltraBOOST 4.0 LTD White/Blue X Parley</h3>
                                </a>
                            </div>
                        </div>
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 0px; top: 560px;">
                            <div class="aliyah-position">
                                <a href="https://assets.adidas.com/images/w_1880,f_auto,q_auto/bad126b4ebe04595a05bafaa00e6e08c_9366/HQ1400_04_standard.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product3.jpg" width="560px" height="560px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas UltraBOOST Light-Brown X Parley</h3>
                                </a>
                            </div>
                        </div>
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 560px; top: 700px;">
                            <div class="aliyah-position">
                                <a href="https://media1.popsugar-assets.com/files/thumbor/uzU_orlUqSiOCO5EgrZ9oiSNuLE/fit-in/2048xorig/filters:format_auto-!!-:strip_icc-!!-/2017/04/21/854/n/1922729/1979777aa3fb911b_471184.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product4.jpg" width="560px" height="560px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas Women's UltraBOOST X Parley</h3>
                                </a>
                            </div>
                        </div>
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 0px; top: 1120px;">
                            <div class="aliyah-position">
                                <a href="https://www.designboom.com/wp-content/uploads/2017/04/adidas-x-parley-ocean-plastic-ultraboost-designboom-04-24-2017-818-006-818x1196.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product5.jpg" width="560px" height="700px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas UltraBOOST Uncaged Blue X Parley</h3>
                                </a>
                            </div>
                        </div>
                        <div class="aliyah-product1 aliyah-efek" data-aos="fade-up" style="position: absolute; left: 560px; top: 1260px;">
                            <div class="aliyah-position">
                                <a href="https://static.footshop.com/208890/40099.jpg" title="Adidas UltraBOOST X Parley">
                                    <img src="product6.jpg" width="560px" height="560px">
                                    <h3 class="aliyah-positiontext aliyah-producttext">Adidas UltraBOOST Core Black X Parley</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid pt-5 pb-5" id="contact">
            <div class="container aliyah-kotakform">
                <div class="row py-4">
                    <div class="col-6">
                        <h5 class="pt-2 aliyah-warnafont">STAY INFORMED</h5>
                        <p class="mb-2">Sign up for updates and sustainability events.</p>
                    </div>
                    <div class="col-6">
                        <form name="myForm" action="#" onsubmit="return validateForm()" method="post">
                            <div class="form-group pt-3" id="emailContainer">
                                <input type="text" name="email" id="email" placeholder="Email address" onclick="showElements()" class="py-3">
                            </div>
                            <div class="form-group" id="ageCheckBox" style="display: none;">
                                <input type="checkbox" name="ageCheck" id="ageCheck"> Yes, I am over 13 years old
                            </div>
                            <button type="submit" class="btn btn-dark" id="signupButton" style="display: none;">SIGN UP →</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid pt-5 pb-5 aliyah-contactcolor" id="contact">
            <h5 class="text-center pb-2 aliyah-warnafont">CONTACT US</h5>
            <div class="aliyahsosmed">
                <a href="https://www.tiktok.com/@adidas" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M9.37,23.5a7.468,7.468,0,0,1,0-14.936.537.537,0,0,1,.538.5v3.8a.542.542,0,0,1-.5.5,2.671,2.671,0,1,0,2.645,2.669.432.432,0,0,1,0-.05V1a.5.5,0,0,1,.5-.5h3.787a.5.5,0,0,1,.5.5A4.759,4.759,0,0,0,21.59,5.76a.5.5,0,0,1,.5.5L22.1,10a.533.533,0,0,1-.519.515,9.427,9.427,0,0,1-4.741-1.268v6.789A7.476,7.476,0,0,1,9.37,23.5ZM8.908,9.585a6.466,6.466,0,1,0,6.93,6.447V8.326a.5.5,0,0,1,.791-.407A8.441,8.441,0,0,0,21.1,9.5l-.006-2.76A5.761,5.761,0,0,1,15.859,1.5H13.051V16.032a.458.458,0,0,1,0,.053,3.672,3.672,0,1,1-4.14-3.695Z"></path>
                    </svg>
                </a>
                <a href="https://instagram.com/adidas" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"></path>
                        <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                        <path d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"></path>
                    </svg>
                </a>
                <a href="https://www.youtube.com/adidas" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M12,20.55c-.3,0-7.279-.006-9.115-.5A3.375,3.375,0,0,1,.5,17.665,29.809,29.809,0,0,1,0,12,29.824,29.824,0,0,1,.5,6.334,3.375,3.375,0,0,1,2.885,3.948c1.836-.492,8.819-.5,9.115-.5s7.279.006,9.115.5A3.384,3.384,0,0,1,23.5,6.334,29.97,29.97,0,0,1,24,12a29.97,29.97,0,0,1-.5,5.666,3.384,3.384,0,0,1-2.388,2.386C19.279,20.544,12.3,20.55,12,20.55Zm0-16.1c-.072,0-7.146.006-8.857.464A2.377,2.377,0,0,0,1.464,6.593,29.566,29.566,0,0,0,1,12a29.566,29.566,0,0,0,.464,5.407,2.377,2.377,0,0,0,1.679,1.679c1.711.458,8.785.464,8.857.464s7.146-.006,8.857-.464a2.377,2.377,0,0,0,1.679-1.679A29.66,29.66,0,0,0,23,12a29.66,29.66,0,0,0-.464-5.407h0a2.377,2.377,0,0,0-1.679-1.679C19.146,4.456,12.071,4.45,12,4.45ZM9.7,15.95a.5.5,0,0,1-.5-.5V8.55a.5.5,0,0,1,.75-.433l5.975,3.45a.5.5,0,0,1,0,.866L9.95,15.883A.5.5,0,0,1,9.7,15.95Zm.5-6.534v5.168L14.675,12Z"></path>
                    </svg>
                </a>
                <a href="https://twitter.com/adidas" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M8.1,21.034A12.717,12.717,0,0,1,1.23,19.019a.5.5,0,0,1,.329-.917,8.273,8.273,0,0,0,4.992-1,4.807,4.807,0,0,1-3.173-3.13.5.5,0,0,1,.348-.636A4.821,4.821,0,0,1,1.843,9.523a.548.548,0,0,1,.247-.458.506.506,0,0,1,.5-.034l.091.049A4.816,4.816,0,0,1,2.529,4a.507.507,0,0,1,.393-.247.5.5,0,0,1,.427.183,11.781,11.781,0,0,0,7.9,4.27c-.013-.144-.02-.289-.02-.435a4.81,4.81,0,0,1,8.116-3.493,8.157,8.157,0,0,0,2.32-.93.5.5,0,0,1,.73.583,4.781,4.781,0,0,1-.662,1.32c.191-.067.378-.143.563-.225a.5.5,0,0,1,.585.135.5.5,0,0,1,.034.6,9.2,9.2,0,0,1-2.057,2.2c0,.1,0,.208,0,.313A12.636,12.636,0,0,1,8.1,21.034ZM3.527,19.105a11.72,11.72,0,0,0,4.577.929A11.645,11.645,0,0,0,19.863,8.275c0-.179,0-.357-.012-.533a.5.5,0,0,1,.207-.43,8.181,8.181,0,0,0,.959-.81,9.068,9.068,0,0,1-.932.16.5.5,0,0,1-.316-.925,3.857,3.857,0,0,0,.977-.837,9.013,9.013,0,0,1-1.465.418.5.5,0,0,1-.461-.148,3.812,3.812,0,0,0-6.491,3.473.5.5,0,0,1-.1.434.489.489,0,0,1-.409.179A12.772,12.772,0,0,1,3.09,5.167,3.812,3.812,0,0,0,4.573,9.591a.5.5,0,0,1,.2.569.523.523,0,0,1-.491.347,4.772,4.772,0,0,1-1.36-.242A3.813,3.813,0,0,0,5.9,13.257a.5.5,0,0,1,.033.972,6.63,6.63,0,0,1-1.279.17,3.809,3.809,0,0,0,3.236,1.914.5.5,0,0,1,.3.894A9.081,9.081,0,0,1,3.527,19.105Z"></path>
                    </svg>
                </a>
                <a href="https://www.pinterest.com/adidas/" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M7.615,23a.522.522,0,0,1-.11-.012.5.5,0,0,1-.386-.429l-.166-1.4A12.6,12.6,0,0,1,7,17.381c.205-.882,1.223-5.2,1.432-6.091a5.332,5.332,0,0,1-.348-1.907c0-1.992,1.219-3.552,2.776-3.552A2.07,2.07,0,0,1,12.956,8.1a10.218,10.218,0,0,1-.6,2.723c-.161.523-.328,1.06-.454,1.584a1.3,1.3,0,0,0,.225,1.133,1.441,1.441,0,0,0,1.15.525c2,0,3.452-2.209,3.452-5.252A4.482,4.482,0,0,0,11.969,4.2,4.957,4.957,0,0,0,6.79,9.155a4.7,4.7,0,0,0,.457,1.963.873.873,0,0,1,.063.584l-.428,1.816a.79.79,0,0,1-.515.571.813.813,0,0,1-.776-.139A6.575,6.575,0,0,1,3.472,9.1c0-3.9,2.756-8.1,8.807-8.1,4.7,0,8.249,3.337,8.249,7.762,0,4.743-3.017,8.321-7.018,8.321a4.281,4.281,0,0,1-2.635-.9l-.543,2.069a14.305,14.305,0,0,1-1.62,3.435l-.673,1.079A.5.5,0,0,1,7.615,23ZM10.862,6.831c-.995,0-1.776,1.121-1.776,2.552a4.149,4.149,0,0,0,.322,1.642.514.514,0,0,1,.037.334s-1.24,5.264-1.468,6.246a11.938,11.938,0,0,0-.034,3.422A12.932,12.932,0,0,0,9.364,18l.787-2.993a.5.5,0,0,1,.43-.37.51.51,0,0,1,.5.269,2.849,2.849,0,0,0,2.43,1.177c3.431,0,6.018-3.148,6.018-7.321C19.528,4.907,16.412,2,12.279,2,6.916,2,4.472,5.682,4.472,9.1a5.769,5.769,0,0,0,1.514,3.859l.351-1.492A5.224,5.224,0,0,1,5.79,9.155,5.937,5.937,0,0,1,11.969,3.2a5.438,5.438,0,0,1,5.755,5.61c0,3.623-1.872,6.252-4.452,6.252a2.44,2.44,0,0,1-1.936-.9,2.283,2.283,0,0,1-.412-1.987c.132-.545.3-1.1.472-1.646a9.754,9.754,0,0,0,.56-2.427A1.11,1.11,0,0,0,10.862,6.831Z"></path>
                    </svg>
                </a>
                <a href="https://www.snapchat.com/add/adidas_global" target="_blank" class="aliyahrangesosmed">
                    <svg viewBox="0 0 24 24" width="30" height="30">
                        <path d="M12,22.5a6.309,6.309,0,0,1-3.574-1.315,2.457,2.457,0,0,0-2.3-.53,1.679,1.679,0,0,1-1.294-.018,1.522,1.522,0,0,1-.615-1.051c-.031-.125-.059-.159-.621-.284a7.775,7.775,0,0,1-.9-.245,1.512,1.512,0,0,1-1.19-1.5.968.968,0,0,1,.729-.907A5.19,5.19,0,0,0,5.885,12.8a11.574,11.574,0,0,1-1.808-1.067A1.816,1.816,0,0,1,6.138,8.741C6.11,8.357,6.09,7.9,6.091,7.375a5.909,5.909,0,0,1,11.818,0c0,.522-.018.982-.047,1.366a1.816,1.816,0,0,1,2.062,2.987A11.542,11.542,0,0,1,18.115,12.8a5.19,5.19,0,0,0,3.652,3.856.991.991,0,0,1,.732.939,1.524,1.524,0,0,1-1.193,1.466,7.775,7.775,0,0,1-.9.245c-.562.125-.59.159-.621.285a1.522,1.522,0,0,1-.615,1.05,1.679,1.679,0,0,1-1.294.018,2.458,2.458,0,0,0-2.3.529A6.3,6.3,0,0,1,12,22.5ZM6.789,19.552a3.914,3.914,0,0,1,2.19.8A5.367,5.367,0,0,0,12,21.5a5.367,5.367,0,0,0,3.021-1.149,3.464,3.464,0,0,1,3.132-.656c.405.118.515.075.516.075a1.477,1.477,0,0,0,.141-.423c.187-.757.791-.891,1.375-1.021a7.09,7.09,0,0,0,.793-.213c.508-.177.522-.438.522-.467l0-.021a6.226,6.226,0,0,1-4.393-4.748.822.822,0,0,1,.464-.93,10.283,10.283,0,0,0,1.756-1.02.817.817,0,0,0,.319-.537.807.807,0,0,0-.155-.6.817.817,0,0,0-1.141-.166,8.194,8.194,0,0,1-.852.536.5.5,0,0,1-.737-.512,15.116,15.116,0,0,0,.15-2.267,4.909,4.909,0,0,0-9.818,0,15.246,15.246,0,0,0,.15,2.267.5.5,0,0,1-.737.512,8.247,8.247,0,0,1-.851-.535.816.816,0,0,0-1.142.165.813.813,0,0,0,.165,1.141,10.206,10.206,0,0,0,1.755,1.02.823.823,0,0,1,.464.931,6.208,6.208,0,0,1-4.4,4.74c.008.057.022.318.53.5a7.09,7.09,0,0,0,.793.213c.584.13,1.188.264,1.375,1.021a1.329,1.329,0,0,0,.147.427h0a1.12,1.12,0,0,0,.51-.079A3.335,3.335,0,0,1,6.789,19.552Z"></path>
                    </svg>
                </a>
            </div>
        </section>
        <section class="container-fluid text-center aliyah-collabcolor pt-5 pb-5">
            <div class="container text-center pt-5">
                <h2 class="aliyah-judul">Catatan Materi & Tugas PWEB</h2>
                <hr class="aliyah-line mb-4">
            </div>
            <div class="container-fluid pb-5 mb-5">
            <div class="btn-group" style="font-family: sans-serif">
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Materi HTML
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="dropdown-item" href="hello" target="_blank" style="color: black">Pengenalan HTML</a></li>
                      <li><a class="dropdown-item" href="link" target="_blank" style="color: black">HTML</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Materi CSS
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="dropdown-item" href="style" target="_blank" style="color: black">My Style</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Materi Bootstrap4
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="dropdown-item" href="responsive1" target="_blank" style="color: black">Bootstrap4 1</a></li>
                      <li><a class="dropdown-item" href="responsive2" target="_blank" style="color: black">Bootstrap4 2</a></li>
                    </ul>
                </div>
                <div class="btn-group">
                  <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Materi Javascript
                    <span class="caret"></span>
                </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a class="dropdown-item" href="js1" target="_blank" style="color: black">Javascript 1</a></li>
                    <li><a class="dropdown-item" href="js2" target="_blank" style="color: black">Javascript 2</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown">Tugas
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="dropdown-item" href="tugas-replika-linktree" target="_blank" style="color: black">Replika Linktree</a></li>
                      <li><a class="dropdown-item" href="bs4-navbar" target="_blank" style="color: black">Bootstrap4 Navbar</a></li>
                      <li><a class="dropdown-item" href="layout" target="_blank" style="color: black">Pembuatan Layout</a></li>
                    </ul>
                </div>
                </div>
            </div>
        </section>
    </body>
</html>
