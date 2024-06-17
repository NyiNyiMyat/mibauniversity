<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIBA</title>
      <link href="{{asset('images/logo/titlelo.png')}}" rel="icon">
  <link href="{{asset('images/logo/titlelo.png')}}" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('adminDemo/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('adminDemo/vendors/toastify/toastify.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/vendors/fontawesome/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/vendors/iconly/bold.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('adminDemo/css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('adminDemo/images/favicon.svg')}}" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('adminDemo/vendors/dripicons/webfont.css')}}">
   <link rel="stylesheet" href="{{asset('adminDemo/css/pages/dripicons.css')}}">

    <style>
    table.dataTable td{
        padding: 15px 8px;
    }
    .fontawesome-icons .the-icon svg {
        font-size: 24px;
    }

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
}

function up1(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img1');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up2(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img2');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}

function up3(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img3');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
}


function up4(){
var reader=new FileReader();
reader.onload= function(){
var img= document.getElementById('img4');
img.src=reader.result;
}
reader.readAsDataURL(event.target.files[0]);
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
@include('../backend/parts/header')

@yield('content')

@include('../backend/parts/footer')

<script src="{{asset('adminDemo/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('adminDemo/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminDemo/vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('adminDemo/js/pages/dashboard.js')}}"></script>
<script src="{{asset('adminDemo/vendors/jquery/jquery.min.js')}}"></script>
<script src="{{asset('adminDemo/vendors/jquery-datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('adminDemo/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('adminDemo/vendors/fontawesome/all.min.js')}}"></script>
<script>

 function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<script>
    // Jquery Datatable
    let jquery_datatable = $("#table1").DataTable()
</script>
<script>
	/*
function select_all(){
	if(jQuery('#delete').prop("checked")){
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',true);
		});
	}else{
		jQuery('input[type=checkbox]').each(function(){
			jQuery('#'+this.id).prop('checked',false);
		});
	}
}

function delete_all(){
	var check=confirm("Are you sure?");
	if(check==true){
		jQuery.ajax({
			url:'delete.php',
			type:'post',
			data:jQuery('#frm').serialize(),
			success:function(result){
				jQuery('input[type=checkbox]').each(function(){
					if(jQuery('#'+this.id).prop("checked")){
						jQuery('#box'+this.id).remove();
					}
				});
			}
		});
	}
}
*/
</script>

<script>
    $(function(e){
        $("#chkCheckAll").click(function(){
            $(".checkBoxClass").prop('checked',$(this).prop('checked'));
        });


	$("#deleteAllSelectedRecord").click(function(e){

		e.preventDefault();
		var allids=[];

		$("input:checkbox[name=ids]:checked").each(function(){
			allids.push($(this).val());
		});

		$.ajax({
			url:"",
			type:"DELETE",
			data:{
				_token:$("input[name=token]").val(),
				ids:allids
			},

			success:function(response){
			  $.each(allids,function(key,val){
				$("#sid"+val).removed();
			 	 })
			 }
		  });
		})
	});

document.getElementById('del').addEventListener('click', () => {
    Toastify({
        text: "Successfully Your Deleted",
        duration: 3000,
        close:true,
        backgroundColor: "#4fbe87",
    }).showToast();
})

</script>
<script src="{{asset('adminDemo/vendors/toastify/toastify.js')}}"></script>
<!---script src="{{asset('adminDemo/js/extensions/toastify.js')}}"></script--->
<script src="{{asset('adminDemo/vendors/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('adminDemo/vendors/tinymce/plugins/code/plugin.min.js')}}"></script>
<script>
    tinymce.init({ selector: '#default' });
	tinymce.init({ selector: '#dark1', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
	tinymce.init({ selector: '#dark2', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
	tinymce.init({ selector: '#dark3', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
	tinymce.init({ selector: '#dark4', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
</script>
<script src="{{asset('adminDemo/js/mazer.js')}}"></script>
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



  <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
<script>
    $(document).ready(function() {
    $('#exporttable').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
</body>

</html>
