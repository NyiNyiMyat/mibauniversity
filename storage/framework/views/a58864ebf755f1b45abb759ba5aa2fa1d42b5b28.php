<!DOCTYPE html>
<html lang="en">
<head>
  <title>PPBS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

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
    <tr>
        <th>
        <img src="https://www.linkpicture.com/q/4_219.png" width="146px" height="65px"/>
        </th>
        <th colspan="2">
        Thanks For Your Contact!
        </th>
        <th>
       
        </th>
    </tr>                       
    <tr>
  
    </tr>
    <tr>
     <th colspan="4" style="color:red;"> Personal Information</th>
    </tr>
         
    <tr style="color:#000;background-color:#38c9f5;">
    <td>Enquiry Date</td>
    <td>Full Name</td>
    <td>email</td>
    <td>Phone</td>
    </tr> 
    
    <tr style="color:#000;">
    <td><?php echo $date = date("M,d,Y h:i:s");?></td>
    <td><?php echo e($details['fullname']); ?></td>
    <td><?php echo e($details['email']); ?></td>
    <td><?php echo e($details['phone']); ?></td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Age</td>
    <td>Working Experience</td>
    <td>Education Backgorund</td>
    <td>Course</td>
    </tr> 


    <tr style="color:#000;">
    <td><?php echo e($details['age']); ?></td>
    <td><?php echo e($details['work_experience']); ?></td>
    <td><?php echo e($details['education_background']); ?></td>
    <td><?php echo e($details['course']); ?></td>
    </tr>

    <tr style="color:#000;background-color:#38c9f5;">
    <td>Location</td>
    <td colspan="3">Message</td>
    </tr> 

    <tr>
    <td><?php echo e($details['location']); ?></td>
    <td colspan="3"><?php echo e($details['message']); ?></td>
    </tr>


</table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ppbs\resources\views/backend/mailtemplates/enquiry-mail.blade.php ENDPATH**/ ?>