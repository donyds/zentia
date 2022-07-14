<!DOCTYPE html>
<html lang="en">

<head>

 <!--=======Head========-->
 <?php include 'include/head.php';?>
 <!--=======Head========-->
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    
   
   
    <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-6">
             <div class="fix-position">
             <div class="brand-logo text-center">
                <img src="images/zentia-logo1.png" alt="logo">
              </div>
            <img src="images/signin.png">
          </div>
          </div>
          
          <div class="col-lg-6">
             <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue</h6>
              <form class="pt-3 row">
                <div class="col-lg-10 mx-auto">
                  <div class="form-group">
                      <label for="">Are you Coach Or User</label>
                        <select class="form-control" id="exampleSelectGender">
                          <option>Coach</option>
                          <option>User</option>
                        </select>
                      </div>

                <div class="form-group">
                  <label>User Name</label>
                  <input type="email" class="form-control form-control-lg" id="" placeholder="Username">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control form-control-lg" id="" placeholder="Password">
                </div>
                <div class="mt-3">
                  <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SIGN IN</a>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    <i class="input-helper"></i></label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using facebook
                  </button>
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="coach-signup.php" class="text-primary">Create</a>
                </div>
              </div>
              </form>
            </div>
          </div> 

        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div> 
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

        <!--=======Js========-->
        <?php include 'include/js.php';?>
        <!--=======Js========-->

        <script type="text/javascript">
           (function($) {
  'use strict';

  if ($(".js-example-basic-single").length) {
    $(".js-example-basic-single").select2();
  }
  if ($(".js-example-basic-multiple").length) {
    $(".js-example-basic-multiple").select2();
  }
})(jQuery);


$('.file-input').change(function(){
var curElement = $('.image');
console.log(curElement);
var reader = new FileReader();
reader.onload = function (e) {
// get loaded data and render thumbnail.
curElement.attr('src', e.target.result);
};
// read the image file as a data URL.
reader.readAsDataURL(this.files[0]);
});

        </script>

</body>
</html>

