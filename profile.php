<!DOCTYPE html>
<html lang="en">

<head>

 <!--=======Head========-->
 <?php include 'include/head.php';?>
 <!--=======Head========-->
</head>

<body class="sidebar-dark">
  <div class="container-scroller">
    
    <!--=======nev========-->
     <?php include 'include/nev.php';?>
     <!--=======nev========-->
   
    <div class="container-fluid page-body-wrapper">
      
     <!--=======nev========-->
       <?php include 'include/sidebar.php';?>
     <!--=======nev========-->

      <div class="main-panel">
        <div class="content-wrapper">

          <div class="row mx-3">
            <div class="alert alert-danger alert-dismissible fade show col-lg-8 mx-auto" role="alert">
            <strong><i class="mdi mdi-alert-octagon"></i> Holy guacamole!</strong> Please Complite Your's Profile First!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

           <div class="alert alert-success alert-dismissible fade show col-lg-8 mx-auto" role="alert">
            <strong> <i class="mdi mdi-thumb-up-outline"></i> Holy guacamole!</strong> Profile Updated Successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>



          </div>  
       

          <div class="row">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">

                <div class="form-group">
                <label class="">Upload Profile Images</label>
                <div class="profile-img">
                <input type="file"  id="img1" name="img[]" accept="image/*" style="opacity: 0" onchange="loadFile1i(event)" required="">
                <center><img id="output1i" style="width: 100px; height: 100px; display: none;"></center>
                <center><span id="att11i" style="color: #626262;">
                <img class="" src="images/browse.png">
                </span></center>
                <center><span id="att1s1i" onclick="hideatt1i()" style="color: red; display: none;">Remove File</span></center>
                </div>
                </div>
              </div>
             </div>
          </div>

            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body row">
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
                  <label>Phone Number</label>
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

                
                
                
                </div>
              </div>
            </div>
         
          </div>
       
    
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">

                    <div class="form-group col-lg-12">
                      <label for="exampleTextarea1">Bio</label>
                      <textarea class="form-control" id="" placeholder="Tell us a bit about yourself, your career milestones and some of your proudest achievements. What areas you can offer advice within?" rows="4"></textarea>
                    </div>

                  <div class="form-group col-lg-6">
                  <label>Expertise</label>
                      <select class="expertise w-100" multiple="multiple">
                      <option value="mark">Marketing & Branding</option>
                      <option value="product">Product</option>
                      <option value="sales">Sales</option>
                      <option value="customerex">Customer Experience</option>
                      <option value="software">Software</option>
                      <option value="leadership">Leadership</option>
                      <option value="fundraising">Fundraising</option>
                      <option value="investment">Investment</option>
                      <option value="operations">Operations</option>
                      <option value="businessdev">Business Development</option>
                      <option value="hrculture">HR & Culture</option>
                    </select>
                   </div>  

                   <div class="form-group col-lg-6">
                     <label>Seniority</label>
                      <select class="seniority w-100" multiple="multiple">
                      <option value="headof">Head of</option>
                      <option value="director">Director</option>
                      <option value="seniordirector">Senior Director</option>
                      <option value="vp">VP</option>
                      <option value="svp">SVP</option>
                      <option value="clevel">C-level</option>
                      <option value="partner">Partner</option>
                      <option value="founder">Founder</option>
                      <option value="boardmember">Board Member</option>
                      <option value="chairperson">Chairperson</option>
                      <option value="investor">Investor</option>
                    </select>
                   </div> 

                   <div class="form-group col-lg-6">
                    <label>Industry</label>
                    <select class="industry w-100" multiple="multiple">
                    <option value="financeandinsur">Finance and Insurance</option>
                    <option value="venturecapital">Venture Capital & Investments</option>
                    <option value="technology">Technology</option>
                    <option value="healthcare">Healthcare</option>
                    <option value="retail">Retail</option>
                    <option value="construction">Construction</option>
                    <option value="agriculture">Agriculture</option>
                    <option value="artsentertainment">Arts & Entertainment</option>
                    <option value="manufacturing">Manufacturing</option>
                    </select>
                   </div>


                   <div class="form-group col-lg-6">
                     <label>Business Model</label>
                      <select class="business-model w-100" multiple="multiple">
                      <option value="saas">SaaS</option>
                      <option value="ondemand ">On Demand </option>
                      <option value="smb">SMB</option>
                      <option value="b2b2c">B2B2C</option>
                      <option value="b2b">B2B</option>
                      <option value="b2c">B2C</option>
                      <option value="marketplace">Marketplace</option>
                      <option value="franchise">Franchise</option>
                      <option value="consulting">Consulting</option>
                      <option value="blockchain">Blockchain</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-12">
                    <h5>Define pricing</h5>
                   </div> 

                  <div class="form-group col-lg-4">
                  <label>Pricing 20 min.</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="$">
                  </div>

                  <div class="form-group col-lg-4">
                  <label>Pricing 40 min.</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="$">
                  </div>

                  <div class="form-group col-lg-4">
                  <label>Pricing 60 min.</label>
                  <input type="text" class="form-control form-control-lg" id="" placeholder="$">
                  </div>

                   <div class="form-group col-lg-12">
                     <label>Add availability</label>
                      <select class="availability w-100" multiple="multiple">
                      <option value="01am">01 AM</option>
                      <option value="02am">02 AM</option>
                      <option value="03am">03 AM</option>
                      <option value="04am">04 AM</option>
                      <option value="05am">05 AM</option>
                      <option value="06am">06 AM</option>
                      <option value="07am">07 AM</option>
                      <option value="08am">08 AM</option>
                      <option value="09am">09 AM</option>
                      <option value="10am">10 AM</option>
                      <option value="11am">11 AM</option>
                      <option value="12am">12 AM</option>
                      <option value="01pm">01 PM</option>
                      <option value="02pm">02 PM</option>
                      <option value="03pm">03 PM</option>
                      <option value="04pm">04 PM</option>
                      <option value="05pm">05 PM</option>
                      <option value="06pm">06 PM</option>
                      <option value="07pm">07 PM</option>
                      <option value="08pm">08 PM</option>
                      <option value="09pm">09 PM</option>
                      <option value="10pm">10 PM</option>
                      <option value="11pm">11 PM</option>
                      <option value="12pm">12 PM</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-12">
                     <label>About Me</label>
                     <textarea id="about-me"></textarea>
                   </div>


                    <div class="form-group col-lg-12 text-center">
                    <a class="btn btn-primary btn-sm btn-rounded custom-padding">Update</a>
                   </div>




                  </div>
                  </div>
                </div>

                
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
       
        <!--=======nev========-->
        <?php include 'include/footer.php';?>
        <!--=======nev========-->

      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

        <!--=======Js========-->
        <?php include 'include/js.php';?>
        <!--=======Js========-->

        <!-----Tiny Editer----->
        <script src="https://cdn.tiny.cloud/1/qagffr3pkuv17a8on1afax661irst1hbr4e6tbv888sz91jc/tinymce/5-stable/tinymce.min.js"></script>
        <!-----Tiny Editer----->


<script type="text/javascript">

/*Editer*/
tinymce.init({
  selector: 'textarea#about-me',
  height: 250,
  menubar: false,
  plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table paste code help wordcount'
  ],
  toolbar: 'undo redo | formatselect | ' +
  'bold italic backcolor | alignleft aligncenter ' +
  'alignright alignjustify | bullist numlist outdent indent | ' +
  'removeformat | help',
  content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  /*Editer*/


 (function($) {
  'use strict';

  if ($(".js-example-basic-single").length) {
    $(".js-example-basic-single").select2();
  }
  if ($(".expertise").length) {
   /* $(".expertise").select2();*/
   $(".expertise").select2({ maximumSelectionLength: 3, });
    
  }

  if ($(".seniority").length) {
    /* $(".seniority").select2();*/
        $(".seniority").select2({ maximumSelectionLength: 3, });
  }

  if ($(".industry").length) {
    /* $(".industry").select2();*/
     $(".industry").select2({ maximumSelectionLength: 3, });

  }


   if ($(".business-model").length) {
      /*$(".business-model").select2();*/
      $(".business-model").select2({  maximumSelectionLength: 3, });
  }

   if ($(".availability").length) {
      $(".availability").select2();
     /* $(".availability").select2({  maximumSelectionLength: 3, });*/
  }

  

})
(jQuery);




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

        <script>
document.getElementById("output1i").style.display = "none";
document.getElementById("att1s1i").style.display = "none";

var loadFile1i = function(event) {
document.getElementById("att11i").style.display = "none";
document.getElementById("att1s1i").style.display = "block";
document.getElementById("output1i").style.display = "block";
var output1i = document.getElementById('output1i');
output1i.src = URL.createObjectURL(event.target.files[0]);
document.getElementById("hideset1i").style.display = "none";
};
function hideatt1i() {
document.getElementById("output1i").style.display = "none";
document.getElementById("att11i").style.display = "block";
document.getElementById("att1s1i").style.display = "none";
document.getElementById("img1").value = null;


}
</script>
</body>

</html>

