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
  <h1>Greetings from PPBS</h1>
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
        Lincoln MBA
        </th>
        <th>
        <img src="https://www.linkpicture.com/q/lin_1.jpg" width="100px"/>
        </th>                       
    <tr>
     <th colspan="4" style="color:#000;">{{$details['course']}}</th>
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
    <td>{{$details['fullname']}}</td>
    <td>{{$details['intake']}}</td>
    <td>{{$details['gender']}}</td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Email</td>
    <td>N.R.C</td>
    <td>Phone No:</td>
    <td>DOB</td>
    </tr> 

    <tr>
    <td>{{$details['email']}}</td>
    <td>{{$details['nrc']}}</td>
    <td>{{$details['stu_ph']}}</td>
    <td>{{$details['dob']}}</td>
    </tr>


    <tr style="color:#000;background-color:#38c9f5;">
    <td>Nationality</td>
    <td>Religion</td>
    <td>Father</td>
    <td>Address</td>
    </tr> 

    <tr style="color:#000;">
    <td>{{$details['nation']}}</td>
    <td>{{$details['relig']}}</td>
    <td>{{$details['father']}}</td>
    <td>{{$details['address']}}</td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Occupation</td>
    <td>Company Name</td>
    <td>Company Phone</td>
    <td></td>
    </tr> 

    <tr style="color:#000;">
    <td>{{$details['occupation']}}</td>
    <td>{{$details['com_name']}}</td>
    <td>{{$details['com_ph']}}</td>
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
    <td>{{$details['ad_year']}}</td>
    <td>{{$details['university']}}</td>
    <td>{{$details['degree']}}</td>
    <td>{{$details['major']}}</td>
    </tr>
    
    <tr style="color:#000;background-color:#38c9f5;">
    <td>Qualification Year</td>
    <td>Location</td>
    <td>Certificate</td>
    <td>Date</td>
    </tr> 

    <tr style="color:#000;">
    <td>{{$details['other_ql']}}</td>
    <td>{{$details['location']}}</td>
    <td>{{$details['certificate']}}</td>
    <td>{{$details['ad_date']}}</td>
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
    <td>{{$details['em_name']}}</td>
    <td>{{$details['em_rela']}}</td>
    <td>{{$details['em_comph']}}</td>
    <td>Agree</td>
    </tr>

    <tr>
    <td colspan="4" style="color:#000;">
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
    </td>
    </tr>

</table>
<p>Your Signature <font color="red"><i>{{$details['fullname']}}</i></font></p>
</body>
</html>
