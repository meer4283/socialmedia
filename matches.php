<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.verodate.com/verodate/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:34 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Dating Site - Dating Social Network Website</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/image-dropdown/dd.css" rel="stylesheet">
        <link href="vendors/image-dropdown/flags.css" rel="stylesheet">
        <link href="vendors/image-dropdown/skin2.css" rel="stylesheet">
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
       <div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4>User Login</h4>
           <form>
               <input type="text" placeholder="Username">
               <input type="password" placeholder="Password">
               <div class="login_btn_area">
                   <button type="submit" value="LogIn" class="btn form-control login_btn">LogIn</button>
                   <div class="login_social">
                       <h5>Login With</h5>
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </form>
           <img class="mfp-close" src="img/close-btn.png" alt="">
        </div>
       
        <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="img/Registration_man.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="registration_form_s">
                        <h4>Registration</h4>
                        <form>
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_user" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Male</a></li>
                                        <li><a href="#">Female</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="datepicker">
                                    <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                    <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                </div>
                            </div>
                            <div class="reg_chose form-group">
                                <div class="reg_check_box">
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">I`m Not Robot</label>
                                    <div class="check"><div class="inside"></div></div>
                                </div>
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
       
        <!--================Frist Main hader Area =================-->
        <?php require_once('layout/header.php'); ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Matches"><img class="left_img" src="img/banner/t-left-img.png" alt="">Matches<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.html">Home</a>
                    <a href="matches.html">Matches</a>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Advanced Search Area =================-->
        <section class="advanced_search_area">
            <div class="container">
                <div class="welcome_white_title">
                    <h3>Search People Here</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="search_option">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Looks</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Background</a></li>
                        <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Availability</a></li>
                        <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Personality</a></li>
                        <li role="presentation"><a href="#vices" aria-controls="vices" role="tab" data-toggle="tab">Vices</a></li>
                        <li role="presentation"><a href="#ques" aria-controls="ques" role="tab" data-toggle="tab">Questions</a></li>
                        <li role="presentation"><a href="#more" aria-controls="more" role="tab" data-toggle="tab">More</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="average"></div>
                                    <label for="amount">Average</label>
                                </div>
                                <div class="item_average">
                                    <div class="average"></div>
                                    <label for="amount">Above Avg</label>
                                </div>
                                <div class="item_average">
                                    <div class="average"></div>
                                    <label for="amount">Hot</label>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="messages">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="settings">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="vices">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="ques">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="more">
                            <div class="height_item">
                                <h4>Height</h4>
                                <select class="selectpicker">
                                    <option>158 Cm</option>
                                    <option>168 Cm</option>
                                    <option>175 Cm</option>
                                </select>
                                <select class="selectpicker">
                                    <option>192 Cm</option>
                                    <option>198 Cm</option>
                                    <option>200 Cm</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h4>Body Type</h4>
                                <select class="selectpicker">
                                    <option>Full Figured</option>
                                    <option>Half Figured</option>
                                    <option>Full Figured</option>
                                </select>
                            </div>
                            <div class="height_item">
                                <h5>Attractiveness</h5>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Average</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Above Avg</h6>
                                </div>
                                <div class="item_average">
                                    <div class="border"><span></span></div>
                                    <h6>Hot</h6>
                                </div>
                            </div>
                            <div class="search_btn">
                                <a href="#" class="register_angkar_btn">Search</a>
                                <a href="#" class="white_angkar_btn">Reset</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Advanced Search Area =================-->
        
        <!--================End Advanced Search Area =================-->
        <section class="active_members">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-1.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/photo/people-p/people-drop-3.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-2.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/photo/people-p/people-drop-4.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-3.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/photo/people-p/people-drop-5.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-4.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/photo/people-p/people-drop-6.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-5.png" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>Lara Davis</h4>
                                                <h4>53% Match</h4>
                                            </div>
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="img/photo/people-p/people-drop-2.png" alt="">
                                                </div>
                                                <div class="media-body">
                                                    <h6>29 years old <br> From Derby <br> Single</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img class="img-circle" src="img/members/active-mem/active-mem-6.png" alt=""></a>
                                </li>
                            </ul>
                            <h4>Maria Doe</h4>
                            <h5>22 years old</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Advanced Search Area =================-->
        
        <!--================Footer Area =================-->
        <?php require_once('layout/footer.php'); ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/counter-up/waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from html.verodate.com/verodate/matches.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:38 GMT -->
</html>