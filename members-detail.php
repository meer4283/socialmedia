<?php 
	session_start();

    
    if(!isset($_GET['mid'])){
        header("Location: index.php");
    }
    else{
        $user_id  = $_GET['mid'];
    }
 if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])  ){
		
	}
    else{
        $my_user_id =  $_SESSION['user_id'];
    } 


?>



<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from html.verodate.com/verodate/members-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:26 GMT -->
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

          <!-- Angular js -->
          <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js" type="text/javascript"></script>
        
	
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





    </head>
    <body ng-app="myApp" ng-controller="myController" ng-init="getMyProfile('<?php echo $user_id; ?>')" >
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
<style>
.banner_area.profile_banner {
    background: url(uploads/{{banner_image}}) no-repeat scroll center center;

}

</style>


        <section class="banner_area profile_banner">
            <div class="profiles_inners">
                <div class="container">
                    <div class="profile_content">
                        <div class="user_img">
                          <style>
                              img.img-circle{
                                width: 150px;
  height: 80px
                              }
                            </style>
                            <img class="img-circle" src="uploads/{{profile_pic}}" alt="" style="height: 200px;">
                        </div>
                        <div class="user_name">
                            <h3>{{userdetail.fullname}}</h3>
                            <h4>{{userdetail.dob}} years old</h4>
                            <ul>
                                <li><a href="#">{{userdetail.country}}, {{userdetail.city}}</a></li>
                                <li class="dropdown extara">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">80% Match</a>
                                    <ul class="dropdown-menu">
                                       <li>Match</li>
                                        <li>
                                            <div class="circle1">
                                                <strong></strong>
                                            </div>
                                            <h4>Match</h4>
                                        </li>
                                        <li>
                                            <div class="circle2">
                                                <strong></strong>
                                            </div>
                                            <h4>Enemy</h4>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="right_side_content">
                           
                            <!-- <button type="submit" value="LogIn" class="btn form-control login_btn">Add Friend <img src="img/user.png" alt=""></button> -->
                            <button ng-click="SendMessage('<?php if(isset($my_user_id)){echo $my_user_id;} ?>','<?php if(isset($user_id)){echo $user_id;} ?>')"  class="btn form-control login_btn">Chat Now <img src="img/comment.png" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Blog grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="members_profile_inners">
                            <ul class="nav nav-tabs profile_menu" role="tablist">
                                <!-- <li role="presentation"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Activity</a></li> -->
                                <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
                              
                                <!-- <li role="presentation"><a href="#friend" aria-controls="friend" role="tab" data-toggle="tab">Friend (260)</a></li>
                                <li role="presentation"><a href="#group" aria-controls="group" role="tab" data-toggle="tab">Groups (3)</a></li>
                                <li role="presentation"><a href="#forums" aria-controls="forums" role="tab" data-toggle="tab">Forums</a></li> -->
                            </ul>
                            <div class="tab-content">
                                <!-- <div role="tabpanel" class="tab-pane fade" id="activity">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div role="tabpanel" class="tab-pane active fade in" id="profile">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <!-- <li><a href="#">Looking for a</a></li> -->
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">{{userdetail.gender}}</a></li>
                                            <li><a href="#">{{userdetail.dob}}</a></li>
                                            <li><a href="#">{{userdetail.country}}</a></li>
                                            <li><a href="#">{{userdetail.city}}</a></li>
                                            <li><a href="#">{{userdetail.birthday}}</a></li>
                                            <li><a href="#">{{userdetail.relationship}}</a></li>
                                            <!-- <li><a href="#">Man</a></li> -->
                                            <li><a href="#">{{userdetail.work_as}}</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Religion</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <!-- <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li> -->
                                        </ul>
                                        <ul>
                                            <li><a href="#">{{userdetail.education}}</a></li>
                                            <li><a href="#">{{userdetail.know}}</a></li>
                                            <li><a href="#">{{userdetail.interest}}</a></li>
                                            <li><a href="#">{{userdetail.smoking}}</a></li>
                                            <li><a href="#">{{userdetail.religion}}</a></li>
                                            <li><a href="#">{{userdetail.marital_status}}</a></li>
                                            <!-- <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul> -->
                                    </div>

                                    <div class="members_about_box">
                                <h4>About me</h4>
                                <p>{{userdetail.about_me}}.</p>
                            </div>
                            <div class="members_about_box">
                                <h4>Looking For</h4>
                               
                                <p>{{userdetail.profile_info}}</p>
                            </div>

                                </div>
                               <style>
                               .members_profile_inners .edit ul li {
    margin-bottom: 23px;
}
                               </style>
                               
                                <div role="tabpanel" class="tab-pane fade" id="sites">
                                    <div class="profile_list edit">
                                        <ul>

                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <!-- <li><a href="#">Looking for a</a></li> -->
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li>
                                            <select name="" id="" ng-model="gender" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            </select>
                                            
                                            </li>
                                          
                                          
                                            <li><input type="number" class="form-control" ng-model="dob" > </li>
                                          
                                          
                                            <li><input type="text" class="form-control" ng-model="country" ></li>
                                          
                                          
                                          
                                            <li><input type="text" class="form-control" ng-model="city" ></li>
                                          
                                          
                                            <li><input type="text" class="form-control" ng-model="birthday" ></li>
                                          
                                          
                                          
                                            <li>
                                            <select name="" id="" ng-model="smoking" class="form-control">
                                            <option value="">Do You Smoke</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select>
                                            </li>
                                          
                                          
                                            <!-- <li><a href="#">Man</a></li> -->
                                          
                                          
                                            <li><input type="text" class="form-control" ng-model="work_as" ></li>
                                        
                                        
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Religion</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            
                                        </ul>
                                        <ul>
                                            <li><input type="text" class="form-control" ng-model="education" ></li>
                                            <li><input type="text" class="form-control" ng-model="know" ></li>
                                            <li><input type="text" class="form-control" ng-model="interest" ></li>
                                            <li>
                                            <select name="" id="" ng-model="smoking" class="form-control">
                                            <option value="">Do You Smoke</option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                            </select>
                                            
                                            </li>
                                            <li><input type="text" class="form-control" ng-model="religion" ></li>
                                            <li>
                                            <select name="" id="" ng-model="marital_status" class="form-control">
                                            <option value="">Are you Married</option>
                                            <option value="single">Single</option>
                                            <option value="divorced">Divorced</option>
                                            </select>
                                            </li>
                                           
                                        </ul>
                                    </div>



                                    <div class="members_about_box">
                                <h4>About me</h4>
                               <textarea name="" id="" cols="30" rows="10" class="form-control" ng-model="about_me"></textarea>
                            </div>
                            <div class="members_about_box">
                                <h4>Looking For</h4>
                               
                                <textarea name="" id="" cols="30" rows="10" class="form-control" ng-model="profile_info"></textarea>
                            </div>

                        <button class="btn btn-block btn-danger" ng-click="saveprofile()">Save Changes</button>

                                </div>
                                <!-- <div role="tabpanel" class="tab-pane fade" id="friend">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- <div role="tabpanel" class="tab-pane fade" id="group">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <!-- <div role="tabpanel" class="tab-pane fade" id="forums">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Female</a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#">France</a></li>
                                            <li><a href="#">Paris</a></li>
                                            <li><a href="#">16 December 1990</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">Know</a></li>
                                            <li><a href="#">Interests</a></li>
                                            <li><a href="#">Smoking</a></li>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Marital Status</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Work as</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Graduate Degree</a></li>
                                            <li><a href="#">French, Russian</a></li>
                                            <li><a href="#">Billiards</a></li>
                                            <li><a href="#">No</a></li>
                                            <li><a href="#">Brown</a></li>
                                            <li><a href="#">Single</a></li>
                                            <li><a href="#">Man</a></li>
                                            <li><a href="#">Designer </a></li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget photo_widget">
                                <div class="s_title">
                                    <h4>Photo</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/photo/photo-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-8.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-9.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                            <!-- <aside class="s_widget recent_post_widget">
                                <div class="s_title">
                                    <h4>Recent Post</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Standard Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                            </aside> -->
                            <!-- <aside class="s_widget social_widget">
                                <div class="s_title">
                                    <h4>Tags</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </aside> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog grid Area =================-->
        
        <!--================Footer Area =================-->
        <?php require_once('layout/footer.php'); ?>
        <!--================End Footer Area =================-->
        
        





































<script src="angular.js"></script>






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
        <script src="vendors/tooltip/tooltip.html"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/progress-circle/circle-progress.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/costome-circle.js"></script>
        <script src="js/theme.js"></script>
    </body>

<!-- Mirrored from html.verodate.com/verodate/members-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:31 GMT -->
</html>