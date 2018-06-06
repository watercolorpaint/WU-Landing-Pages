<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Special Offer | Watercolor University</title>

        <!-- CSS -->
        <link href='//fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/ultimate-flat-social-icons/ultm-css/ultm.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/buttons.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

        <!-- Javascript -->
        <script data-cfasync="false" type="text/javascript" src="https://code.tinypass.com/tinypass.js"></script>
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!--[if lt IE 10]>
        <script src="assets/js/placeholder.js"></script>
        <![endif]-->

        <!-- Tinypass -->
        <script type="text/javascript">
            window._tpm = window._tpm || [];
            window._tpm['paywallID'] = '25875543';
            window._tpm['trackPageview'] = true;
            window._tpm['onCheckoutSuccess'] = function(){_kmq.push(['record', 'Purchased']);};
        </script>
        <!-- End Tinypass -->

        <!-- Optimizely -->
        <script src="https://cdn.optimizely.com/js/5999751563.js"></script>

    </head>

    <body>

        <!-- Loader
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
        -->

        <!-- Tinypass button generation -->
        <?php
            /* Include TinyPass - make sure to use the correct path */
            include_once($_SERVER['DOCUMENT_ROOT'] . "/watercolor-painting-tutorials/tp/TinyPass.php");

            // configure Tinypass
            TinyPass::$SANDBOX = false;
            TinyPass::$AID = "3dCZMeAXgw";
            TinyPass::$PRIVATE_KEY = "cJEQYMDfs1wBgy73TvsXj5y31mlknx289ewMKual";

            $rid = "PW_25875543";
            $store = new TPAccessTokenStore();
            $store->loadTokensFromCookie($_COOKIE);
            $token = $store->getAccessToken($rid);

            if($token->isAccessGranted()) {
                //Access granted! Display requested resource to the user
                echo '<div style="text-align:center;line-height:500px;">You have access! Unlock all videos by visiting: <a href="//watercolorpainting.com/watercolor-painting-tutorials/class-list/" target="_blank">https://watercolorpainting.com/watercolor-painting-tutorials/class-list/</a></div>';

            } else {
                //Access denied! Proceed with the next steps and display a Tinypass button...
                $resource = new TPResource($rid, "Watercolor Video Classes", "https://watercolorpainting.com/watercolor-painting-tutorials/class-list/");
                //$po1 = new TPPriceOption("6.99", "7 days");
                $po2 = new TPPriceOption("[1 | 1 week | 1] [34.99 | monthly | *]");
                //$po3 = new TPPriceOption("99.99", "30 days");
                //$offer1 = new TPOffer($resource, $po1);
                $offer2 = new TPOffer($resource, $po2);
                //$offer3 = new TPOffer($resource, $po3);

                //Create a request and generate an HTML button for option 1
                //$request1 = new TPPurchaseRequest($offer1);
                //$buttonHTML1 = $request1->generateTag();
                //echo $buttonHTML1;

                //Create a request and generate an HTML button for option 2
                $request2 = new TPPurchaseRequest($offer2);
                $buttonHTML2 = $request2->generateTag();
                echo $buttonHTML2;

                //Create a request and generate an HTML button for option 3
                //$request3 = new TPPurchaseRequest($offer3);
                //$buttonHTML3 = $request3->generateTag();
                //echo $buttonHTML3;
            }
        ?>

        <!-- Bind pretty buttons to default Tinypass buttons -->
        <script type="text/javascript">
            $(function(){
                $("#buy-button").click(function(){
                    $("#tp_button_PW_25875543").click();
                });
            });
        </script>
		<!-- Top menu -->
		<nav>
			<a class="scroll-link" href="#top-content">Top</a>
			<a class="scroll-link" href="#features">Features</a>
			<a class="scroll-link" href="#faq">FAQs</a>
			<a class="scroll-link" href="#testimonials">Testimonials</a>
			<a class="scroll-link" href="#about-us">About</a>
			<div class="hide-menu">
				<a href=""><i class="fa fa-bars"></i></a>
			</div>
		</nav>
		<div class="show-menu">
			<a href=""><i class="fa fa-bars"></i></a>
		</div>

        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                    	<div class="col-sm-6 video wow fadeInLeft">
                    		<div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube-nocookie.com/embed/GobA2qiNoYM?autoplay=1&amp;rel=0&amp;showinfo=0&amp;wmode=opaque" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen=""></iframe>
                        	</div>
                            <p style="font-size: 16px;"><strong>How to use "wet-in-dry" technique for silhouettes</strong></p>
                        </div>
                        <div class="col-sm-6 text wow fadeInUp">
                        	<div class="logo">
                        		<h1>Sale Activated…</h1>
                        	</div>
                            <h2 class="hero">Here's your special offer to access all 62 video classes instantly for $1! Save $98.99</h2>
                            <div class="top-button">
                                <a id="buy-button" class="button-1" href="javascript:void(0);" onclick="$mcGoal.processEvent('Started WU Membership Purchase');">Pay $1 - Unlock 62 Classes</a>
                            </div>
                            <span style="font-size: 16px;"><strong>Videos worth $99.99! Sign-up form should pop up on click<br />For 24/7 customer service, call (888) 881-2542</strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features -->
        <div class="features-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features section-description wow fadeIn">
	                    <h2>Are we nuts? "Pay $1 for $99.99 worth of watercolor classes?"</h2>
	                    <p>Yes, we're taking a big risk by slashing $98.99 off our regular price…that's why we're only emailing it to select people like you! Remember, your purchase is protected by our 100% Satisfaction Guarantee: love it or your money back, no questions asked! You may ask, "What's the catch?" No catch. No hidden fees. We bet you'll love our online classes so much you'll stay a member after 7 days and let your membership auto-renew for $34.99 per month (that's still 65% off the regular price of $99.99 per month, every month!). Here's what you get when you spend $1 to unlock 62 video classes for 7 days, all taught by our award-winning watercolorists…</p>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<i class="fa fa-eye"></i>
	                	</div>
	                    <h3>45+ Hours Of Video</h3>
	                    <p>All videos on the Watercolor University website unlock so you can play, pause and paint along. Reference photos, initial sketches and list of materials included for relevant classes.</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInDown">
	                	<div class="features-box-icon">
	                		<i class="fa fa-pencil"></i>
	                	</div>
	                    <h3>No Fine Print</h3>
	                    <p>Our Easy-Refund Policy and 100% Satisfaction Guarantee means you love it, or your money back. No questions asked. We mean it!</p>
                    </div>
                    <div class="col-sm-4 features-box wow fadeInUp">
	                	<div class="features-box-icon">
	                		<i class="fa fa-cloud"></i>
	                	</div>
	                    <h3>Multi-Device Viewing</h3>
	                    <p>Log in and view hi-quality video from multiple smartphones, tablets &amp; computers thanks to cloud technology.</p>
                    </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature section-description wow fadeIn">
	                    <h2>We're Watercolor University: a dead-simple website packed with 45+ hours of video classes</h2>
	                    <p>Just 1 click to browse a list of all video classes or browse by these categories: beginner classes, technique classes &amp; step-by-step classes.</p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 single-feature-box wow fadeInLeft">
	                    <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/110844826" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <em>Preview a watercolor technique class.</em>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-gear"></i></div>
	                    	<h3>No fancy technology needed</h3>
	                    	<div class="single-feature-box-text-description">
	                    		If you've viewed videos on the Internet before, then our videos will work on your device.
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-fire"></i></div>
	                    	<h3>Help is always a moment away</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Call our 24/7 customer service at (888) 881-2542 or click the blue livechat tab on bottom of the screen to ask a human or leave a message outside of business hours.
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container">
	        <div class="container">
                <div class="row">
                    <div class="col-sm-12 features section-table wow fadeIn" style="margin-top:60px;margin-bottom:30px;">
                        <h2 style="color:#333; margin-bottom:40px;">Why pick our classes over alternatives?</h2>
                        <!-- start CompareNinja table -->
                        <div id="compareNinjaTable_101762"><div id="tableWrapper" style="width: 100%;"><table id="vsTable_101762"><tbody class=""><tr class=""><td class="cat title" style="width: 20%;"></td><td class="title" style="width: 20%;"><div class="">Our Online Classes</div></td><td class="title" style="width: 20%;"><div class="">Books</div></td><td class="title" style="width: 20%;"><div class="">DVDs</div></td><td class="title" style="width: 20%;"><div class="">Local Classes</div></td></tr><tr class="second"><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Convenience</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">62 push-button classes on your smartphone, tablet, computer</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Lug stacks of bulky books around</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Chained to where your TV is</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Strict schedule. Strict location</span></p></div></td></tr><tr><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Purchase Protection</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">Money back if you aren't 100% satisfied. Just email "refund" to us</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Maybe there's a return policy. Then there's the hassle of returning</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Good luck getting a refund after breaking the seal</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">No guarantees even if you argue for a refund</span></p></div></td></tr><tr class="second"><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Ease Of Use</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">As easy as signing in to your email</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">As rigid as following a recipe book</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Wrangle with your remote control to pause, forward &amp; rewind</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">The class won't wait for you</span></p></div></td></tr><tr><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Learning Style</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">Video, text &amp; pictures. You control the pace</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Only text &amp; pictures. You control the pace</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Only video. You control the pace</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Fight for the teacher's attention or get left behind</span></p></div></td></tr><tr class="second"><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Teacher Quality</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">All teachers are award-winning painters</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Depends</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Depends</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">Probably someone who did art school</span></p></div></td></tr><tr><td class="cat" style="width: 20%;"><div class="" style="font-size:16px;">Price</div></td><td style="width: 20%; background-color: rgb(175, 222, 177);" class="text"><div><p><span style="font-size: 16px; color: #000000;">$1 today</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">$20-$50 per book</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">$30-$60 per DVD</span></p></div></td><td style="width: 20%;" class="text"><div><p><span style="font-size: 16px;">$150-$500 per series of classes</span></p></div></td></tr></tbody></table></div></div>
                        <script type="text/javascript">
                            (function() {
                                var cn = document.createElement('script'); cn.type = 'text/javascript';
                                cn.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'www.compareninja.com/API/style/101762?cnurl=' + window.location.href;
                                var s = document.getElementsByTagName('head')[0].appendChild(cn);
                            })();
                        </script>
                        <!-- end CompareNinja table -->
                    </div>
                </div>
	            <div class="row">
	                <div class="col-sm-6 single-feature-box single-feature-box-left wow fadeInLeft">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-eye"></i></div>
	                    	<h3>Everything to get started</h3>
	                    	<div class="single-feature-box-text-description">
	                    		From basic techniques such as mixing paint and picking paper to complete landscape paintings from start to finish. Plenty to learn!
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-pencil"></i></div>
	                    	<h3>Extras included</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Relevant classes include a list of supplies, reference photos, initial sketches, an image of the finished painting.
	                    	</div>
	                    </div>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="embed-responsive embed-responsive-4by3">
                                    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/110947348" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                                </div>
                                <em>Preview this step-by-step class.</em>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Single feature -->
        <div class="single-feature-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 single-feature section-description wow fadeIn">
	                    <h2>Learn from award-winning artists who are also great teachers</h2>
	                    <p>
	                    	We handpick the artists who will teach you.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 single-feature-box wow fadeInLeft">
	                    <img src="assets/img/3limes.png" alt="3 Limes, Watercolor by Greg Conley"><br />
                                <em>Painted by one of our artists. Follow along and paint this too!</em>
	                </div>
	                <div class="col-sm-6 single-feature-box wow fadeInUp">
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-check"></i></div>
	                    	<h3>Accomplished painters</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Our teachers have won numerous watercolor awards at the regional and national level.
	                    	</div>
	                    </div>
	                    <div class="single-feature-box-text">
	                    	<div class="single-feature-box-text-icon"><i class="fa fa-check"></i></div>
	                    	<h3>Experienced teachers</h3>
	                    	<div class="single-feature-box-text-description">
	                    		Award-winning artists usually charge hundreds of dollars per student to teach a live workshop. You're getting a bargain by learning online.
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- FAQ -->
        <div class="faq-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 faq section-description wow fadeIn">
	                    <h2>Common questions</h2>
	                    <p>
	                    	Click each question or click the blue livechat tab on bottom of the screen to ask a human.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-6 faq-box wow fadeInLeft">
	                    <div class="single-faq">
	                    	<h3>What are your 3 Guarantees for every customer?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                 <ol>
                                                <li>Our Easy-Refund Guarantee makes us work harder to please customers. If you’re not satisfied for whatever reason, we’ll refund your money hassle-free. We know some bad guys will take advantage of our policy to get free lessons. Thankfully, our happy customers more than compensate for freeloaders.</li>
                                                <li>We’re always working on bringing you new videos. Videos take time, especially watercolor videos. Even the best artists don’t paint everything perfectly the first time (especially on camera), which means we need to shoot again and again. We’ve been adding 2-4 new video classes each month on average.</li>
                                                <li>Our customer care team always responds promptly and politely. We hate being mistreated by so-called “customer service” just as much as you do.</li>
		                  </ol>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>How does payment work and what happens when I sign up?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                  <p>We accept nearly every payment option: VISA, Mastercard, American Express, Discover, PayPal, Amazon Payments, Bitcoin and Dwolla. After signing up, you can immediately begin watching every Watercolor University video class for 7 days, no restrictions. After 7 days, your membership will auto-renew at $34.99 per month (which is 65% off our regular $99.99 per month price) and you will be charged. Self-cancel anytime by logging in or contacting us at webmaster@watercolorpainting.com.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>How secure is my credit card information?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                  <p>All payments are handled by Tinypass, which powers transactions for big-name brands like Esquire and Cosmopolitan. We figure if Tinypass is good enough for them, it’s good enough for us. We actually never see your payment information, so we can’t leak it even if we were forced to.</p>
                                            <p>To further protect yourself online, we recommend signing up for automatic alerts from your credit card and payment providers. You’ll catch mysterious transactions quicker, which means you can challenge them quicker with your credit card and payment providers. Providers usually refund mystery charges when you challenge them.</p>
	                    	</div>
	                    </div>
                                <div class="single-faq">
                                    <h3>What colors, brushes and other watercolor supplies do I need?</h3>
                                    <span><i class="fa fa-plus"></i></span>
                                    <div class="single-faq-text">
                                        <p>The vast majority of classes require only watercolor paper, paints and brushes. Every class mentions any additional supplies you may need to follow along. Looking for a list of supplies to buy? <a href="http://watercolorpainting.com/beginners_guide_to_watercolor.htm" target="_blank">Check out this free guide</a> for all your basic watercolor painting supplies.</p>
                                    </div>
                                </div>
                                <div class="single-faq">
                                    <h3>What happens when my membership expires?</h3>
                                    <span><i class="fa fa-plus"></i></span>
                                    <div class="single-faq-text">
                                        <p>Videos will lock up so you can no longer watch them. To regain unlimited views, you can buy again; either another 1-time payment or a month-to-month/6-month subscription. Your choice.</p>
                                    </div>
                                </div>
	                </div>
	                <div class="col-sm-6 faq-box wow fadeInUp">
	                    <div class="single-faq">
	                    	<h3>What is your 100% Satisfaction Guarantee &amp; Easy-Refund Policy?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>Email webmaster@watercolorpainting.com within 30 days of the purchase date if you're not satisfied. Include the original receipt. That’s it! There’s no catch. We will refund your last payment in full and we won’t prorate your last payment, even if you’ve used up a good chunk of your membership before requesting a refund. If you want your money back because you aren’t satisfied, you can have your money back. We want to be generous with our Easy-Refund policy because we stay in business thanks to happy customers.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>What kind of technology do I need to enjoy these videos?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>If you can watch videos on your device, you can watch all the videos on Watercolor University. We use HTML5 video players, which means we support nearly every Internet-connected device on the planet, including Apple’s iOS devices and Android devices. Flash is optional and not required.</p>
	                    	</div>
	                    </div>
	                    <div class="single-faq">
	                    	<h3>Who are the instructors?</h3>
	                    	<span><i class="fa fa-plus"></i></span>
	                    	<div class="single-faq-text">
		                    	<p>All instructors are hand-picked. They’re accomplished, award-winning watercolor artists and experienced teachers. Biographies are displayed inside each class.</p>
	                    	</div>
	                    </div>
                                    <div class="single-faq">
                                        <h3>Can I watch video classes on another computer/device?</h3>
                                        <span><i class="fa fa-plus"></i></span>
                                        <div class="single-faq-text">
                                            <p>Yes! If you keep an active membership, you can always sign in when you’re prompted to pay. The sign-in link is at the bottom of the paywall pop-up.</p>
                                        </div>
                                    </div>
                                    <div class="single-faq">
                                        <h3>Will this work for me if I live outside the US?</h3>
                                        <span><i class="fa fa-plus"></i></span>
                                        <div class="single-faq-text">
                                            <p>Non-American currencies are accepted with exchange rates that are competitive with banks and currency exchanges. All videos should work unless your country blocks popular video sites.</p>
                                        </div>
                                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- divider -->
        <div class="divider-1">~</div>

        <!-- Screenshots -->
        <div class="screenshots-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 screenshots section-description wow fadeIn">
	                    <h2>Some examples of what you'll paint</h2>
	                    <p>
	                    	Follow along and paint these scenes from start to finish. Many more scenes available. We only had room to show 9 out of 62 here.
	                    </p>
	                </div>
	            </div>
	   <div class="row">
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/1.jpg" alt="Still Life Flowers" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInDown">
                        <img src="assets/img/screenshots/2.jpg" alt="Plein Air" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/3.jpg" alt="Close-Ups" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/4.jpg" alt="Sunset" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInDown">
                        <img src="assets/img/screenshots/5.jpg" alt="Portrait" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/6.jpg" alt="Landscape" >
                    </div>
                </div>
                 <div class="row">
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/7.jpg" alt="Animals" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInDown">
                        <img src="assets/img/screenshots/8.jpg" alt="Seascapes" >
                    </div>
                    <div class="col-sm-4 screenshot-box wow fadeInUp">
                        <img src="assets/img/screenshots/9.jpg" alt="Flowers" >
                    </div>
                </div>
	        </div>
        </div>

        <!-- divider -->
        <div class="divider-1">~</div>

        <!-- Testimonials -->
        <div class="testimonials-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h2>Real testimonials from real students</h2>
	                    <div class="testimonial-active"></div>
	                    <div class="testimonial-quote">&ldquo; &rdquo;</div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		I'm currently taking a local class and have learned nothing compared to the video tutorials I've watched on your site. THANK YOU for taking the time to video and share! Love it!
	                    		<br>
	                    		<span class="student">Maria, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		I can't tell you how happy I am that I decided to try your instructional videos. You are an exceptional teacher.  have never seen any tutorial in any medium that describes the painting process the way you do. You leave nothing out. You explain what artists, and beginning artists, need to hear.
	                    		<br>
	                    		<span class="student">Isabelle, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Wow, I want to say how perfectly amazing the instructor here is first off. Second, from this one video I have watched, she could teach ANYONE! If I feel confident enough to paint a still life bunch of flowers just from watching her do so in this lesson, anyone could. Point is, she's incredible at TEACHING.
	                    		<br>
	                    		<span class="student">Jeanine, Watercolor University student</span>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
	                    	</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Call to action -->
        <div class="call-to-action-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeIn">
	                    <h2>Why wait? Get started now</h2>
	                    <p>
	                    	No risk because you're protected by our 100% Satisfaction Guarantee: love it or your money back, no questions asked! Cancel anytime. Easy-Refund Policy.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 call-to-action-button wow fadeInUp">
	                    <a class="scroll-link button-1" href="#top-content">Click To View The Sign-Up Button</a>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- About us -->
        <div class="about-us-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <p>
	                    	Since 1999, WatercolorPainting.com has become the go-to site for watercolor tutorials, attracting millions from all over. Watercolor University by WatercolorPainting.com introduces video classes for the first time. Each video is painstakingly created over 2-4 weeks. Imagine painting live on camera. One mistake and you'll have to start over. Even our award-winning artists aren't immune to pressure, which means one video may be shot over and over again to get everything right. All the time, energy and skill put into all these videos are now available for the price of gas traveling to and from a local class. New videos are constantly being developed, so students will enjoy new classes as they're completed. Think of Watercolor University as a never-ending watercolor workshop in the comfort of your own home. Students include busy professionals, retirees, parents, youth, art teachers and artists.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	            <div class="row">
                            <div class="col-sm-7 footer-copyright">
                            	&copy; Copyright 1999-2017. WatercolorPainting.com
                            </div>
	            </div>
	        </div>
        </footer>
        <!-- Tinypass loads after DOM loads -->
        <script type="text/javascript">
        function downloadJSAtOnload() {
        var element = document.createElement("script");
        element.src = "https://code.tinypass.com/tpl/d1/tpm.js";
        document.body.appendChild(element);
        }
        if (window.addEventListener)
        window.addEventListener("load", downloadJSAtOnload, false);
        else if (window.attachEvent)
        window.attachEvent("onload", downloadJSAtOnload);
        else window.onload = downloadJSAtOnload;
        </script>
        <!-- /Tinypass -->
        <!-- Google Tag Manager -->
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TBZKNS"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TBZKNS');</script>
        <!-- End Google Tag Manager -->
        <!-- begin olark code -->
        <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
        f[z]=function(){
        (a.s=a.s||[]).push(arguments)};var a=f[z]._={
        },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
        f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
        0:+new Date};a.P=function(u){
        a.p[u]=new Date-a.p[0]};function s(){
        a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
        hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
        return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
        b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
        b.contentWindow[g].open()}catch(w){
        c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
        var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
        b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
        loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('6321-445-10-3331');/*]]>*/</script><noscript><a href="https://www.olark.com/site/6321-445-10-3331/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
        <!-- end olark code -->
    </body>

</html>

