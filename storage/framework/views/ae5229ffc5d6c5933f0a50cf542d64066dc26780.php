


<?php $__env->startSection('content'); ?>
	    <!-- End banner Area -->
	    <!-- Start search-course Area -->
		<section id="about" class="about" style="color:#000;padding-top:10px;">

	        <div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-12 col-md-6 search-course-right section-gap">


	<h3 style="text-align:center">Lincoln MBA</h3>
	<?php if($errors->any()): ?>

<div class="alert alert-primary" style="color:#000;">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>

<?php if(Session::has('success')): ?>
	<div class="alert alert-primary" style="color:#000;">
		<?php echo e(Session::get('success')); ?>

		<?php
			Session::forget('success');
		?>
	</div>
<?php endif; ?>
	                    <form id="regForm" action="<?php echo e(route('lincolnmba.store')); ?>" method="post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<h3><img src="<?php echo e(asset('images/logo/lin.png')); ?>" class="img-fluid" style="height:50px;"></h3>
							<!-- One "tab" for each step in the form: -->
							<div class="tab">
							  <font style="color:red;font-size:20px;">*</font> required<br>
			
											  <div class="form-group">
												<label for="usr"><h6><font style="font-size: 15px;">Choose Your Profile Photo (pro)</font><font style="color:red;font-size:30px;">*</font></h6></label>
												<br>
												<a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a><br><br>

 <!-- The Modal -->
 <div class="modal fade" id="myModal1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your Profile photo</h5>
      
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
												<p id="prosize"></p>
	                                            <p id="pro" style="color:red;"></p>
												<input type="file"  oninput="this.className = ''" required="required" onchange="up1()" name="pro" class="form-control" id="proid"  required>
											  
											  </div>
							  
										  
							<div class="form-group" style="font-size: 15px;">
							<label for="sel1"><h6><font style="font-size:15px;">Subject</font><font style="color:red;font-size:30px;">*</font></h6></label>
							<input type="text" class="form-control" id="usr"  name="course" value="Lincoln MBA" oninput="this.className = ''" readonly>
 							</div>


						
							 <div class="form-group">
							<label for="usr"><h6><font style="font-size: 15px;">
							Upload Your Degree [pdf only] (degreefile)
						</font><font style="color:red;font-size:20px;">*</font></h6></label><br>
							<a href="" data-toggle="modal" data-target="#myModalde" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>
												<br><br>
												<p id="degsize"></p>
	                                            <p id="deg" style="color:red;"></p>
												<input type="file"  oninput="this.className = ''" required="required" onchange="up1de()" name="degreefile" class="form-control" id="degid" required>
						
							<!-- The Modal -->
 <div class="modal fade" id="myModalde">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your Degreefile (only pdf)</h5>
      
       </div>

        <!-- Modal body -->
        <div class="modal-body">
        <iframe src="" id="img1de" style="width:100%;height: 600px;" class="img-fluid"></iframe>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
						</div>


											  <div class="form-group">
												<label for="sel1"><h6><font style="font-size:15px;">Campus</font><font style="color:red;font-size:20px;">*</font></h6></label>
												<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="campus" required="required">
													<option selected>Campus</option>
						<option value="Yangon Campus">Yangon Campus</option>
						<option value="Mandalay Campus">Mandalay Campus</option>
						<option value="Digital Campus">Digital Campus</option>
					
						</select>
											</div>
											  
								
											  
											  <div class="form-group" style="font-size: 15px;">
												<label for="usr"><h6><font style="font-size:15px;">Intake</font><font style="color:red;font-size:20px;">*</font></h6></label>
												<input type="text" class="form-control" id="usr" placeholder="Enter Intake" name="intake" oninput="this.className = ''" required>
											  </div>
											  
					
											  <div class="form-group">
												<label for="usr"><h6 style="font-size: 15px;">Choose Your Payment Screenshot (pay)<font style="color:red;font-size:20px;">*</font></h6></label>
												<br>
												<a href="" data-toggle="modal" data-target="#myModal2" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>

 <!-- The Modal -->
 <div class="modal fade" id="myModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your Payment Screenshot Image </h5>
      
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
												<br><br>
												<p id="paysize"></p>
	                                            <p id="pay" style="color:red;"></p>
												<input type="file" oninput="this.className = ''" onchange="up2()" name="pay" class="form-control" id="payid" required>
											 
											  </div>
			
											  <div class="form-group">
											   <label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Front Image (nrcf)<font style="color:red;font-size:20px;">*</font></h6></label>
											   <br>
											   <a href="" data-toggle="modal" data-target="#myModal3" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>

 <!-- The Modal -->
 <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your N.R.C Front Image </h5>
      
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
											 <br><br>
												<p id="nrcfsize"></p>
	                                            <p id="nrcf" style="color:red;"></p>
											   <input type="file" oninput="this.className = ''" onchange="up3()" name="nrcf" class="form-control" id="nrcfid" required>
											  
											  </div>
				
											  <div class="form-group">
												<label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Back Image (nrcb)<font style="color:red;font-size:20px;">*</font></h6></label>
												<br>
												<a href="" data-toggle="modal" data-target="#myModal4" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>

 <!-- The Modal -->
 <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your N.R.C Back Image </h5>
      
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
												<br><br>
												<p id="nrcbsize"></p>
	                                            <p id="nrcb" style="color:red;"></p>
												<input type="file"  oninput="this.className = ''" onchange="up4()" name="nrcb" class="form-control" id="nrcbid" required>
											  
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
								<h6 style="font-size: 15px;">Gender<font style="color:red;font-size:20px;">*</font></h6>  </label>
								<table>
								  <tr>
								<td>Male<input type="radio" name="gender" value="male" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
						  
								<td>Female<input type="radio" name="gender" value="female" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
								</tr>
								</table>
						  
							</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">D.O.B<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="date" class="form-control" id="usr" name="dob" placeholder="Enter Date Of Birth" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">N.R.C<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="nrc" placeholder="Enter N.R.C" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Nationality<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="nation" placeholder="Enter Nationality" oninput="this.className = ''" required>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Religion<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="relig" placeholder="Enter Religion" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Father Name<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="father" placeholder="Enter Father Name" oninput="this.className = ''" required>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><font color="red">*</font> <h6 style="font-size: 15px;">Student's Phone</h6></label>
								   <input type="text" class="form-control" id="usr" name="stu_ph" placeholder="Enter Student's Phone" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Student's Email<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="email" placeholder="Enter Student's Email" oninput="this.className = ''" value="<?php echo e(Auth::user()->email); ?>" readonly>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Student's Address<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="address" placeholder="Enter Student's Address" oninput="this.className = ''" required>
								</div>
								
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Occupation</h6></label>
								   <input type="text" class="form-control" id="usr" name="occupation" value="-" placeholder="Enter Occupation" oninput="this.className = ''">
								</div>
								
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Company's Name</h6></label>
								   <input type="text" class="form-control" id="usr" name="com_name" value="-" placeholder="Enter Company's Name" oninput="this.className = ''">
								</div>
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Company's Phone</h6></label>
								   <input type="text" class="form-control" id="usr" name="com_ph" value="-" placeholder="Enter Company's Name" oninput="this.className = ''">
								</div>
								
							</div>
							<div class="tab">
							  <h5>Academic Qualifications</h5>
								<div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Academic Year</h6></label>
								   <input type="text" class="form-control" id="usr" name="ad_year" value="-" placeholder="Enter Academic Year" oninput="this.className = ''">
								</div>
								
								<div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">University</h6></label>
								   <input type="text" class="form-control" id="usr" name="university" value="-" placeholder="Enter Universty" oninput="this.className = ''">
								</div>
								
								<div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Degree</h6></label>
								   <input type="text" class="form-control" id="usr" name="degree" value="-" placeholder="Enter Degree" oninput="this.className = ''">
								</div>
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Major</h6></label>
								   <input type="text" class="form-control" id="usr" name="major" value="-" placeholder="Enter Major" oninput="this.className = ''">
								</div>
								
								<div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Qualification Year</h6></label>
								   <input type="text" class="form-control" id="usr" name="other_ql" value="-" placeholder="Enter Qualification Year" oninput="this.className = ''">
								</div>
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Location</h6></label>
								   <input type="text" class="form-control" id="usr" name="location" value="-" placeholder="Enter Location" oninput="this.className = ''">
								</div>
								
								<div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Certificate</h6></label>
								   <input type="text" class="form-control" id="usr" name="certificate" value="-" placeholder="Enter Certificate" oninput="this.className = ''">
								</div>
								
								 <div class="form-group">
								   <label for="usr"> <h6 style="font-size: 15px;">Date</h6></label>
								   <input type="text" class="form-control" id="usr" name="ad_date" value="-" placeholder="Enter Date" oninput="this.className = ''">
								</div>
							</div>
							
							<div class="tab">
							  <h5>Emergency Contact Information Please provide name, relationship and phone number of an emergency</h5>
							   <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Name<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="em_name" placeholder="Enter Name" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Relationship<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="em_rela" placeholder="Enter Relationship" oninput="this.className = ''" required>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Phone Number<font style="color:red;font-size:20px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="em_comph" placeholder="Enter Phone Number" oninput="this.className = ''" required>
								</div>
								 
							</div>
							
							<div class="tab" style="line-height: 2;text-align: justify;">
							<font style="color:red;">Terms & Conditions For LUC ODL E- Learning Class</font>
						  <p style="text-align:justify;">
1.	သင်ခန်းစာ ဗီဒီယိုဖိုင်များ၏ ၁၀၀%  ကြည့်ရှုလေ့လာပြီးမှသာလျှင် အတန်းချိန်များ ပြည့်မီသည်ဟု သတ်မှတ်မည်ဖြစ်ပါသည်။<br>
2.	 Lecturer များနှင့် Interactive Live Session များကိုလည်း သတ်မှတ်ရက်များတွင် မဖြစ်မနေ တက်ရောက်ရန်လိုအပ်ပြီး အဆိုပါ အတန်းများအားလုံး၏ ၈၀% ပြည့်မီစွာတက်ရောက်ရန် လိုအပ် ပါသည်။ မိမိ မတက်ရောက်နိုင်ပါက ကျောင်းသို့ ကြိုတင်အသိပေး အကြောင်းကြားရန် လိုအပ်ပါသည်။ Academic Coordinator မှ Attendance ကောက်ယူမည်ဖြစ်ပါသည်။<br>
3.	 Interactive Live Session များတွင် ဆရာ/ဆရာမများကို လေးစားသောအားဖြင့် မိမိတို့ အသုံးပြုသော ( Computer, Mobile Phone, iPad, Tablet) များ၏ Video Camera များအား ဖွင့်ထားပါရန်နှင့် အကြောင်းကိစ္စမရှိပဲ ပိတ်ထားခြင်း မပြုရပါ။
<br>
4.	Pacific Prime Business School ၏ E - Learning Portal တွင် တင်ပေးထားသော သင်ခန်းစာ video file များအား သင်ထောက်ကူအဖြစ် ကြည့်ရှုခွင့်ပေးထားခြင်းဖြစ်ပါသည်။ အဆိုပါသင်ခန်းစာများအား Download ပြုလုပ်ရန်ခွင့်ပြုမည် မဟုတ်ပါ။
<br>
5.	ကျောင်းသား ကျောင်းသူများသည် မိမိတို့၏ Account အတွက် သတ်မှတ်ထားသော Username နှင့် Password အား အခြားသူများသို့ လွှဲပြောင်းခြင်း သို့မဟုတ် ငှားရမ်းသုံးစွဲစေခြင်းများ မပြုလုပ်ရပါ။ မိမိ၏ Username နှင့် Password အား အခြားသူများမသိရှိစေရန် အထူးသတိပြုဖို့ လိုအပ်ပါသည်။ မိမိပေါ့ဆမှုကြောင့် အခြားသူများမှ ဝင်ရောက်အသုံးပြုပြီး မိမိ၏ ကိုယ်ရေး အချက်အလက်များအား ရယူသွားခဲ့ပါက  Pacific Prime Business School မှ လုံး၀ (လုံး၀)တာဝန်ယူမည် မဟုတ်ပါ။<br>
6.	ကျောင်းသား ကျောင်းသူများအနေဖြင့် မိမိတို့၏ User Account အား အခြားသူများမှ တရားမဝင်အသုံးပြုနေသည်ကို သိရှိသည်နှင့် တပြိုင်နက် ကျောင်းသို့ ချက်ချင်းအကြောင်းကြားရန် လိုအပ်ပါသည်။<br>
7.	Pacific Prime Business School ၏ E - Learning Portal ဖြင့် လေ့လာသင်ယူနေသော ကျောင်းသား ကျောင်းသူများ၏ User Account များအား ပြုပြင်ပြောင်းလဲမှုပြုလုပ်ရန် လိုအပ်ပါက ကျောင်းသားကျောင်းသူများအား အကြောင်းကြားပြီး ပြုပြင်ပြောင်းလဲမည် ဖြစ်ပါကြောင်း ကြိုတင်အသိပေးအပ်ပါသည်။<br>
8.	Pacific Prime Business School ၏ E - Learning Portal ဖြင့် လေ့လာသင်ယူနေသော ကျောင်းသား ကျောင်းသူများ၏ User Account များသုံးစွဲရာတွင် အဆင်မပြေမှုများရှိပါက သက်ဆိုင်ရာ Academic Team သို့ ရုံးချိန်အတွင်း ဆက်သွယ် အကြောင်းကြားနိုင်ပါသည်။ ၂၄ နာရီအတွင်း ကူညီဆောင်ရွက်ပေးသွားမည်ဖြစ်ပါသည်။<br>
9.	Discount များကို ပေါင်းစပ်ခံစားခွင့်မရှိပါ။ Discount တစ်မျိုးထဲသာ ခံစားခွင့်ရှိသည်။<br>
10.	.Friend Recommend Friend (FRF) ခံစားခွင့်ကို နောက်ဆုံး Payment တွင်သာ ခံစားခွင့်ရမည်ဖြစ်သည်။ <br>
11.	.ကျောင်းသား/သူများ Intake တစ်ခုမှ တစ်ခုသို့ ကူးပြောင်းတက်လိုလျှင် Deferment Form တင်ပေး ရမည်ဖြစ်ပြီး၊ Defer fees MMK 400,000/- ပေးသွင်းရမည်ဖြစ်သည်။<br>
12.	သတ်မှတ်ထားသော ကျောင်းလခများအား စည်းမျဥ်းစည်းကမ်းအရ ပေးသွင်းရန်ပျက်ကွက်ပါက သင်တန်း တက်ရောက်ခြင်းအား ဆိုင်းငံ့ထားမည်ဖြစ်ပြီး၊ ၄င်းကျောင်းသား/သူများ၏ Assignment များအား လက်ခံ စစ်ဆေးပေးမည်မဟုတ်ပါ။ ဘာသာရပ်ဆိုင်ရာ Exam များကိုလည်း ဝင်ရောက်ဖြေဆိုခွင့်ရှိမည် မဟုတ်ပါ။<br>
13.	.ကျောင်းလခများကို မည်သည့်အခြေအနေအကြောင်းနှင့်မျှ ပြန်လည်ထုတ်ပေးမည်မဟုတ်ပါ။<br>
14.	ကျောင်းလခဆိုသည်မှာ ကျောင်းသား/သူမှ ကျောင်းသို့ USD Dollar ဖြင့်ပေးသွင်းရခြင်းကို ဆိုလိုသည်။<br>
15.	ကျောင်းလခများပေးသွင်းချိန်တွင် AYA Bank ၏ Selling Price Rate အတိုင်း တွက်ချက်ပြီး မြန်မာ ကျပ်ငွေဖြင့်သာ ပေးသွင်းရန်ဖြစ်သည်။<br>
16.	အတန်းစသည့်နေ့တွင် Payment Plan အရ Down Payment ပြည့်မီမှသာ အတန်းတက်ရောက်ခွင့် ပြုမည် ဖြစ်သည်။<br>
17.	ကျောင်းသား/သူများအနေဖြင့် ပေးသွင်းရမည့်ကျောင်းလခများအား Payment Plan တွင်  သတ်မှတ်ထားသည့် ရက်အတိုင်း အတိအကျသွင်းပေးရမည်ဖြစ်သည်။ ၄င်းနေ့သည် ပိတ်ရက်ဖြစ်ပါက ရုံးဖွင့်ရက်တွင် ပေးသွင်း ရမည်။<br>
18.	ကျောင်းသား/သူများသည် ငွေပေးချေရာတွင် ကျောင်းသို့ပေးသွင်းရမည့်ငွေပမာဏကို ကျောင်း၌ငွေသားဖြင့် တိုက်ရိုက်ပေးချေခြင်း၊ Invoice တွင်ဖေါ်ပြထားသော မိမိရွေးချယ်ထားသည့် ဘဏ်အကောင့်များမှတဆင့် ပေးချေခြင်းတို့ကို ပြုလုပ်ပေးရမည်ဖြစ်သည်။<br>
19.	ဘဏ်ဖြင့်ပေးသွင်းရာ၌ Description တွင် ကျောင်းသား/သူ၏ အမည်နှင့် Intake ကို တိတိကျကျဖေါ်ပြပေး ရမည် ဖြစ်သည်။<br>
20.	ကျောင်းမှ သတ်မှတ်ထားသော ဘဏ်အကောင့် (သို့မဟုတ်) Payment Application သို့ ကျောင်းလခ ပေးသွင်းရန်နှင့် ဤကဲ့သို့ ပေးသွင်းခြင်းမပြုခြင်းကြောင့် ဖြစ်ပေါ်လာသောကိစ္စရပ်များကို ကျောင်းမှ တာဝန်ယူဖြေရှင်း ပေးမည် မဟုတ်ပါ။<br>
21.	Payment Plan အား မည်သည့်အခြေအနေအကြောင်းနှင့်မျှ ပြောင်းလဲပေးမည် မဟုတ်ပါ။<br>
22.	ကျောင်း၌ ငွေသားဖြင့် တိုက်ရိုက်ပေးချေလျှင် ကျောင်းမှငွေလက်ခံဖြတ်ပိုင်းကို ကျောင်းသား/သူသို့ ငွေလက်ခံ ရရှိသည့်နေ့တွင် တိုက်ရိုက်ထုတ်ပေးမည်ဖြစ်သည်။<br>
23.	ဘဏ်အကောင့်မှတစ်ဆင့်ပေးချေပါက ကျောင်းသား/သူသို့ ငွေပေးချေမှုလက်ခံရရှိသည့်နေ့မှ Working days (၅) ရက်အတွင်း Online မှတစ်ဆင့် ပေးပို့မည်ဖြစ်သည်။<br>
<br>
Admission Required Document List<br>
1) NRC Notary/Passport<br>
2) Bachelor Notary<br>
3) Household List Notary<br>
4) Work Recommendation Letter<br>
5) Passport Photo<br>
6) Bachelor Transcript List<br>
7) Matriculation Passed letter Notary<br>
8) Matriculation Exam Marks Notary<br>
9) Passport Scan<br>
10) CV form<br>
Please submit documents soft copy to Admission@ppbsmyanmar.com(email address)<br>

သတ်မှတ်ထားသော Documents များကို သင်တန်းဖွင့်ပြီး နှစ်ပတ်အတွင်း Admission department သို့ ပေးပို့ရမည်ဖြစ်သည်။<br>

(အထက်ပါ အချက်အလက်များကို သိရှိနားလည် သဘောတူပါသည်။)
<br><br>
						  </p>
						  <div class="switch-wrap d-flex justify-content-between">
										
										<div class="primary-checkbox">
									
											<input type="checkbox" id="primary-checkbox">
											<label for="primary-checkbox"></label>
											<br>
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
	    <!-- End search-course Area -->	
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/frontend/lincolnmbapage.blade.php ENDPATH**/ ?>