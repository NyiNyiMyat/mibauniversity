<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPBS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  </style>
</head>
<body>

<div class="container-fluid" style="padding:10px;">
  <h1>Greetings from PPBS (SBS MBA)</h1>
  <p>for more information click below ->
      <br>
      <h3><a href="https://ppbs.education/"> ppbs education </a> </h3>
  </p> 
</div>

<table>   
<th>
        <img src="https://www.linkpicture.com/q/4_219.png" width="146px" height="65px"/>
        </th>
        <th colspan="2">
   
        </th>
        <th>
        <img src="https://www.linkpicture.com/q/sbs_1.png" width="100px"/>
        </th>                     
    <tr>
     <th colspan="4" style="color:#000;"><?php echo e($details['course']); ?></th>
    </tr>
    <tr>
     <th colspan="4" style="color:red;"> Personal Information</th>
    </tr>
         
    <tr style="color:#000;background-color:#38c9f5;">
    <td>Reg Date</td>
    <td>Full Name</td>
    <td>Intake</td>
    <td>Gender</td>
    </tr> 
    
    <tr style="color:#000;">
    <td><?php echo $date = date("M,d,Y h:i:s");?></td>
    <td><?php echo e($details['fullname']); ?></td>
    <td><?php echo e($details['intake']); ?></td>
    <td><?php echo e($details['gender']); ?></td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Email</td>
    <td>N.R.C</td>
    <td>Phone No:</td>
    <td>DOB</td>
    </tr> 

    <tr>
    <td><?php echo e($details['email']); ?></td>
    <td><?php echo e($details['nrc']); ?></td>
    <td><?php echo e($details['stu_ph']); ?></td>
    <td><?php echo e($details['dob']); ?></td>
    </tr>


    <tr style="color:#000;background-color:#38c9f5;">
    <td>Nationality</td>
    <td>Religion</td>
    <td>Father</td>
    <td>Address</td>
    </tr> 

    <tr style="color:#000;">
    <td><?php echo e($details['nation']); ?></td>
    <td><?php echo e($details['relig']); ?></td>
    <td><?php echo e($details['father']); ?></td>
    <td><?php echo e($details['address']); ?></td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Occupation</td>
    <td>Company Name</td>
    <td>Company Phone</td>
    <td></td>
    </tr> 

    <tr style="color:#000;">
    <td><?php echo e($details['occupation']); ?></td>
    <td><?php echo e($details['com_name']); ?></td>
    <td><?php echo e($details['com_ph']); ?></td>
    <td></td>
    </tr>

    <tr>
     <th colspan="4" style="color:red;"> Academic Qualifications</th>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Academic Year</td>
    <td>Universty</td>
    <td>Degree</td>
    <td>Major</td>
    </tr> 

    <tr style="color:#000;">
    <td><?php echo e($details['ad_year']); ?></td>
    <td><?php echo e($details['university']); ?></td>
    <td><?php echo e($details['degree']); ?></td>
    <td><?php echo e($details['major']); ?></td>
    </tr>
    
    <tr style="color:#000;background-color:#38c9f5;">
    <td>Qualification Year</td>
    <td>Location</td>
    <td>Certificate</td>
    <td>Date</td>
    </tr> 

    <tr style="color:#000;">
    <td><?php echo e($details['other_ql']); ?></td>
    <td><?php echo e($details['location']); ?></td>
    <td><?php echo e($details['certificate']); ?></td>
    <td><?php echo e($details['ad_date']); ?></td>
    </tr>

    <tr>
     <th class="table-primary" colspan="4" style="color:red;"> Emergency Contact Information Please provide name, relationship and phone number of an emergency</th>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Name</td>
    <td>Relationship</td>
    <td>Phone Number</td>
    <td>Agreement</td>
    </tr> 

    <tr style="color:#000;">
    <td><?php echo e($details['em_name']); ?></td>
    <td><?php echo e($details['em_rela']); ?></td>
    <td><?php echo e($details['em_comph']); ?></td>
    <td>Agree</td>
    </tr>

    <tr>
    <td colspan="4" style="color:#000;">
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
    </td>
    </tr>

</table>
<p>Your Signature <font color="red"><i><?php echo e($details['fullname']); ?></i></font></p>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/mailtemplates/sbs-mail.blade.php ENDPATH**/ ?>