
<?php
if(isset($_POST['submit'])) {
include 'connection.php';

       
    $image= base64_encode(file_get_contents($_FILES['image']['tmp_name']));
   $description = stripcslashes($_POST['description']);
   $price = stripcslashes($_POST['price']);
	$result = mysqli_query($link,"insert into circles (image,description,price) values ('$image','$description', '$price')");
         
          if($result){
        	      echo "<script>alert('تم اضافة الدورة الي صفحة الدورات بنجاح')</script>";
          }
         else{
        	      echo "<script>alert('حدث خطأ ما اثناء اضافة الدورات')</script>";
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
    width:420px;
    height:35px;
    border-color:#FEA000;
}
.textarea{
     width:420px;
    height:100px;
    border-color:#FEA000;
}

.lable{
    margin-left:280px;
}
.lable1{
    margin-left:275px;
}
.work{
    background-color:#FEA000;
    width:450px;
    height:450px;
    margin-right:450px;
}
.lable2{
     margin-left:250px;
}
.button{
    width:200px;
    height:40px;
    font-size:15px;
   
}

@media only screen and (max-width:600px) {
  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.textarea{
     width:300px;
    height:100px;
    border-color:#FEA000;
}
.lable{
    margin-left:160px;
}
.lable1{
    margin-left:150px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:450px;
    margin-right:50px;
}
.lable2{
     margin-left:125px;
}
.button{
    width:200px;
    height:40px;
    font-size:15px;
}

  
  
}


@media only screen and (max-width: 768px) {
  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.textarea{
     width:300px;
    height:100px;
    border-color:#FEA000;
}
.lable{
    margin-left:160px;
}
.lable1{
    margin-left:150px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:450px;
    margin-right:50px;
}
.lable2{
     margin-left:125px;
}
.button{
    width:200px;
    height:40px;
    font-size:15px;
}

 
}

@media only screen and (max-width: 992px) {

  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.textarea{
     width:300px;
    height:100px;
    border-color:#FEA000;
}
.lable{
    margin-left:160px;
}
.lable1{
    margin-left:150px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:450px;
    margin-right:50px;
}
.lable2{
     margin-left:125px;
}
.button{
    width:200px;
    height:40px;
    font-size:15px;
}
}

@media only screen and (max-width: 1200px){
  .input{
    width:300px;
    height:35px;
    border-color:#FEA000;
}
.textarea{
     width:300px;
    height:100px;
    border-color:#FEA000;
}
.lable{
    margin-left:160px;
}
.lable1{
    margin-left:150px;
}
.work{
    background-color:#FEA000;
    width:350px;
    height:450px;
    margin-right:50px;
}
.lable2{
     margin-left:125px;
}
.button{
    width:200px;
    height:40px;
    font-size:15px;
}
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
                                <a  id="a" class="nav-link" href="circle.php"> الدورات</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="blog.php">المدونة</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="addcircle.php">اضافة الدورات</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="addblog.php">اضافة المقالات</a>
                            </li>
                            <li class="nav-item">
                                <a id="a" class="nav-link" href="https://unwashed-blast.000webhostapp.com">العودة الي الموقع</a>
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
                   <h1 style="text-align: center;">اضافة الدورات</h1>
                </div>
            </div>
            </div>
            <br><br><br>
            <div class="work">
                <form action="" method="POST" enctype="multipart/form-data">
                    <br><br>
                    <lable class="lable">صورة للدورة (مطلوب)</lable>
                    <br>
                    <input class="input" type="file" name="image" required>
                    <br><br>
                     <lable class="lable1">تعريف للدورة  (مطلوب)</lable>
                     <br>
                    <textarea class="textarea" name="description" type="text" required></textarea>
                    <br><br>
                     <lable class="lable2"> سعر الدورة بالدولار  (مطلوب)</lable>
                     <br>
                    <input class="input" name="price" type="number" required>
                    <br><br><br>
                    
                    <button name="submit" class="button">اضافة الدورة</button>
                </form>
            </div>
           
     <br><br><br> <br><br><br><br><br><br>

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
                        <li><a style="color: black;" href="circle.php">الدورات</a></li>
                        <br>
                        <li><a style="color: black;" href="blog.php">المدونة</a></li>
                        <br>
                        <li><a style="color: black;" href="addcircle.php">اضافة الدورات</a></li>
                        <br>
                        <li><a style="color: black;" href="addblog.php">اضافة المقالات</a></li>
                        <br>
                         <li><a style="color: black;" href="https://unwashed-blast.000webhostapp.com">العودة الي الموقع </a></li>
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

        
    
</body></html>