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

    </td>
    </tr>

</table>
<p>Your Signature <font color="red"><i><?php echo e($details['fullname']); ?></i></font></p>
</body>
</html>
<?php /**PATH /home/u921554399/domains/ppbsmyanmar.com/public_html/resources/views/backend/mailtemplates/sbs-mail.blade.php ENDPATH**/ ?>