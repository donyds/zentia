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
          <div class="col-lg-5">
             <div class="fix-position">
             <div class="brand-logo text-center">
                <img src="images/zentia-logo1.png" alt="logo">
              </div>
            <img src="images/signup.png">
          </div>
          </div>
          
          <div class="col-lg-7">
             <div class="auth-form-light text-left py-5 px-4 px-sm-5">
             
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signiup up is easy. It only takes a few steps</h6>
              <form method="" action="" class="pt-3 row">

                <div class="form-group col-lg-6">
                  <label>First Name</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="First Name">
                </div>

                  <div class="form-group col-lg-6">
                  <label>Last Name</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="Last Name">
                </div>

                <div class="form-group col-lg-6">
                  <label>E-mail</label>
                  <input type="email" class="form-control form-control-lg" id="" placeholder="Email">
                </div>

                <div class="form-group col-lg-6">
                  <label>Phone number</label>
                  <input type="number" class="form-control form-control-lg"  id="" placeholder="Phone number">
                </div>

               <div class="form-group col-lg-6">
                    <label>Country</label>
                    <select class="js-example-basic-single w-100 h-50">
                      <option value="AL">Alabama</option>
                      <option value="WY">Wyoming</option>
                      <option value="AM">America</option>
                      <option value="CA">Canada</option>
                      <option value="RU">Russia</option>
                    </select>
                     <small class="text-danger">Field is required</small>
                  </div>
                <div class="form-group col-lg-6">
                  <label>Company</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="Company">
                </div>

               

               <div class="form-group col-lg-6">
                  <label for="exampleTextarea1"> Profile headline</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="Founder of x, former CEO of y, part time podcaster">
               </div>

                <div class="form-group col-lg-6">
                  <div class="image-box text-center">
                  <img class="image" src="https://sharukh.dbtechserver.online/housekeeper/assets/images/upload-dami.png">
                  </div>
                  <small class="text-primary">upload picture in high res</small>
                  <button class="file-upload">            
               <input type="file" name="identity_card" class="file-input" accept="image/png, image/gif, image/jpeg,image/jpg">Upload profile picture
               </button>
              </div> 


               

               <div class="form-group col-lg-12">

                      <label for="exampleTextarea1">Bio</label>
                      <textarea class="form-control" id="" placeholder="Tell us a bit about yourself, your career milestones and some of your proudest achievements. What areas you can offer advice within?" rows="4"></textarea>
                    </div>

                <div class="mb-12 col-lg-12">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" required>
                      Accept terms & conditions & Accept Marketing and News
                    </label>
                    <small class="pl-4"><a href="#">Terms & conditions</a> &nbsp; <a href="#">Marketing and News</a></small>
                  </div>
                </div>
                <div class="form-group col-lg-12 text-center">
                  <a class="btn btn-primary btn-sm font-weight-medium auth-form-btn">SIGN UP</a>
                </div>

                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="signin.php" class="text-primary">Login</a>
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

