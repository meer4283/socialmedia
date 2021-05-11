
<style>

@media only screen and (max-width: 479px) {
			.user-tabs .nav-tabs .nav-item {
				-ms-flex: 0 0 100%;
				flex: 0 0 32%;
			}

			.pro-content {

				display: inline;

				/* margin-left: 5px; */
			}

			element.style {}

			.doc-img {
				position: relative;
				overflow: hidden;
				z-index: 1;
				border-radius: 4px;
				display: inline-block;
				width: 27%;
				padding: 7px;
				float: left;
			}

			.hide_mobile {
				display: none;

			}

			#loader {
				/* position: fixed; */

				/* z-index: 999; */
				width: 100%;
				height: 100%;
				background-color: rgba(255, 255, 255, 0.5);

			}

			#loader img {
				/* position: fixed;
				top: 30%;
				right: 45%; */
				width: 60px;


			}


		}

		@media (min-width: 1200px) {

			.hide_desk {
				display: none;
			}

			#loader {
				position: fixed;

				z-index: 999;
				width: 100%;
				height: 100%;
				background-color: rgba(255, 255, 255, 0.5);

			}

			#loader img {
				position: fixed;
				top: 30%;
				right: 45%;


			}
		}
	


    .up_modal{
        z-index: 99999 !important;
    }



</style>


<center>
        <div style="display: none;" id="loader" class="pri3 up_modal"><img src="assets/loading.svg" alt=""></div>
    </center>

<header class="header_menu_area">
            <nav class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <!-- <img src="img/logo.png" alt=""> -->
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!-- <li class="dropdown submenu active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="single-blog-fullwidth.html">Blog Single Fullwidth</a></li>
                                <li><a href="single-blog-left-sidebar.html">Blog Single left sidebar</a></li>
                                <li><a href="single-blog-right-sidebar.html">Blog Single right sidebar</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
                            <ul class="dropdown-menu">
                                <li><a href="community.html">Community</a></li>
                                <li><a href="members.html">Members</a></li>
                                <li><a href="members-detail.html">Members Details</a></li>
                                <li><a href="discussions.html">Discussions</a></li>
                                <li><a href="forums.html">Forums</a></li>
                                <li><a href="groups.html">Groups</a></li>
                                <li><a href="matches.html">Matches</a></li>
                                <li><a href="quick.html">Quick</a></li>
                                <li><a href="search.html">Search</a></li>
                            </ul>
                        </li> -->
                        <!-- <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left.html">Shop Left</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="stories.html">Stories</a></li>
                                <li><a href="why-us.html">Why us</a></li>
                                <li><a href="404.html">Error</a></li>
                            </ul>
                        </li> -->
                        <li><a href="index.php">Home</a></li>
                        <li><a href="members.php">Members</a></li>
                       
                        <li><a href="contact.php">Contact us</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                
   <?php
   if (session_id() == '') {

    session_start();
	if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])  ){
        echo '<li><a class="popup-with-zoom-anim" href="#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
        <li><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>Registration</a></li>';
	}
              
    else{
        echo '<li><a href="chat.php">Chat Now</a></li>
        <li><a href="my-profile.php">My Profile</a></li>';
    } 

        }


        else{

            if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])  ){
                echo '<li><a class="popup-with-zoom-anim" href="#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
                <li><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>Registration</a></li>';
            }
                      
            else{
                echo '<li><a href="chat.php">Chat Now</a></li>
                <li><a href="my-profile.php">My Profile</a></li>';
            } 

        }
       
     
   
   
   ?>
                        
                        
                        <li class="flag_drop">
                            <!-- <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div> -->
                        </li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>