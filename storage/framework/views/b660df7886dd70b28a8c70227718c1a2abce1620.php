


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MIBA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo e(asset('images/logo/titlelo.png')); ?>" rel="icon">
  <link href="<?php echo e(asset('images/logo/titlelo.png')); ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo e(asset('ppbsDemo/vendor/animate.css/animate.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/vendor/aos/aos.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/vendor/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/vendor/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/vendor/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="<?php echo e(asset('ppbsDemo/vendor/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">
  <link href="<?php echo e(asset('ppbsDemo/css/style.css')); ?>" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
          $('body').bind('cut copy', function(e) {
              e.preventDefault();
            });
        });

      });
</script>
<script type="text/javascript">
      $(function()
      {
        $('img').bind('contextmenu', function()
        {
              return false;

        })
      })
</script>
<style>

#imgShool {
  float: right;
}
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}


</style>

<script type="text/javascript">
function up1de(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img1de');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);


 const fi = document.getElementById('degid');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 6000) {
						document.getElementById("deg").innerHTML =
                          "File too Big, please select a file size 5mb.";
                    } else {
                        document.getElementById('degsize').innerHTML = 'Your file size is <b>'
                        + file + '</b> KB';
                    }
                }
            }

}



function up1(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img1');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);



 const fi = document.getElementById('proid');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 6000) {
						document.getElementById("pro").innerHTML =
                          "File too Big, please select a file size 5mb.";
                    } else {
                        document.getElementById('prosize').innerHTML = 'Your file size is <b>'
                        + file + '</b> KB';
                    }
                }
            }
}

function up2(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img2');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);

 const fi = document.getElementById('payid');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 6000) {
						document.getElementById("pay").innerHTML =
                          "File too Big, please select a file size 5mb.";
                    } else {
                        document.getElementById('paysize').innerHTML = 'Your file size is <b>'
                        + file + '</b> KB';
                    }
                }
            }


}

function up3(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img3');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);


 const fi = document.getElementById('nrcfid');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 6000) {
						document.getElementById("nrcf").innerHTML =
                          "File too Big, please select a file size 5mb.";
                    } else {
                        document.getElementById('nrcfsize').innerHTML = 'Your file size is <b>'
                        + file + '</b> KB';
                    }
                }
            }

}

function up4(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img4');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);

 const fi = document.getElementById('nrcbid');
            // Check if any file is selected.
            if (fi.files.length > 0) {
                for (const i = 0; i <= fi.files.length - 1; i++) {

                    const fsize = fi.files.item(i).size;
                    const file = Math.round((fsize / 1024));
                    // The size of the file.
                    if (file >= 6000) {
						document.getElementById("nrcb").innerHTML =
                          "File too Big, please select a file size 5mb.";
                    } else {
                        document.getElementById('nrcbsize').innerHTML = 'Your file size is <b>'
                        + file + '</b> KB';
                    }
                }
            }

}

  function changeStatus(){
      var status=document.getElementById("inputGroupSelect01");

      if(status.value == "Post Graduate Diploma in Business Management"){
          document.getElementById("vie").style.visibility="visible";
      } else{
          document.getElementById("vie").style.visibility="hidden";
      }
  }
</script>
 </head>

	<body>
	   <?php echo $__env->make('../frontend/parts/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


       <?php echo $__env->yieldContent('content'); ?>


       <?php echo $__env->make('../frontend/parts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <script src="<?php echo e(asset('ppbsDemo/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/php-email-form/validate.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/jquery-sticky/jquery.sticky.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/venobox/venobox.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/waypoints/jquery.waypoints.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/counterup/counterup.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/vendor/aos/aos.js')); ?>"></script>
  <script src="<?php echo e(asset('ppbsDemo/js/main.js')); ?>"></script>
  <!-- Template Main JS File -->
  <script>
			var currentTab = 0; // Current tab is set to be the first tab (0)
			showTab(currentTab); // Display the current tab

			function showTab(n) {
			  // This function will display the specified tab of the form...
			  var x = document.getElementsByClassName("tab");
			  x[n].style.display = "block";
			  //... and fix the Previous/Next buttons:
			  if (n == 0) {
				document.getElementById("prevBtn").style.display = "none";
			  } else {
				document.getElementById("prevBtn").style.display = "inline";
			  }
			  if (n == (x.length - 1)) {
				document.getElementById("nextBtn").innerHTML = "Agree";
			  } else {
				document.getElementById("nextBtn").innerHTML = "Next";
			  }
			  //... and run a function that will display the correct step indicator:
			  fixStepIndicator(n)
			}

			function nextPrev(n) {
			  // This function will figure out which tab to display
			  var x = document.getElementsByClassName("tab");
			  // Exit the function if any field in the current tab is invalid:
			  if (n == 1 && !validateForm()) return false;
			  // Hide the current tab:
			  x[currentTab].style.display = "none";
			  // Increase or decrease the current tab by 1:
			  currentTab = currentTab + n;
			  // if you have reached the end of the form...
			  if (currentTab >= x.length) {
				// ... the form gets submitted:
				document.getElementById("regForm").submit();
				return false;
			  }
			  // Otherwise, display the correct tab:
			  showTab(currentTab);
			}

			function validateForm() {
			  // This function deals with validation of the form fields
			  var x, y, i, valid = true;
			  x = document.getElementsByClassName("tab");
			  y = x[currentTab].getElementsByTagName("input");
			  // A loop that checks every input field in the current tab:
			  for (i = 0; i < y.length; i++) {
				// If a field is empty...
				if (y[i].value == "") {
				  // add an "invalid" class to the field:
				  y[i].className += " invalid";
				  // and set the current valid status to false
				  valid = false;
				}
			  }
			  // If the valid status is true, mark the step as finished and valid:
			  if (valid) {
				document.getElementsByClassName("step")[currentTab].className += " finish";
			  }
			  return valid; // return the valid status
			}

			function fixStepIndicator(n) {
			  // This function removes the "active" class of all steps...
			  var i, x = document.getElementsByClassName("step");
			  for (i = 0; i < x.length; i++) {
				x[i].className = x[i].className.replace(" active", "");
			  }
			  //... and adds the "active" class on the current step:
			  x[n].className += " active";
			}
			</script>
       <script src="<?php echo e(asset('ppbsDemo/vendor/swiper/swiper-bundle.min.js')); ?>"></script>





<script>
$(document).ready(function () {
    $('#example1').DataTable({

    });
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap.min.js"></script>
<?php echo $__env->yieldContent('js'); ?>
</body>
</html>

<?php /**PATH D:\xampp\htdocs\mibauni\resources\views/frontend/layouts/master.blade.php ENDPATH**/ ?>