@extends('frontend.layouts.master')

@section('content')

	    <!-- End banner Area -->
	    <!-- Start search-course Area -->
	    <section class="search-course-area relative">
	        <div class="overlay overlay-bg"></div>
	        <div class="container">
	            <div class="row justify-content-between align-items-center">
	          

	                <div class="col-lg-12 col-md-6 search-course-right section-gap">
					@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="container">
@if(Session::has('success'))
		<div class="alert alert-success">
			{{ Session::get('success') }}
			@php
				Session::forget('success');
			@endphp
		</div>
@endif
</div>



	                    <form id="regForm" action="{{route('certificate.store')}}" method="POST" enctype="multipart/form-data">
							@csrf
						<h3><img src="{{asset('adminDemo/images/logo/4.png')}}" class="img-fluid" style="width:100px;"></h3>
							<!-- One "tab" for each step in the form: -->
							<div class="tab">
							  <font style="color:red;font-size:30px;">*</font> required<br>
							  <div class="form-group">
												<label for="usr"><h6><font style="font-size: 15px;">Choose Your Profile Photo (pro)</font><font style="color:red;font-size:30px;">*</font></h6></label>
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
												<label for="sel1"><h6><font style="font-size:15px;">Course</font><font style="color:red;font-size:30px;">*</font></h6></label>
												  <select class="form-select form-select-lg" aria-label="Default select example" name="course" required="required">
													  <option selected>Select Your Course</option>
						  <option value="Professional Diploma in Sales & Sales Management">Professional Diploma in Sales & Sales Management</option>
						  
						  <option value="Professional Diploma in Accounting & Financial Management ">
						  Professional Diploma in Accounting & Financial Management </option>
						  
						  <option value="Professional Diploma in International Business Administration">Professional Diploma in International Business Administration </option>
						  
						  <option value="Professional Diploma in Digital Marketing">
						  Professional Diploma in Digital Marketing </option>
						  
						  <option value="Professional Diploma in Project Management">
						  Professional Diploma in Project Management</option>
						  
						  <option value="Professional Diploma in Human Capital Management & Development">
						  Professional Diploma in Human Capital Management & Development</option>
						  
						  <option value="Professional Diploma in Hospital Management">
						  Professional Diploma in Hospital Management</option>
						  
						  <option value="Diploma in Business English">
						  Diploma in Business English </option>
						  
						  <option value="Professional Mini MBA">
						  Professional Mini MBA</option>
						  
						  <option value="Professional Diploma in Supply Chain Management">
						  Professional Diploma in Supply Chain Management</option>
						  
						  <option value="Professional Diploma in Fashion">
						  Professional Diploma in Fashion</option>
						  
						  <option value="Professional Diploma in Banking & Finance">
						  Professional Diploma in Banking & Finance</option>
						  
						  <option value="Professional Diploma in Artificial Intelligence">
						  Professional Diploma in Artificial Intelligence</option>
						  
						  <option value="Professional Diploma in Cloud Computing">
						  Professional Diploma in Cloud Computing
						  </option>
						  
						  <option value="Professional Diploma in Cyber Security &
						  Ethical Hacking">
						  Professional Diploma in Cyber Security &
						  Ethical Hacking
						  </option>
						  <option value="Professional Diploma in Information
						  Technology">Professional Diploma in Information Technology
						  </option>
						  
						  </select>
											  </div>

											  <div class="form-group">
												<label for="sel1"><h6><font style="font-size:15px;">Campus</font><font style="color:red;font-size:30px;">*</font></h6></label>
												<select class="form-select form-select-lg" aria-label="Default select example" name="campus" required="required">
													<option selected>Campus</option>
						<option value="Yangon Campus">Yangon Campus</option>
						<option value="Mandalay Campus">Mandalay Campus</option>
						<option value="Digital Campus">Digital Campus</option>
					
						</select>
											</div>
											  
								
											  
														
											  
											<div class="form-group" style="font-size: 15px;">
												<label for="usr"><h6><font style="font-size:15px;">Intake</font><font style="color:red;font-size:30px;">*</font></h6></label>
												<input type="text" class="form-control" id="usr" placeholder="Enter Intake" name="intake" oninput="this.className = ''" required>
											  </div>

											  <div class="form-group" style="font-size: 15px;">
                                          <label for="sel1"><h6><font style="font-size:15px;">Learning Type</font><font style="color:red;font-size:30px;">*</font></h6></label>
                                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="type" required="required">
                                          
                    <option value="Face To Face On Campus">Face To Face On Campus</option>
                    <option value="E-Learning Platform">E-Learning Platform</option>
                    <option value="Online Learning (Zoom Class)">Online Learning (Zoom Class)</option>
                
                    </select>
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
												<label for="usr"><h6 style="font-size: 15px;">Choose Your Payment Screen<font style="color:red;font-size:30px;">*</font></h6></label>
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
												
												<input type="file" oninput="this.className = ''" onchange="up2()" name="pay" class="form-control-file border" required>
											 
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
												<label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Front Image<font style="color:red;font-size:30px;">*</font></h6></label>
											   
												<br>
											   <a href="" data-toggle="modal" data-target="#myModal3" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>

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
  </div>											   
											 
												<input type="file" oninput="this.className = ''" onchange="up3()" name="nrcf" class="form-control-file border" required>
											  
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
												<label for="usr"><h6 style="font-size: 15px;">Choose Your N.R.C Back Image<font style="color:red;font-size:30px;">*</font></h6></label>
											   
												<br>
												<a href="" data-toggle="modal" data-target="#myModal4" style="text-decoration:none;">
												<img src="https://img.icons8.com/external-color-for-better-life-royyan-wijaya/20/000000/external-eye-user-interface-color-for-better-life-royyan-wijaya.png"/> Preview
												</a>

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
												<input type="file"  oninput="this.className = ''" onchange="up4()" name="nrcb" class="form-control-file border" required>
											  
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
								<h6 style="font-size: 15px;">Gender<font style="color:red;font-size:30px;">*</font></h6>  </label>
								<table>
								  <tr>
								<td>Male<input type="radio" name="gender" value="male" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
						  
								<td>Female<input type="radio" name="gender" value="female" oninput="this.className = ''">&nbsp;&nbsp;&nbsp;</td>
								</tr>
								</table>
						  
							</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">D.O.B<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="date" class="form-control" id="usr" name="dob" placeholder="Enter Date Of Birth" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">N.R.C<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="nrc" placeholder="Enter N.R.C" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Nationality<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="nation" placeholder="Enter Nationality" oninput="this.className = ''" required>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Religion<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="relig" placeholder="Enter Religion" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Father Name<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="fathername" placeholder="Enter Father Name" oninput="this.className = ''" required>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Student's Phone <font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="stu_ph" placeholder="Enter Student's Phone" oninput="this.className = ''" required>
								</div>
								
								<div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Student's Email<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="email" placeholder="Enter Student's Email" oninput="this.className = ''" value="{{ Auth::user()->email }}" readonly>
								</div>
								
								 <div class="form-group">
								   <label for="usr"><h6 style="font-size: 15px;">Student's Address<font style="color:red;font-size:30px;">*</font></h6></label>
								   <input type="text" class="form-control" id="usr" name="address" placeholder="Enter Student's Address" oninput="this.className = ''" required>
								</div>

							</div>
		
							
							<div class="tab" style="line-height: 2;text-align: justify;">
							<font style="color:red;">Terms & Conditions for MIBA University (Web platform Learning) Students</font>
						  <p style="text-align:justify;">
						  (၁) AYEYARWADDY Business School တွင် တက်ရောက်သင်ကြားနေကြသည့် ကျောင်းသားကျောင်းသူများအနေဖြင့် သင်ကြားမှု သင်ယူမှုတွင် ပိုမိုအာရုံစူးစိုက် သင်ကြားနိုင်ရန် နှင့် စနစ်ကျသော Online Learning သင်ကြားမှုပုံစံ ဖြစ်မြောက်စေရန်အတွက် အောက်ပါ စည်းကမ်းချက်များကို ကူညီ၍ လိုက်နာဆောင်ရွက်ပေးပါရန် လေးစားစွာဖြင့် မေတ္တာရပ်ခံအပ်ပါသည်။<br>
						  (၂) AYEYARWADDY Business School တွင် သင်ခန်းစာများအား Online မှတဆင့် လေ့လာသင်ယူရန်အတွက် သင်တန်းသား အကောင့်ပြုလုပ်ထားသည့် ကျောင်းသား ကျောင်းသူများသည် သတ်မှတ်ထားသော Registration Form တွင် မိမိတို့၏ ကိုယ်ရေးအချက်အလက်များကို ပြည့်စုံစွာ ထည့်သွင်းရမည်ဖြစ်ပါသည်။<br>
						  (၃) Online ကျောင်းသား ကျောင်းသူများသည် မိမိ၏ User Account နှင့် Password အား အခြားသူများသို့ လွှဲပြောင်းခြင်း သို့မဟုတ် ငှားရမ်းခြင်းများ မပြုရပါ။ မိမိ၏ User Account နှင့် Password အား အခြားသူများ မသိရှိစေရန် အထူးသတိပြုရန် လိုအပ်ပါသည်။<br>
						  (၄) Online ကျောင်းသား ကျောင်းသူများ၏ ပေါ့ဆမှုကြောင့် မိမိ၏ User Account အား အခြားသူများမှ ဝင်ရောက် အသုံးပြု ပြီး မိမိ၏ ကိုယ်ရေးကိုယ်တာ အချက်အလက်များအား ရယူသွားခဲ့ပါက MIBA University  မှ လုံးဝ (လုံးဝ) တာဝန်ယူမည် မဟုတ်ပါ။<br>
						  (၄) Online ကျောင်းသား ကျောင်းသူများသည် မိမိ၏ User Account အား အခြားသူများမှ တရားမဝင် အသုံးပြုနေသည်ကို ရှာဖွေတွေ့ရှိလျှင် MIBA University ထံသို့ ချက်ချင်း အသိပေးရမည်ဖြစ်သည်။<br>
						  (၅) AYEYARWADDY Business School Online Platform တွင်ရှိသော စာသင်ကြားသည့် အကောင့်များအား ပြုပြင်ထိန်းသိမ်းရန်လိုအပ်လာပါက MIBA University ဘက်မှ ကြိုတင်အကြောင်းကြား၍ဖြစ်စေ အကြောင်းမကြားပဲဖြစ်စေ ပြုပြင်ပြောင်းလဲမှု ပြုလုပ်မည်ကို သဘောတူလက်ခံရပါမည်။<br>
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
						  <div class="form-check-inline">
							<label class="form-check-label">
						  
									 <input type="checkbox" class="form-check-input" id="c17" required="required" value="agree" name="sure[]" oninput="this.className = ''">
									 <br>
									 Agree<font style="color:red;font-size:30px;">*</font>
							 
							 </table>
							</label>
						  
						  </div>
						  <br><br>
						  
							</div>
							
							<div style="overflow:auto;">
							  <div style="float:right;">
								<button type="button" id="prevBtn" onclick="nextPrev(-1)" style="background-color: rgb(235, 135, 43);">Previous</button>
								<button type="button" id="nextBtn" onclick="nextPrev(1)" style="background-color: rgb(235, 135, 43);">Next</button>
							  </div>
							</div>
							<!-- Circles which indicates the steps of the form: -->
							<div style="text-align:center;margin-top:40px;">
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
				document.getElementById("nextBtn").innerHTML = "submit";
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