var app = angular.module('myApp', []);
app.directive("fileInput", function($parse) {
  return {
    link: function($scope, element, attrs) {
      element.on("change", function(event) {
        var files = event.target.files;

        $parse(attrs.fileInput).assign($scope, element[0].files);
        $scope.$apply();
      });
    }
  }
});



app.controller('myController', function($scope, $http, $window){

/////////////////// onload


$scope.closeloader = (link) =>{
  $window.location.href = link;
}






$scope.onload = () =>{
    $scope.getMembers();
}
/////////////////////////My Profile Page///////////////////////////////////////////////

$scope.SendMessage = function(my_user_id, user_id,isLogged) {

  if(isLogged == "yes"){
    $http.post(
      "functions/user/sendmessagequick.php", {
          'from_user_id': my_user_id,
          'to_user_id': user_id,
          'message_content': 'start chat now ',
          'message_type': 'Text',
          'message_time': 'No',
          'message_status': 'Delivered'

      }
  ).then(function(response) {
      $window.location.href = "chat.php?chatuser="+ user_id;

  });
  }
  else{
    swal("Please login", "You can send message after login !", "warning");
  }




}



$scope.getMyProfile = (id) =>{
    console.log(id);
  
    $http.get("functions/user/getUserDetails.php?id="+ id)
    .then(function(response) {
      $scope.userdetail = response.data[0];
       console.log(response.data[0]);
      $scope.fullname     =  response.data[0].fullname;
      $scope.email     =  response.data[0].email;
      $scope.profile_pic     =  response.data[0].profile_pic;
      $scope.gender     =  response.data[0].gender;
      $scope.dob     =  parseInt(response.data[0].dob);
      $scope.country     =  response.data[0].country;
      $scope.city     =  response.data[0].city;
      $scope.birthday     =  response.data[0].birthday;
      $scope.relationship     =  response.data[0].relationship;
      $scope.work_as     =  response.data[0].work_as;
      $scope.education     =  response.data[0].education;
      $scope.know     =  response.data[0].know;
      $scope.interest     =  response.data[0].interest;
      $scope.smoking     =  response.data[0].smoking;
      $scope.religion     =  response.data[0].religion;
      $scope.marital_status     =  response.data[0].marital_status;
      $scope.about_me     =  response.data[0].about_me;
      $scope.profile_info     =  response.data[0].profile_info;
                             
    });

}

$scope.saveMyProfile = () =>{
  $http.post(
    "functions/user/updateUser.php", {
      'email': $scope.email,
      'fullname': $scope.fullname,
      'gender': $scope.gender,
      'dob': $scope.dob,
      'country': $scope.country,
      'city': $scope.city,
      'birthday': $scope.birthday,
      'relationship': $scope.relationship,
      'work_as': $scope.work_as,
      'education': $scope.education,
      'know': $scope.know,
      'interest': $scope.interest,
      'smoking': $scope.smoking,
      'religion': $scope.religion,
      'marital_status': $scope.marital_status,
      'about_me': $scope.about_me,
      'profile_info': $scope.profile_info
      
    }
  ).then(function(response) {
    
  });
}


/////////////////////// user login 
    $scope.msg = "";
    $scope.login = () => {
      document.getElementById("loader").style.display = 'block';
      $http.post(
        "functions/user/login.php", {
          'email': $scope.email,
          'password': $scope.password
        }
      ).then(function(response) {
        $scope.response = response.data;
        console.log($scope.response);
        if ($scope.response == "yes") {
          document.getElementById("loader").style.display = 'none';
          swal("Your are now logged in !", "", "success");
          $window.location.href = "my-profile.php";
        } else if ($scope.response == "no") {
          document.getElementById("loader").style.display = 'none';
          swal("Account Doesn't Exist!", "", "error");
        } else if ($scope.response == "invalid") {
          document.getElementById("loader").style.display = 'none';
          swal("Invalid Credentials!", "", "error");

        }
      });

    }
////////////////////////////////////


/////////////////// Register ////////////////////////////
 //start controller
 $scope.isEmailVerified = "0";
 openmodal = () => {

   if ($scope.isEmailVerified == "1") {
     console.log('asds');
     $scope.register();
   } else if ($scope.isEmailVerified == "0") {
     $scope.sendverify();
     myModal.show();

   }

 }

 $scope.sendverify = () => {
   $http.post(
     "functions/user/verifyemail.php", {
       'email': $scope.email
     }
   ).then(function(response) {
     console.log(response.data);
   });
 }


 $scope.checkcode = () => {
   $http.post(
     "functions/user/checkCode.php", {
       'code': $scope.code,
       'email': $scope.email
     }
   ).then(function(response) {
     console.log(response.data);
     if (response.data == "verified") {
       $scope.isEmailVerified = "1";
       $scope.register();
       myModal.hide();
     } else {
       swal({
         title: "Wrong Code!",
         text: "",
         icon: "error",
       });
     }

     // myModal.hide();
   });
 }


 var form_data = new FormData();

 $scope.register = function() {
  document.getElementById("loader").style.display = 'block';
console.log($scope.fullname);
console.log($scope.email);
console.log($scope.dob);
console.log($scope.password);
console.log($scope.gender);

   if (!$scope.fullname || !$scope.email || !$scope.dob || !$scope.password || !$scope.gender) {
     swal({
       title: "Warning!",
       text: "Please fill all info to create account.",
       icon: "error",
     })
   } else {
     $scope.is_img = 0;
     angular.forEach($scope.files, function(file) {
       $scope.is_img = 1;
       form_data.append('file', file);
       form_data.append('email', $scope.email);
       form_data.append('password', $scope.password);
       form_data.append('fullname', $scope.fullname);
       form_data.append('username', $scope.username);
       form_data.append('dob', $scope.dob);
       form_data.append('gender', $scope.gender);

     });
     if (!$scope.is_img) {
      form_data.append('email', $scope.email);
      form_data.append('password', $scope.password);
      form_data.append('fullname', $scope.fullname);
      form_data.append('username', $scope.username);
      form_data.append('dob', $scope.dob);
      form_data.append('gender', $scope.gender);
     }
     $http.post('functions/user/register.php', form_data, {
       transformRequest: angular.identity,
       headers: {
         'Content-Type': undefined,
         'Process-Data': false
       }
     }).then(function(response) {
       console.log(response.data);
       if (response.data == "exist") {
        document.getElementById("loader").style.display = 'none';
         swal("Not Registerd!", "User Already Exist!", "error");
       } else if (response.data == "no image") {
        document.getElementById("loader").style.display = 'none';
         swal("Not Registerd!", "Please upload profile image to continue", "error");
         
       } else if (response.data == "registered") {
        document.getElementById("loader").style.display = 'none';
        swal("Registerd!", "registered", "success");
        setTimeout(() => {  location.reload(); }, 3000);
         
       }
     });
   }
 }

////////////////////////////////////////////////////////////////////////////////


//////////////////////// Members Page .//////////////////////////////


// $scope.getMembers = () =>{
//   $http.post(
//     "functions/user/searchMembers.php", {
//       'gender': <?php echo $_GET['gender']; ?>,
//       'looking_for': "<?php echo $_GET['looking_for']; ?>",
//       'age_from': "<?php echo $_GET['age_from']; ?>",
//       'age_to': "<?php echo $_GET['age_to']; ?>"
//     }
//   ).then(function(response) {
//     console.log(response.data);
    
   
//   });
// }




});