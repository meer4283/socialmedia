<style>

    .down_modal,.mfp-bg,.mfp-container{
        z-index: 9 !important;
    }

</style>


 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Verify Email</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Code</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" ng-model="code">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" style="background-color: #ea4c88; border: none;" ng-click="checkcode()">Verify</button>
        </div>
      </div>
    </div>
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
                        <form method="POST" ng-submit="register()">
                            <div class="form-group">
                                <input type="email" class="form-control" id="reg_email" placeholder="Email" ng-model="email" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name" ng-model="fullname" >
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="reg_user" placeholder="Username" ng-model="username" >
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="reg_pass" placeholder="Password" ng-model="password">
                            </div>
                            <div class="form-group">
                               <select name="" id="" ng-model="gender" class="form-control" id="reg_user" >
                               <option value="">Select Gender</option>          
                                <option value="male">Male</option>       
                                <option value="female">Female</option>       
                            
                            </select>
                            </div>
                            <div class="form-group">
                                <div class="datepicker">
                                    <input type='number' class="form-control " placeholder="Age" ng-model="dob" />
                                   
                                </div>
                            </div>

<style>

label.inputfile{
    padding: 15px;
    background: #e74c3c; 
    display: table;
    color: #fff;
    border-radius: 20px;
     }



input[type="file"] {
    display: none;
}
</style>

                            <div class="form-group">
                            <label for="default-btn" class="inputfile">Upload Profile Picture</label>
                            <input id="default-btn" type="file" file-input="files" >
                            </div>
                            <div class="reg_chose form-group">
                               
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                            </div>
                        </form>
                        <br><br><br>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>