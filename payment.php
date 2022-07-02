
<?php
if(isset($_POST['submit'])){
    //Server Variables
    $server_name = "   الدفع عبر الصرافة للاشتراك في البرامج /  مركز انا انمو لرعاية الاطفال الأهلية       ";
    $server_mail = "mohamedsaeed5101@gmail.com";

    //Name Attributes of HTML FORM
   
    $sender_name = "name";
    $name1=$_POST['name1'];
    $input_file = "attachment";

    //Fetching HTML Values
    $sender_name = $_POST[$sender_name];
    $file_name=$_FILES['attachment']['name'];
    $base=basename($file_name);
    $extension = substr($base,strlen($base)-4,strlen($base));
    $allowed=array(".pdf",".png",".jpg",".txt","docx");

    //Checking if File is uploaded
    if(isset($_FILES[$input_file])) 
    { 
        if(in_array($extension,$allowed)){
        //Main Content
        $main_subject = " الدفع عبر الصرافة للاشتراك في البرامج /  مركز انا انمو لرعاية الاطفال الأهلية";
        $main_body = "مرحبا   $server_name,<br><br> 
        $sender_name ,اتصلت بك من خلال موقع الويب الخاص بك والتفاصيل على النحو التالي: <br><br> .
    
           اسم صاحب الحساب   : $sender_name  <br> اسم صاحب الحساب الذي تم التحويل منه   :$name1 ." ;
        
      

        //Reply Content
        $reply_subject = "فرص العمل /  مركز انا انمو لرعاية الاطفال الأهلية   ";
        $reply_body = "مرحبا  $sender_name,<br> 
        \t شكرا لارسال ايصال الدفع عبر الصرافة  . سنعود إليك قريبًا. <br> <br>
         هذا بريد تم إنشاؤه تلقائيًا وإرساله من خادم البريد الخاص بنا. <br>
         من فضلك لا ترد على هذا البريد. <br>
         مع تحياتي <br>
        $server_name";

//#############################DO NOT CHANGE ANYTHING BELOW THIS LINE#############################
        $filename= $_FILES[$input_file]['name'];
        $file = chunk_split(base64_encode(file_get_contents($_FILES[$input_file]['tmp_name'])));
        $uid = md5(uniqid(time()));
        //Sending mail to Server
        $retval = mail($server_mail, $main_subject, "--$uid\r\nContent-type:text/html; charset=iso-8859-1\r\nContent-Transfer-Encoding: 7bit\r\n\r\n $main_body \r\n\r\n--$uid\r\nContent-Type: application/octet-stream; name=\"$filename\"\r\nContent-Transfer-Encoding: base64\r\nContent-Disposition: attachment; filename=\"$filename\"\r\n\r\n$file\r\n\r\n--$uid--", "From: $sender_name\r\nMIME-Version: 1.0\r\nContent-Type: multipart/mixed; boundary=\"$uid\"\r\n\r\n");
        //Sending mail to Sender
      
        

//#############################DO NOT CHANGE ANYTHING ABOVE THIS LINE#############################

        //Output
        
        }else{
             echo "<script>alert(   '  صيغة الملف هذه غير مدعمة     ');</script>";
        }
        if ($retval == true) {
           echo "<script>alert('تم ارسال ايصال الدفع بنجاح  ');</script>";
        } else {
            echo "<script>alert('فشل في الارسال');</script>";
        }
    }else{
        echo "<script>alert('الملف غير موجودا');</script>";
    }
}
?>  

            



<html lang="en"><head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>مركز انا انمو لرعاية الأطفال الاهلية</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="48.png" type="image/x-icon">
<link rel="stylesheet" href="css1/bootstrap.min.css">
<link rel="stylesheet" href="css1/bootstrap-rtl.css">
<link rel="stylesheet" href="css1/all.min.css">
<link rel="stylesheet" href="css1/main.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <link rel="stylesheet" type="text/css" href="css/pluton.css" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="css/jquery.cslider.css" />
        <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" />
        <link rel="stylesheet" type="text/css" href="css/animate.css" />


        <style>


#a{
    color:black;
    margin-left: 15px;

}
#a:hover{
      color:white;
        background-color:#FEA000;

}

      


div {
  text-align: center;
}

span {
  display: inline-block;
  vertical-align: middle;
  color:#FEA000;
   margin-top: 30px;
   margin-bottom: 30px;
   width: 30px;
}

.outer-line {
  width: 10%;
  border-bottom: 1px solid #FEA000;
   background-color:#FEA000;
   padding:2px;


}
h1{
     text-align: center;
     font-size:30px;
     color:#1f1f1f;
}
p{
    color:#1f1f1f;
    font-size: 25px;
}

button{
    background-color: black;
    color:#e8e8e8;
    width: 150px;
    height: 50px;
    font-size: 25px;
}
.gg {
  position: relative;
  width: 50%;
}

.image {
  width:300px;
  height:400px;
  margin-right: 80px;
}

.overlay{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #027F7E;
  overflow: hidden;
  width:310px;
  height:0px;
  transition: .5s ease;
  margin-right: 80px;
}
.overlay1{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #FB565E;
  overflow: hidden;
  width:310px;
  height:0px;
  transition: .5s ease;
  margin-right: 80px;
}
.overlay2{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #FEA000;
  overflow: hidden;
  width:310px;
  height:0px;
  transition: .5s ease;
  margin-right: 80px;
}

.gg:hover .overlay {
  height: 400px;
}
.gg:hover .overlay1 {
  height: 400px;
}
.gg:hover .overlay2 {
  height: 400px;
}

h2{
  text-align: center;
  font-size: 40px;
}
.element {
    position: relative;
}
 
/*replace the content value with the
corresponding value from the list below*/
 
.element:before {
    content: "\f000";
    font-family: FontAwesome;
    font-style: normal;
    font-weight: normal;
    text-decoration: inherit;
/*--adjust as necessary--*/
    color: #000;
    font-size: 18px;
    padding-right: 0.5em;
    position: absolute;
    top: 10px;
    left: 0;
}

i{
  color:#FEA000;
  font-size: 30px;
 }
 .aa{
    color::#1f1f1f;
    font-size: 22px;
 }
 h3{
  text-align: center;
  color:#FEA000;
  font-size: 20px;
 }
 .uu{
  color: green;
 
  text-align:center;
 }
 .ii{
  background-color:#FEA000;
  font-size: 20px;
  width:180px;
 }
 .oo{
  border-color: #1f1f1f;
  width:400px;
  height:40px;
  background-color: #d3d3d3;

 }
 h4{
  font-size:30px;
  color: black;
 }
 .qq{
  font-size: 25px;
 }
 hr{
  background-color:black;
 }
 .ooo{
   background-color:black;
   width:1500px;
 }
 .ggg {
  position: relative;
  width: 50px;
  float: right;
}

 .overlay3{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #55ACEE;
  overflow: hidden;
  width:50px;
  height:0px;
  transition: .5s ease;
}
 .overlay4{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #125688;
  overflow: hidden;
  width:50px;
  height:0px;
  transition: .5s ease;
}
 .overlay5{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color:black ;
  overflow: hidden;
  width:50px;
  height:0px;
  transition: .5s ease;
}
 .overlay6{
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: white;
  overflow: hidden;
  width:50px;
  height:0px;
  transition: .5s ease;
}

.ggg:hover .overlay3 {
  height: 47px;
}
.ggg:hover .overlay4 {
  height: 47px;
}
.ggg:hover .overlay5 {
  height: 47px;
}
.ggg:hover .overlay6 {
  height: 47px;
}
.input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.lable{
    margin-left:192px;
}
.lable1{
    margin-left:122px;
}
.work{
    background-color:#FEA000;
    width:450px;
    height:400px;
    margin-right:450px;
}
.lable2{
     margin-left:235px;
}
.button{
    width:85px;
    height:40px;
    font-size:15px;
    margin-left:215px;
}

@media only screen and (max-width:600px) {
  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.lable{
    margin-left:192px;
}
.lable1{
    margin-left:122px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:400px;
    margin-right:50px;
}
.lable2{
     margin-left:235px;
}
.button{
    width:85px;
    height:40px;
    font-size:15px;
    margin-left:215px;
}

  
  
}


@media only screen and (max-width: 768px) {
    .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.lable{
    margin-left:192px;
}
.lable1{
    margin-left:122px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:400px;
    margin-right:50px;
}
.lable2{
     margin-left:235px;
}
.button{
    width:85px;
    height:40px;
    font-size:15px;
    margin-left:215px;
}

 
}

@media only screen and (max-width: 992px) {

   .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.lable{
    margin-left:192px;
}
.lable1{
    margin-left:122px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:400px;
    margin-right:50px;
}
.lable2{
     margin-left:235px;
}
.button{
    width:85px;
    height:40px;
    font-size:15px;
    margin-left:215px;
}
}

@media only screen and (max-width: 1200px){
  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.lable{
    margin-left:192px;
}
.lable1{
    margin-left:122px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:400px;
    margin-right:50px;
}
.lable2{
     margin-left:235px;
}
.button{
    width:85px;
    height:40px;
    font-size:15px;
    margin-left:215px;
}
}
.go{
    background-color:white;
    color:black;
    font-size:20px;
    margin:100px;
    height:500px;
 
}
.go:hover {
    background-color:#FEA000;
    color:white;
    text-decoration: none;

}
.y1{
   width:1200px;
   height:50px;
   font-size:20px;
   margin-right:50px;
}
   
.y2{
    width:1200px;
    text-align:center;
    font-size:20px;
    height:60px;
    margin-right:50px;
    background-color:#171717;
}
.l{
    margin-right:50px;
    font-size:20px;
}
#containergrid{
    width:1300px;
}

</style>

         </head>



  <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
                <!-- Noti Modal -->
                    <input type="text" value="" id="accType" hidden="">
                    <div class="modal fade" id="notiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">تنبيه</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body" id="notiBody">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>
           


 
            <div  class="container">
            <nav  class="navbar navbar-expand-lg navbar-light">

                <a href="#" class="navbar-brand">
                    <img src="4.png" alt="" width="100"  class="img-fluid">
                </a>
                <button style="margin-top: 0;margin-bottom: 0;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span style="margin-top: 0;margin-bottom: 0;" class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                                                <li class="nav-item">
                                <a id="a" class="nav-link" href="./">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" id="notifications-link" href="about.php">من نحن</a>
                            </li>
                            <li class="nav-item">
                                <a  id="a" class="nav-link" href="circle.php">الدورات</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="blog.php">المدونة</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="work.php">فرص العمل</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="contact.php">اتصل بنا</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="share.php">الاشتراك</a>
                            </li>
                           
                                            </ul>
            </div>


           
        </nav>
        <h1 style="font-style: italic;font-size: 20px;text-align: center;">مركز أنا أنموّ لرعاية الأطفال الأهلية</h1>
    </div>
<div  id="الرئيسية">
            <!-- Start cSlider -->
           
                <div  class="triangle"></div>
                <!-- mask elemet use for masking background image -->
                <div style="background-color: white;" class="mask"></div>
                <!-- All slides centred in container element -->
                <div  class="container">
                    <!-- Start first slide -->
                   
                       
                 <div style="background-color:#e8e8e8;height:150px;"class="container">
                      <br><br><br>
                   <h1 style="text-align: center;">الدفع للاشتراك في البرامج</h1>
                </div>
            </div>
            </div>
            <br><br><br>

                <!-- End Noti Modal -->
               
                            <ul class="nav nav-tabs mt-4">
                                <li class="nav-item">
                                    <a  class="go content-switch active" href="#" id="btn-purches">الدفع عن طريق الذهاب الي المركز  </a>
                                </li>
                                <li class="nav-item">
                                    <a  class="go content-switch" href="#" id="btn-sales">الدفع عن طريق فيزا كارت  </a>
                                </li>
                                 <li class="nav-item">
                                    <a class="go content-switch" href="#" id="btn-pay">الدفع عن طريق  الصرافة</a>
                                </li>
                            </ul>
                            <section class="page-content">
                                <section class="purches" id="purches">
                                    <div class="container">
                                        <br><br>
                                        <p class="lead text-center font-weight-bold">عليك في طريقة الدفع هذه ان تذهب لتدفع في  مركز  أنا أنموّ لرعاية الأطفال الأهلية</p>                                    </div>
                                        <br>
                                         <p class="lead text-center font-weight-bold"> <i style="color:black" class="fas fa-map-marker-alt">عنوان المركز  : المملكة العربية السعودية-المدينة  المنورة-حي السلام</i></p>          </div>
                                </section>
                                <section class="sales" id="sales" style="display:none;">
                                    <h4 class="mt-3 mb-2">المبيعات</h4>
                                    <div class="container">
                                        <p class="lead text-center font-weight-bold">لا يوجد لديك مبيعات حتى الآن</p>                                    </div>
                                </section>
                                <section class="pay" id="pay" style="display:none;">
                                    <br><br>
                                    <form action="" method="POST" enctype="multipart/form-data">
                                   <lable class="l">اختر حساب التاجر</lable>
                                   <br><br> 
                                   <select name="name" class="y1" onchange="showDiv('rr', this)" required>
                                       <option value="0">-</option>
                                        <option value="بنك الانماء-مركز أنا أنمو ضيافة الأطفال الأهلية" >بنك الانماء-مركز أنا أنمو ضيافة الأطفال الأهلية</option>
                                        </select>
                                        <br> <br>
                                        <section id="rr" class="sales" style="display:none;">
                                        <div  id="containergrid" class="row grid" >
                                        <div  class="col-12 col-md-12 col-lg-4 mb-4 grid-item" style=" position: relative; right: 0px; top: 0px;">
                                            <img src="22.png" width="200" height="200">
                                           
                                        </div>
                                        <div  class="col-12 col-md-12 col-lg-4 mb-4 grid-item" style=" position: relative; right: 0px; top: 0px;">
                                        <br><br><br>
                                         <h1>صاحب الحساب    :  مركز أنا أنمو ضيافة الأطفال الأهلية</h1>
                                            
                                            <h1>رقم الحساب         :           00001753759<h1>
                                            </div>
                                            <div  class="col-12 col-md-12 col-lg-4 mb-4 grid-item" style=" position: relative; ">
                                                <br><br><br>
                                         <p>رقم حساب ايبان :   SA7905000068202359617000</p>
                                        </div>
                                        </div>
                                        </section>
                                        <br><br>
                                        <lable class="l">الرجاء ارفاق صورة الايصال</lable>
                                        <br> <br>
                                        <input  class="y1" type="file" name="attachment" required>
                                        <br> <br>
                                        <input name="name1" class="y1" type="text" placeholder="اسم صاحب الحساب الذي تم التحويل منه" required> 
                                        <br> <br> <br> <br> <br>
                                        <button name="submit" class="y2">اكمال الدفع</button>
                                        <br> <br>
                                </section>
                            </section>
    
                    
          
     
       

<footer  style="background-color:#d3d3d3; color:#FEA000;" class="mt-4">
    <div  class="container">
        <div  class="row">
            <div  class="col-sm-4">
                <h4 >مركز انا انمو لرعاية الاطفال الأهلية</h4>
                <br>
                <p class="qq">
                    مركز متخصص يدعم الطفل والاسرة معا كاحجية لا تتشكل حتي تكتمل الصورة لعائلة صحية ثم مجتمع مزدهر 
                </p>
                <br>


                 <div class="ggg">
                   <i style="color:black;font-size:50px;"class="fas fa-square"></i>
               <div class="overlay3">
              
                  <a href="https://twitter.com/ana_anmo_center"><i style="color:white;font-size: 45px;cursor:pointer;"class="fab fa-twitter"></i></a>
                 
             </div>
           </div>

                 <div class="ggg">
                   <i style="color: black;font-size:50px;" class="fas fa-square"></i>
               <div class="overlay4">
               
                   <a href="https://www.instagram.com/ana_anmo_center"> <i style="color:white;font-size:45px;cursor:pointer;"class="fab fa-instagram"></i></a>
                 
             </div>
           </div>
                  <div class="ggg">
                   <i style="color: black;font-size:50px;" class="fas fa-square"></i>
               <div class="overlay5">
               
                <a href="https://www.snapchat.com/add/ana_anmo_center"><i style="color:yellow;font-size: 40px;cursor:pointer;"class="fab fa-snapchat"></i></a>
                
             </div>
           </div>
                  <div class="ggg">
                   <i style="color: black;font-size:50px;" class="fas fa-square"></i>
               <div class="overlay6">
              
                 <a href="https://api.whatsapp.com/message/FIABDKXUGM6LH1"><i style="color:green;font-size: 45px;cursor:pointer;"class="fab fa-whatsapp"></i></a>
                 
             </div>
           </div>
                  
            </div>

            <div  class="col-sm-4">
                <h4 >استعراض</h4><hr>
                <br>
                <ul>
                          <li ><a style="color: black;" href="./">الرئيسية</a></li>
                          <br>
                        <li><a style="color: black;" href="about.php">من نحن </a></li>
                        <br>
                        <li><a style="color: black;" href="circle.php">الدورات</a></li>
                        <br>
                        <li><a style="color: black;" href="blog.php">المدونة</a></li>
                        <br>
                        <li><a style="color: black;" href="work.php">فرص العمل</a></li>
                        <br>
                        <li><a style="color: black;" href="contact.php">اتصل بنا</a></li>
                        <br>
                         <li><a style="color: black;" href="share.php">الاشتراك</a></li>
                         <br>
                                        </ul>
            </div>
            <div class="col-sm-4">
                <h4>العنوان</h4><hr>
                <br>
               
                    <h4 style="font-size: 25px;color:black;text-align:right;"> <i style="color: black;font-size: 20px;" class="fas fa-eye"></i>  المملكة العربية السعودية-المدينة المنورة-حي السلام<h4>
                 <br>
                    <h4 style="font-size: 20px;color:black;text-align:right;"> <i style="color: black;font-size:20px;" class="fas fa-phone"></i> 0540706133 <h4>
                      <br>
                      <h4 style="font-size: 20px;color:black;text-align:right;"> <i style="color: black;font-size: 20px;" class="fas  fa-envelope"></i> anaanmocenter@gmail.com<h4>
                        <br>
                         <h4 style="font-size: 20px;color:black;text-align:right;"> <i style="color: black;font-size: 20px;" class="fas  fa-envelope"></i> +966540706133<h4>

                      

            </div>
            <hr class="ooo"> 
                     <h5>Envy Theme</h5>

        </div>

    </div>

</footer>   



<script src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.mixitup.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.js"></script>
        <script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/jquery.cslider.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/jquery.inview.js"></script>
        
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="js/app.js"></script>
                <script src="js1/bootstrap.min.js"></script>
 <script src="js1/popper.min.js"></script>
        <script src="js1/ajax.min.js"></script>
        <script src="js1/bootstrap.min.js"></script>
        <script src="js1/aos.js"></script>
 
 
         <script>
            AOS.init();
            $(function() {
                $("#sales").hide();
                // Shifting tabs content
                $(".content-switch").click(function(e) {
                    e.preventDefault();
                    var $this = $(this),
                        id = $this.attr('id');
                    tabName = id.split('-'),
                        tabName = `#${tabName[1]}`;
                    $(tabName).siblings().hide();
                    $(tabName).fadeIn(600);
                    $this.parent().siblings().children().removeClass("active");
                    $this.addClass("active");
                })
            })
            function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 'بنك الانماء-مركز أنا أنمو ضيافة الأطفال الأهلية' ? 'block' : 'none';
}
           
             
               

        </script>
    
</body></html>