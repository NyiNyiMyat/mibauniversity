

<?php $__env->startSection('content'); ?>
<section id="about" class="about" style="color:#000;">
	<div class="container">
		<div class="row justify-content-between align-items-center">


			<div class="col-lg-12 col-md-6 search-course-right section-gap">
			<?php if($errors->any()): ?>
	<div class="alert alert-danger">
		<ul>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><?php echo e($error); ?></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
<?php endif; ?>

<div class="container">
<?php if(Session::has('success')): ?>
		<div class="alert alert-success">
			<?php echo e(Session::get('success')); ?>

			<?php
				Session::forget('success');
			?>
		</div>
<?php endif; ?>
</div>
<h3 style="text-align:center">Certificate Registration From</h3>
				<form id="regForm" action="<?php echo e(route('certificate.store')); ?>" method="post" enctype="multipart/form-data">
					<?php echo csrf_field(); ?>
					

					<h3><img src="<?php echo e(asset('userDemo/img/4.png')); ?>" class="img-fluid" style="width:120px;"></h3>
					<!-- One "tab" for each step in the form: -->
					<div class="tab">
					  <font style="color:red;font-size:35px;">*</font> required<br>
					  <script type="text/javascript">
						  function up1(){
							var reader=new FileReader();
							reader.onload= function(){
							var img= document.getElementById('img1');
							img.src=reader.result;
						  }
						  reader.readAsDataURL(event.target.files[0]);
						  }
						</script>
									  <div class="form-group">
										<label for="usr"><h6><font style="font-size: 15px;">Choose Your Profile Photo (pro)</font><font style="color:red;font-size:35px;">*</font></h6></label>
										<br>
										<a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration:none;">
										<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
										</a>

<!-- The Modal -->
<div class="modal fade" id="myModal1">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your Profile Photo</h5>
</div>
<!-- Modal body -->
<div class="modal-body">
<img src="" id="img1" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>											  
										
										<input type="file"  oninput="this.className = ''" required="required" onchange="up1()" name="pro" class="form-control" required>
									  
									  </div>
					  
								  
									  <div class="form-group" style="font-size: 15px;">
										<label for="sel1"><h6><font style="font-size:15px;">Course</font><font style="color:red;font-size:35px;">*</font></h6></label>
										  <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="course" required="required">
											  <option selected>Select Your Course</option>
                                              <option value="Certificate in Business English">Certificate in Business English</option>

<option value="Certificate in Business Management & Administration">
Certificate in Business Management & Administration</option>

<option value="Certificate in Marketing">Certificate in Marketing</option>
<option value="Certificate in Finance & investment">Certificate in Finance & investment</option>
<option value="Certificate in Logistic and Supply Chain Management">Certificate in Logistic and Supply Chain Management</option>
<option value="Certificate in Financial Management">Certificate in Financial Management</option>
<option value="Certificate in Human Resources Management">Certificate in Human Resources Management</option>

<option value="Certificate in Artificial Intelligence">
      Certificate in Artificial Intelligence</option>
<option value="Certificate in Cloud Computing">
   Certificate in Cloud Computing
</option>

<option value="Certificate in Cyber Security &
Ethical Hacking">
Certificate in Cyber Security &
    Ethical Hacking
</option>


<option value="Certificate in Information
Technology">Certificate in Information Technology
</option>
</select>
				  
				  </select>
									  </div>

									  <div class="form-group">
										<label for="sel1"><h6><font style="font-size:15px;">Campus</font><font style="color:red;font-size:35px;">*</font></h6></label>
										<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="campus" required="required">
											<option selected>Campus</option>
				<option value="Yangon Campus">Yangon Campus</option>
				<option value="Mandalay Campus">Mandalay Campus</option>
				<option value="Digital Campus">Digital Campus</option>
			
				</select>
									</div>
									  
						
									  
									  <div class="form-group" style="font-size: 15px;">
										<label for="usr"><h6><font style="font-size:15px;">Intake</font><font style="color:red;font-size:35px;">*</font></h6></label>
										<input type="text" class="form-control" id="usr" placeholder="Enter Intake" name="intake" oninput="this.className = ''" required>
									  </div>
									  
									  <script type="text/javascript">
						  function up2(){
							var reader=new FileReader();
							reader.onload= function(){
							var img= document.getElementById('img2');
							img.src=reader.result;
						  }
						  reader.readAsDataURL(event.target.files[0]);
						  }
						</script>
									  <div class="form-group">
										<label for="usr"><h6 style="font-size: 15px;">Choose Your Payment Screenshot (pay)<font style="color:red;font-size:35px;">*</font></h6></label>
										<br>
										<a href="" data-toggle="modal" data-target="#myModal2" style="text-decoration:none;">
										<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
										</a>

<!-- The Modal -->
<div class="modal fade" id="myModal2">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your Payment Screenshot</h5>
</div>

<!-- Modal body -->
<div class="modal-body">
<img src="" id="img2" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>
										
										<input type="file" oninput="this.className = ''" onchange="up2()" name="pay" class="form-control" required>
									 
									  </div>
									  
									  
						<script type="text/javascript">
						  function up3(){
							var reader=new FileReader();
							reader.onload= function(){
							var img= document.getElementById('img3');
							img.src=reader.result;
						  }
						  reader.readAsDataURL(event.target.files[0]);
						  }
						</script>
									  <div class="form-group">
									   <label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Front Image (nrcf)<font style="color:red;font-size:35px;">*</font></h6></label>
									   <br>
									   <a href="" data-toggle="modal" data-target="#myModal3" style="text-decoration:none;">
										<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
										</a>

<!-- The Modal -->
<div class="modal fade" id="myModal3">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your N.R.C Front Image</h5>
</div>

<!-- Modal body -->
<div class="modal-body">
<img src="" id="img3" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>											   
									 
									   <input type="file" oninput="this.className = ''" onchange="up3()" name="nrcf" class="form-control" required>
									  
									  </div>
									  
									  
					   <script type="text/javascript">
						  function up4(){
							var reader=new FileReader();
							reader.onload= function(){
							var img= document.getElementById('img4');
							img.src=reader.result;
						  }
						  reader.readAsDataURL(event.target.files[0]);
						  }
						</script>
									  <div class="form-group">
										<label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Back Image (nrcb)<font style="color:red;font-size:35px;">*</font></h6></label>
										<br>
										<a href="" data-toggle="modal" data-target="#myModal4" style="text-decoration:none;">
										<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
										</a>

<!-- The Modal -->
<div class="modal fade" id="myModal4">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="myModalLabel1">Your N.R.C Back Image</h5>
</div>

<!-- Modal body -->
<div class="modal-body">
<img src="" id="img4" class="img-fluid">
</div>

<!-- Modal footer -->
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>

</div>
</div>
</div>  
										
										<input type="file"  oninput="this.className = ''" onchange="up4()" name="nrcb" class="form-control" required>
									  
									  </div>
									  
					</div>
					<div class="tab">
					  <h5>Personal Particulars</h5>
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Full Name <font color="red">*</font> </h6></label>
						   <input type="text" class="form-control" id="usr" placeholder="Enter Full Name" name="fullname" oninput="this.className = ''" required>
						</div>
						
					<div class="form-group form-check">
					<label for="usr">
						<h6 style="font-size: 15px;">Gender<font style="color:red;font-size:35px;">*</font></h6>  </label>
						<table>
						  <tr>
						<td>Male<input type="radio" name="gender" value="male" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
				  
						<td>Female<input type="radio" name="gender" value="female" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
						</tr>
						</table>
				  
					</div>
						
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">D.O.B<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="date" class="form-control" id="usr" name="dob" placeholder="Enter Date Of Birth" oninput="this.className = ''" required>
						</div>
						
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">N.R.C<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="text" class="form-control" id="usr" name="nrc" placeholder="Enter N.R.C" oninput="this.className = ''" required>
						</div>
						
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Nationality<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="text" class="form-control" id="usr" name="nation" placeholder="Enter Nationality" oninput="this.className = ''" required>
						</div>
						
						 <div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Religion<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="text" class="form-control" id="usr" name="relig" placeholder="Enter Religion" oninput="this.className = ''" required>
						</div>
						
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Father Name<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="text" class="form-control" id="usr" name="father" placeholder="Enter Father Name" oninput="this.className = ''" required>
						</div>
						
						 <div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Student's Phone<font color="red" style="font-size:35px;">*</font> </h6></label>
						   <input type="text" class="form-control" id="usr" name="stu_ph" placeholder="Enter Student's Phone" oninput="this.className = ''" required>
						</div>
						
						<div class="form-group">
						   <label for="usr"><h6 style="font-size: 15px;">Student's Email<font style="color:red;font-size:35px;">*</font></h6></label>
						   <input type="email" class="form-control" id="usr" name="email" placeholder="Enter Student's Email" oninput="this.className = ''" required>
						</div>
						
			
					</div>
					
					
		
					
					<div class="tab" style="line-height: 2;text-align: justify;">
					<font style="color:red;">Terms & Conditions for MIBA University (Web platform Learning) Students</font>
				  <p style="text-align:justify;">
				  (၁) PPBS တွင် တက်ရောက်သင်ကြားနေကြသည့် ကျောင်းသားကျောင်းသူများအနေဖြင့် သင်ကြားမှု သင်ယူမှုတွင် ပိုမိုအာရုံစူးစိုက် သင်ကြားနိုင်ရန် နှင့် စနစ်ကျသော Online Learning သင်ကြားမှုပုံစံ ဖြစ်မြောက်စေရန်အတွက် အောက်ပါ စည်းကမ်းချက်များကို ကူညီ၍ လိုက်နာဆောင်ရွက်ပေးပါရန် လေးစားစွာဖြင့် မေတ္တာရပ်ခံအပ်ပါသည်။<br>
				  (၂) PPBS တွင် သင်ခန်းစာများအား Online မှတဆင့် လေ့လာသင်ယူရန်အတွက် သင်တန်းသား အကောင့်ပြုလုပ်ထားသည့် ကျောင်းသား ကျောင်းသူများသည် သတ်မှတ်ထားသော Registration Form တွင် မိမိတို့၏ ကိုယ်ရေးအချက်အလက်များကို ပြည့်စုံစွာ ထည့်သွင်းရမည်ဖြစ်ပါသည်။<br>
				  (၃) Online ကျောင်းသား ကျောင်းသူများသည် မိမိ၏ User Account နှင့် Password အား အခြားသူများသို့ လွှဲပြောင်းခြင်း သို့မဟုတ် ငှားရမ်းခြင်းများ မပြုရပါ။ မိမိ၏ User Account နှင့် Password အား အခြားသူများ မသိရှိစေရန် အထူးသတိပြုရန် လိုအပ်ပါသည်။<br>
				  (၄) Online ကျောင်းသား ကျောင်းသူများ၏ ပေါ့ဆမှုကြောင့် မိမိ၏ User Account အား အခြားသူများမှ ဝင်ရောက် အသုံးပြု ပြီး မိမိ၏ ကိုယ်ရေးကိုယ်တာ အချက်အလက်များအား ရယူသွားခဲ့ပါက MIBA University  မှ လုံးဝ (လုံးဝ) တာဝန်ယူမည် မဟုတ်ပါ။<br>
				  (၄) Online ကျောင်းသား ကျောင်းသူများသည် မိမိ၏ User Account အား အခြားသူများမှ တရားမဝင် အသုံးပြုနေသည်ကို ရှာဖွေတွေ့ရှိလျှင် MIBA University ထံသို့ ချက်ချင်း အသိပေးရမည်ဖြစ်သည်။<br>
				  (၅) PPBS Online Platform တွင်ရှိသော စာသင်ကြားသည့် အကောင့်များအား ပြုပြင်ထိန်းသိမ်းရန်လိုအပ်လာပါက MIBA University ဘက်မှ ကြိုတင်အကြောင်းကြား၍ဖြစ်စေ အကြောင်းမကြားပဲဖြစ်စေ ပြုပြင်ပြောင်းလဲမှု ပြုလုပ်မည်ကို သဘောတူလက်ခံရပါမည်။<br>
				  (၆) Online ကျောင်းသား ကျောင်းသူများသည် သင်ခန်းစာနှင့် သက်ဆိုင်သော Assignments များ၊ Quiz များ Exam များဖြေဆိုခြင်းကို မိမိကိုယ်တိုင် တာဝန်ယူ လုပ်ဆောင်ရပါမည်။<br>
				  (၇) Online ကျောင်းသား ကျောင်းသူများသည် သတ်မှတ်ထားသော သင်တန်းကာလအတွင်းသာ သင်ခန်းစာများကို လေ့လာသင်ယူခွင့်ရမည်ဖြစ်ပြီး သင်တန်းကာလ ကျော်လွန်သည်အထိ သင်ယူလေ့လာမှု မပြီးမြောက်သေးသဖြင့် သင်တန်းကာလ ထပ်မံတိုးမြှင့်လိုပါက MIBA University သို့ အကြောင်းကြားပြီး သတ်မှတ်ထားသော သင်တန်းကာလအား တစ်ကြိမ်သာ တိုးမြှင့်နိုင်မည်ဖြစ်ပါသည်။<br>
				  (၈) သတ်မှတ်ထားသော သင်တန်းကာလ တစ်ကြိမ်တိုးမြှင့်ပြီးသည့်အထိ သင်ယူလေ့လာမှု မပြီးမြောက်သေးပါက သင်တန်းကြေး ထပ်မံပေးသွင်းမှသာလျှင် ပြန်လည်သင်ယူလေ့လာခွင့် ရရှိနိုင်မည်ဖြစ်ပါသည်။<br>
				  (၉) သတ်မှတ်ထားသော သင်တန်းကာလများမှာ -<br>
				  (၉.၁) Diploma သင်တန်းများအတွက် သင်တန်းအပ်နှံသည့်နေ့မှစ၍ သင်ယူလေ့လာချိန် (၅) လ ရရှိမည်ဖြစ်ပြီး ၊ သင်တန်းကာလအတွင်း သင်ယူမှုမပြီးမြောက်ပါက တစ်လထပ်မံတိုးမြင့်နိုင်ပါသည်။တစ်ကြိမ်ထပ်မံတိုးမြှင့် တိုင်း 20,000 ကျပ်ပေးသွင်းရမည်ဖြစ်ပါသည်။<br>
				  (၁၀) သင်တန်းပြီးဆုံး၍ သင်တန်းဆင်းလက်မှတ် (Certificate) များ ထုတ်ယူရန် အကြောင်းကြားသည့်အချိန် မှစ၍ (၁ လ) အတွင်း လာရောက်ထုတ်ယူရမည် ဖြစ်ပြီး (၁ လ) ထက်ကျော်လွန်ပါက နောက်ကျထုတ်ကြေး (၁၀,၀၀၀) ကျပ် ပေးသွင်းရမည် ဖြစ်သည်။<br><br>
				  
				  <font style="color:red;">Payment Policy</font><br>
				  (၁) ကျောင်းသားကျောင်းသူများသည် Down payment ပြည့်မီအောင် သွင်းပြီးမှသာလျှင် E Learning Class တွင် ဝင်ရောက်ခွင့် ရမည်ဖြစ်သည်။<br>
				  (၂) သင်တန်းအပ်နှံပြီးပါက မည်သည့် သင်တန်းကြေးကိုမှ ပြန်လည် ထုတ်ယူခွင့် မပြုပါ။<br>
				  (၃) သတ်မှတ်ရက်အတွင်း ပေးသွင်းရန်ကျန်သည့် Payment များကို အချိန်မှီ ပေးသွင်းရမည်။<br>
				  (၄) Payment သွင်းရန်ကျန်ရှိသော ကျောင်းသားကျောင်းသူများအား E Learning class တွင် ဝင်ရောက်သင်ယူမှုနှင့် Google Classroom အသုံးပြုမှုကို ရပ်ဆိုင်းသွားမည် ဖြစ်သည်။<br>
				  
					( အထက်ပါ အချက်အလက်များကို သိရှိနားလည် သဘောတူပါသည်။)<br><br>
				  </p>
				  <div class="switch-wrap d-flex justify-content-between">
								
								<div class="primary-checkbox">
							
									<input type="checkbox" id="primary-checkbox">
									<label for="primary-checkbox"></label>
									<br><br>
									Agree 
								
								</div>
							</div>
				
				  
					</div>
					
					<div style="overflow:auto;">
					  <div style="float:right;">
						<button type="button" class="btn btn-primary" id="prevBtn" onclick="nextPrev(-1)" style="width:150px;">Previous</button>
						<button type="button" class="btn btn-danger" id="nextBtn" onclick="nextPrev(1)" style="width:150px;">Next</button>
					  </div>
					</div>
					<!-- Circles which indicates the steps of the form: -->
					<div style="text-align:center;margin-top:40px;">
					  <span class="step"></span>
					  <span class="step"></span>
					  <span class="step"></span>
					  <span class="step"></span>
					  <span class="step"></span>
					</div>
				  </form>
			</div>
		</div>
	</div>


</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ppbs\resources\views/frontend/certificate/index.blade.php ENDPATH**/ ?>