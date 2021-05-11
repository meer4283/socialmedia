<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    


<!-- Mirrored from html.verodate.com/verodate/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:03 GMT -->
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
    <body ng-app="myApp" ng-controller="myController" <?php if( isset($_GET['submit']) ){
        echo 'ng-init="onload()"';
    } ?>    >


    
        <?php require_once('layout/login.php'); ?>
    <?php require_once('layout/register.php'); ?>
       
        <!--================Frist Main hader Area =================-->
        <?php require_once('layout/header.php'); ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area banner_area2">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Members"><img class="left_img" src="img/banner/t-left-img.png" alt="">Members<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.html">Home</a>
                    <a href="#">Community</a>
                    <a href="blog.html">Members</a>
                    <div class="advanced_search">
                        <div class="search_inner">
                            <div class="search_item">
                                <h5>Name</h5>
                                
                                <style>
                                .name_input{
                                    background-color: #f4f4f4;
                                    border: none;
                                    padding-top: 10px;
                                    padding-bottom: 10px;
                                    border-radius: 20px;
                                }
                                </style>
                                
                                <input type="text"  ng-model="name" ng-keyup="filter()" class="name_input">
                                
                            </div>
                            <div class="search_item">
                                <h5>Seeking a</h5>
                                <select class="selectpicker" ng-model="gender" ng-change="filter()">
                                    <option value="female" >Woman</option>
                                    <option value="male">Man</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>From</h5>
                                <select class="selectpicker" ng-model="age_from" ng-change="filter()">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>To</h5>
                                <select class="selectpicker" ng-model="age_to" ng-change="filter()">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                </select>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Active Memebers Area =================-->
        <section class="actives_members">
            <div class="container">
                <div class="welcome_title">
                    <h3>Active Members</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                  

       
   
       <div class="col-sm-2 col-xs-6" ng-repeat="members in members">
                        <div class="active_mem_item">
                            <ul class="nav navbar-nav">
                                <li class="dropdown tool_hover">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="uploads/{{members.profile_pic}}" alt=""></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="head_area">
                                                <h4>{{members.fullname}}</h4>
                                                
                                                <!-- <h4>53% Match</h4> -->
                                            </div>
                                            <div class="media">
                                                
                                                <div class="media-body">
                                               
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>{{members.fullname}}</h4>
                            <h5>{{members.gender}}</h5>
                            <a href="members-detail.php?mid={{members.user_id}}" class="btn" >View Profile</a>
                        </div>
                    </div>
        


        <br>
        <br>
        <br>

        
       
                   
                </div>
            </div>
        </section>
        <!--================End Active Memebers Area =================-->
        

        
        <!--================Footer Area =================-->
        <?php require_once('layout/footer.php'); ?>
        <!--================End Footer Area =================-->
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.8/angular.js" type="text/javascript"></script>
        
	
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        



<script>
var app = angular.module('myApp', []);

app.controller('myController', function($scope, $http, $window){

/////////////////// onload

$scope.onload = () =>{
    $scope.getMembers();
}






$scope.getMembers = () =>{
  $http.post(
    "functions/user/searchMembers.php", {
      'gender': "<?php if( isset($_GET['submit']) ){ echo $_GET['gender']; } ?>",
      'looking_for': "<?php if( isset($_GET['submit']) ){ echo $_GET['looking_for']; } ?>",
      'age_from': "<?php if( isset($_GET['submit']) ){ echo $_GET['age_from']; } ?>",
      'age_to': "<?php if( isset($_GET['submit']) ){ echo $_GET['age_to']; } ?>"
    }
  ).then(function(response) {
    console.log(response.data);
    $scope.members = response.data;
   
  });
}


$scope.filter = () =>{
  $http.post(
    "functions/user/filterMembers.php", {
      'gender': $scope.gender,
      'looking_for': $scope.looking_for,
      'age_from': $scope.age_from,
      'age_to': $scope.age_to,
      'name': $scope.name
    }
  ).then(function(response) {
    console.log(response.data);
    $scope.members = response.data;
   
  });
}




});


</script>








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

<!-- Mirrored from html.verodate.com/verodate/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Apr 2021 17:38:26 GMT -->
</html>