<?php
//check if the user coming from a request

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$company= filter_var($_POST['CompanyName'], FILTER_SANITIZE_STRING);
$user=filter_var($_POST['ContactPerson'], FILTER_SANITIZE_STRING);
$fax=$_POST['fax'];
$email=filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$city=filter_var($_POST['city'], FILTER_SANITIZE_STRING);
$country=filter_var($_POST['country'], FILTER_SANITIZE_STRING);
$subject=filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message=filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$telephone=filter_var($_POST['telephone'], FILTER_SANITIZE_NUMBER_INT);



$headers = 'From: '.$email;
$myEmail = 'mail@alqudrah-machinery.com';

mail($myEmail, $message, $headers);

$company= '';
$user= '';
$fax= '';
$email= '';
$city= '';
$country= '';
$subject= '';
$message= '';
$telephone='';

}
?>
<html>

<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alqudra Formwork & Scaffolding</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="style.css">
<script language="JavaScript" src="qudrahmncp/js/gen_validatorv4.js" type="text/javascript" xml:space="preserve"></script>

</head>

<body class="bgServices">
<header class="first-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container d-flex w-100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100 justify-content-center">
                <li class="nav-item">
                  <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                  <a href="Building_equipments_Services.htm" class="nav-link">Services</a>
                </li>
             
                <li class="nav-item">
                  <a href="Construction_Equipments_Contact.php" class="nav-link">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="Construction_Equipments_RoutMap.htm" class="nav-link">Sales</a>
                </li>
                <li class="nav-item aboutUs">
                  <a href="about-us.html" class="nav-link">About us</a>
                </li>
            </ul>
            </div>
          </div>
        </nav>
    </header>
    <header class="second-header">
      <div class="container d-none d-md-block">
          <div class="row ">
              <div class="col-md-4 logo d-flex justify-content-center "><img src="newImages/logo.png" alt="" width="100"></div>
              <div class="col-md-4 d-flex align-items-center row " style="text-align: center;height: 100px;">
                <div class="col-md-12"> <b style="color: #141447;" > Tel/Whatsapp -</b><span> 971561888019 </span></br></div>
                <div class="col-md-12"><b style="color: #141447;"> Email -</b><span> mail@alqudrah-machinery.com</span></div>
              </div>
              <div class="col-md-4 d-flex justify-content-center align-items-center " style="height: 100px;"><b style="color: #141447;">Sharjah </br>( UAE )</b></div>
          </div>
      </div>
      <div class="container d-md-none  d-sm-block">
        <div class="row second-header-sm">
            <div class="col-md-4 logo d-flex justify-content-center "><img src="newImages/logo.png" alt="" width="80"></div>
            <div class="col-md-4 d-flex align-items-center row " style="text-align: center;">
              <div class="col-md-12 "> <b style="color: #141447;" > Tel/Whatsapp -</b><span> 971561888019 </span></br></div>
              <div class="col-md-12 "><b style="color: #141447;"> Email -</b><span> mail@alqudrah-machinery.com</span></div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center " style="height: 100px;"><b style="color: #141447;">Sharjah </br>( UAE )</b></div>
        </div>
    </div>
    </header>
 
        <div class="container mt-5 mb-5">
          <div class="row d-flex justify-content-center d-none d-md-block">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.855472560749!2d55.6625185150124!3d25.342630383828844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9fdea6b04f0fe36!2zMjXCsDIwJzMzLjUiTiA1NcKwMzknNTMuMCJF!5e0!3m2!1sen!2seg!4v1660621548140!5m2!1sen!2seg" width="600" height="373"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="row d-flex justify-content-center d-md-none mb-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3605.855472560749!2d55.6625185150124!3d25.342630383828844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc9fdea6b04f0fe36!2zMjXCsDIwJzMzLjUiTiA1NcKwMzknNTMuMCJF!5e0!3m2!1sen!2seg!4v1660621548140!5m2!1sen!2seg" width="150" height="153"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        </div>

        <section  style="border-collapse: collapse" id="AutoNumber4">
            <div>
                          
                <div style="border-collapse: collapse" id="AutoNumber6" class="fontTable">
                  <div class="container">
                  
                      <h1 style="color:rgb(211, 158, 44);" class="row justify-content-center pt-3">Contact Us</h1><br>
  &nbsp;
  <div class="d-flex row justify-content-around align-items-center">
  <blockquote class="col-md-4 col-sm-12">

                    Tel - 971561888019 / 97165344522 <br>
                                  Whatsapp - +971561888019<br>

                    United Arab Emirates ( UAE )<br>Email - mail@alqudrah-machinery.com<br>
                    Al Sajaa Industrial, Sharjah,UAE P.O. Box 36313
                    <span><br>
                                <br>
                                
                    </span>
                    <b><span>Enquiry about Item ID</span></b></p>
  </blockquote>
  
  
    <img src="newImages/39.png" alt="" style="width: 400px;" class="col-md-4 col-sm-12">
   </div>
               </div>
               
             
                    <div class="container w-100 d-flex justify-content-center">
                   
                      
                    <form action="submit.html" method="POST" name="feedbackform" class="contact-form row  pt-5 w-50">
  
                    <div class="form-group ">
                        <label for="company">Company Name</label>     
                        <input class="form-control" type="text" id="company" name="CompanyName" required>
                    </div>
  
                    <div class="form-group pt-3">
                        <input type="hidden"  name="ItemID">
                        <input type="hidden"  name="pname">
                        <label for="personName">Contact Person</label>
                        <input class="form-control" name="ContactPerson" type="text" id="personName" required>
                    </div>
  
                    <div class="form-group pt-3">
                        <label for="telephone">Telephone</label>   
                        <input class="form-control" name="telephone" id="telephone" type="tel" required>
                     </div>
  
  
                      
                      <div class="form-group pt-3">
                      <label for="fax">Fax</label>             
                      <input class="form-control" name="fax" id="fax" >
                      </div>
  
                      <div class="form-group pt-3">
                      <label for="email">Email</label>
                      <input class="form-control" name="email" id="email" type="email" required>
                      </div>
  
                      <div class="form-group pt-3">
                      <label for="city">City</label></td>
                      <input class="form-control" name="city" id="city" required>
                      </div>
  
                      <div class="form-group pt-3">
                      <label for="country">Country</label>
                      <input class="form-control" name="country" id="country" required>
                      </div>
  
  
                      <div class="form-group checkbox pt-3">
                     <label > Enquiry </label>
  
  <label style="color: rgb(211, 158, 44);padding-left: 8px;" class="pt-3">Hire</label>
  <input type="checkbox" name="enquiry" value="Hire">
  <label style="color: rgb(211, 158, 44);">&nbsp; Purchase</label>
    <input type="checkbox" name="enquiry" value="Purchase">
    <label style="color: rgb(211, 158, 44);">&nbsp;&nbsp;&nbsp; Sale</label>
    <input type="checkbox" name="enquiry" value="Sale">
  
    </div>
  
                      
       
                    <div class="form-group pt-3">
                    <label >Subject</label>
                    <input class="form-control" name="subject">
                    </div>
          
                    <div class="form-group pt-3">
                    <label >Message</label>
                    <textarea class="form-control" name="message" rows="10" cols="35"></textarea>
                    </div>
  
                   
                                         
                        <input type="submit" value=" Send" name="button" id="button" class="btn btn-default">
                       
                 
                     </form>
                      </div>
                
                </div>
              
              
            </div>
          </section>
         
  
          <!-- map -->
        <div>
         
          <h2 class="d-flex justify-content-center w-100 mt-5">Thanks and appreciation</h2>

          <section class="d-flex justify-content-center w-100">
            <img class=" d-none  d-md-block  w-50" src="newImages/certification alqudra.jpg" alt="">
          </section>
          <section class="d-flex justify-content-center w-100 d-md-none  d-sm-block">
            <img class="w-100" src="newImages/certification alqudra.jpg" alt="">
          </section>    
    
  <hr class="container">

  <p style="text-align: center;vertical-align: middle;padding:10px; height:50px;">All rights reserved, At Al Qudra, Sharjah, United Arab 
    Emirates ( UAE )<br>
    <br>
  </p> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>