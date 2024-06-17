@extends('frontend.layouts.master')

@section('content')
<main id="main">
<section class="counts section-bg">
    <div class="container-fluid">
        <div class="row">
             <div class="col-md-12">
                 <img src="{{asset('images/banner/1-3 (1).jpg')}}" class="img-fluid"  style="width:100%;">
             </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:30px;">
        <div class="row">
            <div class="col-md-8">
                
                 <h3 style="font-size:18px;color:#000;line-height:2;"><b>Privacy and Data Protection</b></h3>
                <h4 style="font-size:15px;color:#000;line-height:2;">
                    <p style="text-align:justify;">
Whether you are a student, business or community contact, or simply a visitor to our website, Pacific Prime Business School may need to process some personal information 
about you so that we can provide you with the correct service. 
Pacific Prime is committed to processing your personal information in a fair, legal and transparent manner, and takes appropriate steps to ensure that your personal 
information is well protected and your rights under Myanmar Laws.</p><hr>
In particular, when we collect and process your personal information, we promise to:<br>
<ul>
<li>Make sure you know why we need it;</li>
<li>Only ask for what we need, and not to collect excessive or irrelevant information;</li>
<li>Protect it and make sure nobody has access to it who shouldn't;</li>
<li>Let you know if we share it with other organisations to give you better services;</li>
<li>Make sure we don't keep it longer than necessary.</li>
</ul>

<b>In return, we ask you to:</b><br>
<ul>
<li>Give us accurate and up to date information;</li>
<li>Tell us as soon as possible if there are any changes, such as a new address.</li>
</ul>

<b>How we process your personal information</b><br>
<p style="text-align:justify;">
Our website does not capture or share your personal information unless you choose to provide it, for example on a contact form, to request a prospectus, 
or in line with our policy.<br>
We have adopted a robust Data Protection Policy, which outlines our approach to handling your personal information. For more information about how we handle 
your personal information, please click on the relevant privacy notice below. If you are unsure which notice relates to you, please contact us at 
<font style="color:blue;">dao@ppbsmyanmar.com.</font>
</p>
<hr>

<b>Your rights in relation to your personal information</b><br>
You have a number of rights in relation to your personal information, including the right to:<br>
<ul>
<li>be informed about what information we hold about you;</li>
<li>access your personal information that we hold about you;</li>
<li>rectify inaccuracies in personal information that we hold about you;</li>
<li>have your personal data removed from our systems;</li>
<li>restrict the processing of your personal data;</li>
<li>object to us processing your personal data by us;</li>
<li>obtain a copy of, or have us transfer, all of your personal data to a third party;</li>
<li>withdraw any consent you have given us to process your information for marketing purposes.</li>
</ul>
<hr>
<b>Tracking Cookies Data</b><br>
<p style="text-align:justify;">
We use cookies and similar tracking technologies to track the activity on our Service and hold certain information.
Cookies are files with small amount of data which may include an anonymous unique identifier. Cookies are sent to your browser from a website and stored on your device. Tracking technologies also used are beacons, tags, and scripts to collect and track information and to improve and analyze our Service.
You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use 
some portions of our Service.</p>
<hr>
<b>Raising a concern</b><br>
<p style="text-align:justify;">
If you have any concerns about the way we have processed your information, please let us know in the 
first instance by sending email to our Data Administration Officer directly , using the follow details.<br>
Data Administration Officer ( DAO )</p><hr>
By email: <font style="color:blue;">dao@ppbsmyanmar.com</font><br>
By phone: <br>
By mail   :  Pacific Prime Business School <br>
<p style="text-align:justify;">
If you remain unsatisfied after our complaints process has been completed, you can complain to CEO ,Pacific Prime Business School by email with <font style="color:blue;">ceo@ppbsmyanmar.com</font><br>
</p>

</h4>

            </div>
            
            <div class="col-md-4">
                
                <div style="background-color:lightgray;padding:5px;">
                      <div class="count-box" style="padding:10px;margin:10px;background-color:rgba(255, 255, 255, 0.93);">
                 <h4 style="font-size:18px;color:#000;line-height:2;"><b><a href="{{route('Alumni-Privacy-Notice')}}">Alumni Privacy Notice</a></b></h4>
             </div>
             
             <div class="count-box" style="padding:10px;margin:10px;background-color:rgba(255, 255, 255, 0.93);">
                 <h4 style="font-size:18px;color:#000;line-height:2;"><b><a href="{{route('Marketing-Privacy-Notice')}}">Marketing Privacy Notice</a></b></h4>
             </div>
             
              <div class="count-box" style="padding:10px;margin:10px;background-color:rgba(255, 255, 255, 0.93);">
                 <h4 style="font-size:18px;color:#000;line-height:2;"><b><a href="{{route('Student-Privacy-Notice')}}">Student Privacy Notice</a></b></h4>
             </div>
             
              <div class="count-box" style="padding:10px;margin:10px;background-color:rgba(255, 255, 255, 0.93);">
                 <h4 style="font-size:18px;color:#000;line-height:2;"><b><a href="{{route('Story-Photo-Privacy-Notice')}}">Story Photo Privacy Notice</a></b></h4>
             </div>
             
            
                </div>
           
            </div>
            
        </div>
    </div>
 
    
</section>
</main>
@endsection