@extends('frontend.layouts.master')


@section('content')

	    <!-- End banner Area -->
	    <!-- Start search-course Area -->
		<section id="about" class="about" style="color:#000;">

	        <div class="container">
<div class="row justify-content-between align-items-center">
<div class="col-lg-12 col-md-6 search-course-right section-gap">
		
</div>
@if ($errors->any())

<div class="alert alert-primary" style="color:#000;">
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

@if(Session::has('success'))
	<div class="alert alert-primary" style="color:#000;">
		{{ Session::get('success') }}
		@php
			Session::forget('success');
		@endphp
	</div>
@endif
	                    <form id="regForm" action="{{route('sbsmba.store')}}" method="post" enctype="multipart/form-data">
							@csrf
<h3><img src="{{asset('images/logo/sbs.png')}}" class="img-fluid" style="height:50px;"></h3>
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
												<p id="prosize"></p>
	                                            <p id="pro" style="color:red;"></p>
												<input type="file"  oninput="this.className = ''" required="required" onchange="up1()" name="pro" class="form-control" id="proid" required>
											   
											  </div>
							  
										  
							<div class="form-group" style="font-size: 15px;">
							<label for="sel1"><h6><font style="font-size:15px;">Subject</font><font style="color:red;font-size:20px;">*</font></h6></label>
							<input type="text" class="form-control" id="usr"  name="course" value="SBS MBA" oninput="this.className = ''" readonly>
 							</div>


						  <div class="form-group">
							<label for="usr"><h6><font style="font-size: 15px;">
							Upload Your Degree [pdf only] (degreefile)
						</font><font style="color:red;font-size:20px;">*</font></h6></label><br>
							<a href="" data-toggle="modal" data-target="#myModalde" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a><br><br>
												<p id="degsize"></p>
	                                            <p id="deg" style="color:red;"></p>
												<input type="file"  oninput="this.className = ''" required="required" onchange="up1de()" name="degreefile" id="degid" class="form-control" required>
						
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
												<label for="usr"><h6 style="font-size: 15px;">Choose Your Payment Screen (pay)<font style="color:red;font-size:20px;">*</font></h6></label>
												<br>
												<a href="" data-toggle="modal" data-target="#myModal2" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a><br><br>

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
												<p id="paysize"></p>
	                                            <p id="pay" style="color:red;"></p>
												<input type="file" oninput="this.className = ''" onchange="up2()" name="pay" class="form-control" id="payid" required>
											 
											  </div>
											  
			
											  <div class="form-group">
											   <label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Front Image (nrcf)<font style="color:red;font-size:20px;">*</font></h6></label>
											   <br>
											   <a href="" data-toggle="modal" data-target="#myModal3" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a><br><br>

 <!-- The Modal -->
 <div class="modal fade" id="myModal3">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your N.R.C Front  Photo</h5>
      
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
  </div>									    <p id="nrcfsize"></p>
	                                            <p id="nrcf" style="color:red;"></p>

											 
											   <input type="file" oninput="this.className = ''" onchange="up3()" name="nrcf" class="form-control" id="nrcfid" required>
											  
											  </div>
											  
											  
					
											  <div class="form-group">
												<label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Back Image (nrcb)<font style="color:red;font-size:20px;">*</font></h6></label>
												<br>
												<a href="" data-toggle="modal" data-target="#myModal4" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a><br><br>

 <!-- The Modal -->
 <div class="modal fade" id="myModal4">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
    
	  <div class="modal-header">
      <h5 class="modal-title" id="myModalLabel1">Your N.R.C Back Photo</h5>
      
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
								   <input type="text" class="form-control" id="usr" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Student's Email" oninput="this.className = ''" readonly>
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
							<font style="color:red;">Terms & Condition For SBS MBA Online Class</font>
						  <p style="text-align:justify;">
						      1.	SBS Swiss Business School MBA ကျောင်းသားကျောင်းသူများသည် Class Participation အတန်းချိန် (၇၅%) ပြည့်မှီအောင် တက်ရောက်ပေးရမည်ဖြစ်သည်။ (၇၅%) မပြည့်မှီပါက Attendance အတန်းခေါ်ချိန်အတွက် သတ်မှတ်ထားသော အမှတ်များ ရရှိမည် မဟုတ်ပါ။<br>
2.	ပြည်တွင်းပြည်ပမှ ဆရာ ဆရာမများ၏ အချိန် ဇယားသည် Weekneds စနေ၊ တနင်္ဂနွေနေ့များတွင် အနည်းငယ် အပြောင်းအလဲ ရှိနိုင်ပါသည်။<br>
3.	ကျောင်းသားကျောင်းသူများအနေဖြင့် Gathering Dinner  ကဲ့သို့သော Activities များ ပြုလုပ်ရာတွင် ကုန်ကျစရိတ်ကို ကျောင်းသားကျောင်းသူများအား စုပေါင်းကောက်ခံမှု ရှိနိုင်ပါသည်။ SBS အနေဖြင့် လိုအပ်သော ချိတ်ဆက်မှုများကို ဆောင်ရွက်ပေးမည်ဖြစ်ပါသည်။<br>
4.	Graduation Ceremony အတွက် ကုန်ကျစရိတ် ရှိနိုင်ပါသည်။<br>
5.	ဘာသာရပ်တစ်ခုခြင်းစီအတွက် အောင်မြင်ရန် သတ်မှတ်ထားသော Assignment နှင့် Exam ရမှတ်များ မပြည့်မှီခဲ့ပါက RESIT (Supplementary Assignments / Exam) ကို သတ်မှတ်ထားသည့်အချိန်အတွင်း ထပ်မံဖြေဆိုရမည် ဖြစ်ပါသည်။ RESIT (Supplementary Assignments / Exam) ကို ထပ်မံကျရူံးပါက အဆိုပါ ဘာသာရပ်အား အစမှ ပြန်လည်တက်ရောက်ပေးရပါမည်။<br>
6.	Thesis Supervising အတွက် သတ်မှတ်ထားသည့် Fees ကုန်ကျစရိတ်များ ရှိပါမည်။<br>
7.	SBS Swiss Business School MBA Program ၏ Graduate ဖြစ်ရန် သတ်မှတ်ထားသော CGPA သည် 3.0 ဖြစ်ပါသည်။ SBS Candidates များသည် ဘာသာရပ်အားလုံးပြီးဆုံးပါက SBS Exit Exam (SBS Evaluation Exam) ကို ဖြေဆိုရမည် ဖြစ်ပါသည်။ လမ်းညွှန်မှု Guidelines များကို ကျောင်းမှ အခါအားလျော်စွာ ပေးမည်ဖြစ်ပါသည်။ <br>
8.	ကျောင်းသားကျောင်သူများ၏ Personal Social Media နှင့် ပတ်သက်ပြီးကျောင်းမှ Communication အပိုင်းတွင် ပါဝင်ဆက်နွယ်မှု မရှိပါ။ ကျောင်းသို့ ဆက်သွယ်မှုအားလုံးကို Official Email info@ppbsmyanmar.com သို့ ကျောင်း၏ Opening Hours အတွင်း ဆက်သွယ်နိုင်ပါသည်။<br>
9. 	Discount များကို ပေါင်းစပ်ခံစားခွင့်မရှိပါ။ Discount တစ်မျိုးထဲသာ ခံစားခွင့်ရှိသည်။<br>
10.	Friend Recommend Friend (FRF) ခံစားခွင့်ကို နောက်ဆုံး Payment တွင်သာ ခံစားခွင့်ရမည်ဖြစ်သည်။ <br>
11. Friend Recommend Friend (FRF) ခံစားခွင့်ကို တက်ရောက်မည့်ကျောင်းသား/သူ၏ သတ်မှတ်ထားသော Payment Amount ပြည့်မီမှသာ ခံစားခွင့်ရမည်ဖြစ်သည်။<br>
12.	ကျောင်းသား/သူများ Intake တစ်ခုမှ တစ်ခုသို့ ကူပြောင်းတက်လိုလျှင် Deferment Form တင်ပေး ရမည်ဖြစ်ပြီး၊ Defer fees MMK 400,000/- ပေးသွင်းရမည်ဖြစ်သည်။<br>
13.	သတ်မှတ်ထားသော ကျောင်းလခများအား စည်းမျဥ်းစည်းကမ်းအရ ပေးသွင်းရန်ပျက်ကွက်ပါက သင်တန်း တက်ရောက်ခြင်းအား ဆိုင်းငံ့ထားမည်ဖြစ်ပြီး၊ ၄င်းကျောင်းသား/သူများ၏ Assignment များအား လက်ခံ စစ်ဆေးပေးမည်မဟုတ်ပါ။ ဘာသာရပ်ဆိုင်ရာ Exam များကိုလည်း ဝင်ရောက်ဖြေဆိုခွင့်ရှိမည် မဟုတ်ပါ။<br>
14.	ကျောင်းလခများကို မည်သည့်အခြေအနေအကြောင်းနှင့်မျှ ပြန်လည်ထုတ်ပေးမည်မဟုတ်ပါ။<br>
15.	ကျောင်းလခဆိုသည်မှာ ကျောင်းသား/သူမှ ကျောင်းသို့ USD Dollar ဖြင့်ပေးသွင်းရခြင်းကို ဆိုလိုသည်။<br>
16.	ကျောင်းလခများပေးသွင်းချိန်တွင် AYA Bank ၏ Selling Price Rate အတိုင်း တွက်ချက်ပြီး မြန်မာ ကျပ်ငွေဖြင့်သာ ပေးသွင်းရန်ဖြစ်သည်။<br>
17.	အတန်းစသည့်နေ့တွင် Payment Plan အရ Down Payment ပြည့်မီမှသာ အတန်းတက်ရောက်ခွင့် ပြုမည် ဖြစ်သည်။<br>
18.	ကျောင်းသား/သူများအနေဖြင့် ပေးသွင်းရမည့်ကျောင်းလခများအား Payment Plan တွင်  သတ်မှတ်ထားသည့် ရက်အတိုင်း အတိအကျသွင်းပေးရမည်ဖြစ်သည်။ ၄င်းနေ့သည် ပိတ်ရက်ဖြစ်ပါက ရုံးဖွင့်ရက်တွင် ပေးသွင်း ရမည်။<br>
19.	ကျောင်းသား/သူများသည် ငွေပေးချေရာတွင် ကျောင်းသို့ပေးသွင်းရမည့်ငွေပမာဏကို ကျောင်း၌ငွေသားဖြင့် တိုက်ရိုက်ပေးချေခြင်း၊ Invoice တွင်ဖေါ်ပြထားသော မိမိရွေးချယ်ထားသည့် ဘဏ်အကောင့်များမှတဆင့် ပေးချေခြင်းတို့ကို ပြုလုပ်ပေးရမည်ဖြစ်သည်။<br>
20.	ဘဏ်ဖြင့်ပေးသွင်းရာ၌ Description တွင် ကျောင်းသား/သူ၏ အမည်နှင့် Intake ကို တိတိကျကျဖေါ်ပြပေး ရမည် ဖြစ်သည်။<br>
21.	ကျောင်းမှ သတ်မှတ်ထားသော ဘဏ်အကောင့် (သို့မဟုတ်) Payment Application သို့ ကျောင်းလခ ပေးသွင်းရန်နှင့် ဤကဲ့သို့ ပေးသွင်းခြင်းမပြုခြင်းကြောင့် ဖြစ်ပေါ်လာသောကိစ္စရပ်များကို ကျောင်းမှ တာဝန်ယူဖြေရှင်း ပေးမည် မဟုတ်ပါ။<br>
22.	Payment Plan အား မည်သည့်အခြေအနေအကြောင်းနှင့်မျှ ပြောင်းလဲပေးမည် မဟုတ်ပါ။<br>
23.	ကျောင်း၌ ငွေသားဖြင့် တိုက်ရိုက်ပေးချေလျှင် ကျောင်းမှငွေလက်ခံဖြတ်ပိုင်းကို ကျောင်းသား/သူသို့ ငွေလက်ခံ ရရှိသည့်နေ့တွင် တိုက်ရိုက်ထုတ်ပေးမည်ဖြစ်သည်။<br>
24. ဘဏ်အကောင့်မှတစ်ဆင့်ပေးချေပါက ကျောင်းသား/သူသို့ ငွေပေးချေမှုလက်ခံရရှိသည့်နေ့မှ Working days (၅) ရက်အတွင်း Online မှတစ်ဆင့် ပေးပို့မည်ဖြစ်သည်။<br>

Admission Required Document List<br>
1)	NRC Notary <br>
2)	Bachelor and Transcript Notry<br>
3)	Work Recommendation Letter<br>
4)	Passport Photo<br>
5)	CV Form<br>
6)	 Passport Scan	<br>

Please submit documents soft copy to Admission@ppbsmyanmar.com (email address)
သတ်မှတ်ထားသော Documents များကို သင်တန်းဖွင့်ပြီး နှစ်ပတ်အတွင်း Admission department သို့ ပေးပို့ရမည်ဖြစ်သည်။<br>

(အထက်ပါ အချက်အလက်များကို သိရှိနားလည် သဘောတူပါသည်။)

						<br><br>
				
						  </p>
						  <div class="switch-wrap d-flex justify-content-between">
										
										<div class="primary-checkbox">
									
											<input type="checkbox" id="primary-checkbox">
											<label for="primary-checkbox"></label>
											
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
@endsection


