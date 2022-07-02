<?php 

             if(isset($_POST['submit'])){
  $to= "mohamedsaeed5101@gmail.com";
    $name= $_POST['name'];
     $nationality=$_POST['nationality'];
                $date=$_POST['date'];
                $place=$_POST['place'];
                $mother=$_POST['mother'];
                $jop=$_POST['jop'];
                $phone=$_POST['phone'];
                $work=$_POST['work'];
                $mobile=$_POST['mobile'];
                $father=$_POST['father'];
                $jop1=$_POST['jop1'];
                $phone1=$_POST['phone1'];
                $work1=$_POST['work1'];
                $mobile1=$_POST['mobile1'];
                $address=$_POST['address'];
                $number=$_POST['number'];
                $number1=$_POST['number1'];
                $question=$_POST['question'];
                $question1=$_POST['question1'];
                $question2=$_POST['question2'];
                $question3=$_POST['question3'];
                $question4=$_POST['question4'];
                $question5=$_POST['question5'];
                $other=$_POST['other'];
                $phone2=$_POST['phone2'];
                $attachment=$_POST['attachment'];
                $attachment1=$_POST['attachment1'];
                $attachment2=$_POST['attachment2'];
                $terms=$_POST['terms'];
     $body=
                 "بيانات الطفل" .
                  "\n" .
                "\n" ."اسم الطفل رباعيا :" . " " .$name . "\n" ."الجنسية   :". " " .$nationality. "\n" ."تاريخ الميلاد   :". " " .$date. "\n" . "مكان الميلاد : ". " ".$place  ."\n".   
                "بيانات الاسرة" ."\n" .
                "اسم الأم :"." ".$mother.  "\n" ."وظيفة الأم :" . " " .$jop . "\n" ."رقم جوال الأم   :". " " .$phone. "\n" ."جهة عمل الأم   :". " " .$work. "\n" . "هاتف عمل الأم : ". " ".$mobile  ."\n". "اسم الأب :"." ".$father ."\n" ."وظيفة الأب :" . " " .$jop1 . "\n" ."رقم جوال الأب   :". " " .$phone1. "\n" . "جهة عمل الأب : ". " ".$work1."\n". "هاتف عمل الأب :"." ".$mobile1. "\n" ."عنوان المنزل :" . " " .$address . "\n" ."عدد الأخوة الأناث   :". " " .$number. "\n" ."عدد الأخوة الذكور   :". " " .$number1. "\n" . "هل يوجد خادمة في المنزل : ". " ".$question . "\n".
                  "بيانات صحية "."\n" .
                "\n". "
هل يعاني الطفل من امراض ؟ حددي اسم المرض و تاريخ الاصابة ؟ :"." ".$question1   . "\n" ."هل يعاني الطفل من حساسية تجاه بعض الاطعمة ؟ماهي ؟ :" . " " .$question2 . "\n" ."هل يعاني الطفل من حسسايةجلدية ؟ و ما هو المسبب ؟   :". " " .$question3. "\n" ."هل يتناول الطفل ادوية طبية ؟ماهي ؟   :". " " .$question4. "\n".
"اجراء استلام الطفل".
"\n" . "من هو الشخص المسؤول عن استلام الطفل من المركز يومياً ؟ : ". " ".$question5  ."\n". "اخر(اذكره) :"." ".$other .  "\n" ."رقم الجوال :" . " " .$phone2   ;
 
     
        
        
      
        
        
    
         if(mail($to,'مركز أنا أنموّ لرعاية الأطفال الأهلية/استمارة اشتراك في برنامج الرضع',$body)){ 
           echo "<script>alert('تم ارسال استمارة الاشتراك بنجاح');</script>";
         }
        else{
            echo "<script>alert('فشل في الارسال');</script>";
        }
    
    }
   

           
         
            ?>
            
           


      

        

            
    


<html lang="en"><head>
        <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title>مركز انا انمو لرعاية الأطفال الاهلية</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name = "viewport" content = "width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0"/>

 <meta name="viewport" content="width=device-width; initial-scale=0.43; maximum-scale=1.5;">
   <link rel="apple-touch-icon" href="images/template/picture.png"/>

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
.img{
    width:1100px;
    height:350px;
}
#containergrid{
    position:relative;
    height:300px;
    margin-right:150px;
}
.img1{
    width:300px;
    height:450px;
}
.img2{
    width:200px;
    height:450px;
}
#card{
  
    width: 1000px;
    height:5000px;
    background-color:#FEA000;
}
.i{
    width:950px;
    color:black;
    font-size:20px;
    height:55px;
    background-color:#FEA000;

}
.i1{
    width:950px;
    color:black;
    font-size:20px;
    height:150px;
    background-color:#FEA000;

}
.lable{
    font-size:20px;
    margin-left:800px;
    
}
.lable1{
    font-size:20px;
    margin-left:800px;
    
}
.lable3{
    font-size:20px;
    margin-left:400px;
    
}
.lable4{
    font-size:20px;
    margin-left:570px;
    
}
.rr{
width:400px;
height: 70px;
font-size:25px;
margin-right:260px;
}
@media only screen and (max-width:600px) {
  .img{
    width:400px;
    height:150px;
    margin-left:10px;
    margin-top:30px;
  }
 .i{
    width:300px;
    color:black;
    font-size:20px;
    height:55px;
    background-color:#FEA000;

}
.i1{
    width:300px;
    color:black;
    font-size:20px;
    height:150px;
    background-color:#FEA000;

}
.lable{
    font-size:20px;
    margin-left:150px;
    
}
.lable1{
    font-size:20px;
    margin-left:150px;
    
}
.lable3{
    font-size:20px;
    margin-left:150px;
    
}
.lable4{
    font-size:20px;
    margin-left:150px;
    
}
  #containergrid{
  
      width:100%;
      height:1250px;
      margin-right:0px;
  }
  .gg{
      height:450px;
  }
  .gg:hover .overlay {
  height: 450px;
  }
  .gg:hover .overlay1 {
  height: 450px;
  }
  .gg:hover .overlay2 {
  height: 450px;
  }
  .img1{
     
      opacity: 0;
   }
   .img2{
       
       opacity: 0;
   }
   #card{
       width:400px;
       height:5800px;
       margin-right:0px;

      
   }
   .rr{
width:200px;
height: 70px;
font-size:20px;
margin-right:80px;
}
   
   
  
}


@media only screen and (max-width: 768px) {
      .img{
    width:400px;
    height:150px;
    margin-left:10px;
    margin-top:30px;
  }
  #containergrid{
  
      width:100%;
      height:1250px;
      margin-right:0px;
  }
  .gg{
      height:450px;
  }
  .gg:hover .overlay {
  height: 450px;
  }
  .gg:hover .overlay1 {
  height: 450px;
  }
  .gg:hover .overlay2 {
  height: 450px;
  }
  .img1{
     
      opacity: 0;
   }
   .img2{
       
       opacity: 0;
   }
}

@media only screen and (max-width: 992px) {
      .img{
    width:400px;
    height:150px;
    margin-left:10px;
    margin-top:30px;
  }
  #containergrid{
  
      width:100%;
      height:1250px;
      margin-right:0px;
  }
  .gg{
      height:450px;
  }
  .gg:hover .overlay {
  height: 450px;
  }
  .gg:hover .overlay1 {
  height: 450px;
  }
  .gg:hover .overlay2 {
  height: 450px;
  }
  .img1{
     
      opacity: 0;
   }
   .img2{
       
       opacity: 0;
   }
}

@media only screen and (max-width: 1200px){
      .img{
    width:400px;
    height:150px;
    margin-left:10px;
    margin-top:30px;
  }
  #containergrid{
  
      width:100%;
      height:1250px;
      margin-right:0px;
  }
  .gg{
      height:450px;
  }
  .gg:hover .overlay {
  height: 450px;
  }
  .gg:hover .overlay1 {
  height: 450px;
  }
  .gg:hover .overlay2 {
  height: 450px;
  }
  .img1{
     
      opacity: 0;
   }
   .img2{
       
       opacity: 0;
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
                   
            </div>
           
        </div> 
       
        
       

       
            

<br><br>
<div id="containergrid" class="row grid" >
                             
 


<div  class="col-12 col-md-12 col-lg-4 mb-4 grid-item" style="right: 0px; top: 0px;">
         <div id="card" class="card rounded-lg items ">
          <br>
                    <h1 style="color:white;text-align:right;font-size:35px;">استمارة الاشتراك لبرنامج الرضع<h1>
                      <p style="color: #ffebeb;font-size:20px;text-align:right;margin-right:30px;">تفضل بملئ هذه الاستمارة</p>
                      <br>
                     
  
                      <h1>بيانات الطفل</h1>
                      <br><br>
                      <form action="" method="POST" enctype="multipart/form-data">
                          
                    
                     
                       <lable class="lable">اسم الطفل رباعيا *</lable>
                       <br>
                      <input id="ddselect" class="i" name="name" required>
                          
                      <br><br>
                       <lable class="lable">الجنسية *</lable>
                       <br>

                     <input id="txtvalue" type="text" class="i" name="nationality" required>
                           
                      <br><br>
                       <lable class="lable1">تاريخ الميلاد *</lable>
                       <br>
                     <input class="i" name="date" placeholder="DD/MM/YY" required>
                        
                      <br><br>
                       <lable class="lable1">مكان الميلاد *</lable>
                       <br>
                     <input class="i" name="place" required>
                        
                       <br><br>
                       <h1>بيانات الأسرة<h1>
                            <br><br>
                       <lable class="lable1">اسم الأم  *</lable>
                       <br>
                     <input class="i" name="mother" required>
                        
                       <br><br>
                     
                       <lable class="lable1"> وظيفة الأم*</lable>
                       <br>
                     <input class="i" name="jop" required>
                        
                       <br><br>
                      
                       <lable class="lable1">رقم جوال الأم *</lable>
                       <br>
                     <input class="i" name="phone" required>
                        
                       <br><br>
                       
                       <lable class="lable1">جهة عمل الأم *</lable>
                       <br>
                     <input class="i" name="work" required>
                        
                       <br><br>
                       
                       <lable class="lable1"> هاتف عمل الأم  *</lable>
                       <br>
                     <input class="i" name="mobile" required>
                        
                       <br><br>
                       
                       <lable class="lable1">اسم الأب *</lable>
                       <br>
                     <input class="i" name="father" required>
                        
                       <br><br>
                     
                       <lable class="lable1">وظيفة الأب *</lable>
                       <br>
                     <input class="i" name="jop1" required>
                        
                       <br><br>
                     
                       <lable class="lable1">رقم جوال الأب *</lable>
                       <br>
                     <input class="i" name="phone1" required>
                        
                       <br><br>
                        
                       <lable class="lable1">جهة عمل الأب *</lable>
                       <br>
                     <input class="i" name="work1" required>
                        
                       <br><br>
                       
                       <lable class="lable1">هاتف عمل الأب *</lable>
                       <br>
                     <input class="i" name="mobile1" required>
                        
                       <br><br>
                      
                       <lable class="lable1">عنوان المنزل *</lable>
                       <br>
                     <input class="i" name="address" required>
                        
                       <br><br>
                        
                       <lable class="lable1">عدد الأخوة الأناث *</lable>
                       <br>
                     <input class="i" name="number" required>
                        
                       <br><br>
                      
                       <lable class="lable1">عدد الأخوة الذكور *</lable>
                       <br>
                     <input class="i" name="number1" required>
                        
                       <br><br>
                     
                       <lable class="lable1">هل يوجد خادمة في المنزل *</lable>
                       <br>
                     <select class="i" name="question" required>
                         <option value="">-</option>
                         <option>نعم</option>
                          <option>لا</option>
                        </select>
                       <br><br>
                       <h1>بيانات صحية </h1>
                       <br><br>
                        <lable class="lable3">هل يعاني الطفل من امراض ؟ حددي اسم المرض و تاريخ الاصابة ؟*</lable>
                       <br>
                     <textarea class="i1" name="question1" required>
                        </textarea>
                       <br><br>
                        <lable class="lable3">هل يعاني الطفل من حساسية تجاه بعض الاطعمة ؟ماهي ؟*</lable>
                       <br>
                     <textarea class="i1" name="question2" required>
                        </textarea>
                        
                       <br><br>
                        <lable class="lable3">هل يعاني الطفل من حسسايةجلدية ؟ و ما هو المسبب ؟*</lable>
                       <br>
                      <textarea class="i1" name="question3" required>
                        </textarea>
                        
                       <br><br>
                        <lable class="lable4">* هل يتناول الطفل ادوية طبية ؟ماهي ؟</lable>
                       <br>
                     <textarea class="i1" name="question4" required>
                        </textarea>
                        
                       <br><br>
                       
                       <h1>اجراء استلام الطفل<h1>
                           <br><br>
                     <lable class="lable4">  *من هو الشخص المسؤول عن استلام الطفل من المركز يومياً ؟</lable>
                       <br>
                     <select class="i" name="question5" required>
                         <option value="">-</option>
                         <option>الأم</option>
                          <option>الأب</option>
                        </select>
                       <br><br>
                       <lable class="lable1">اخر(اذكره)</lable>
                       <br>
                     <input class="i" name="other" required>
                        
                       <br><br>
                       <lable class="lable1">رقم الجوال *</lable>
                       <br>
                     <input class="i" name="phone2" required>
                        
                       <br><br>
                    
                    <lable class="lable1">ارفاق كرت العائلة-الاقامة *</lable>
                    <br>
                    <input class="i" type="file" name="attachment" required>
                    <br><br>
                    
                    <lable class="lable1">ارفاق شهادة الميلاد *</lable>
                    <br>
                    <input class="i" type="file" name="attachment" required>
                    <br><br>
                    
                    <lable class="lable1">ارفاق صورة شخصية *</lable>
                    <br>
                    <input class="i" type="file" name="attachment" required>

                       <h1>شروط التسجيل</h1>
                       <br><br>
                           <p>•	تعبئ هذه الاستمارة من قبل ولي أمر الطفل
                           <br>
•	تدفع الرسوم مقدماً
<br>
•	لا تسترد الرسوم في حال الأنسحاب بعد التسجيل و يمكن تحويل الاشتراك إلى طفل آخر خلال أسبوع من الانسحاب
<br>
•	لا يعوض اي يوم غياب او ساعة غياب للطفل
<br>
•	اي ساعات إضافية يقضيها الطفل في المركز تحسب بعد مرور 20 دقيقة من الوقت بسعر الساعة
<br>
•	إحضار الطفل نظيف من المنزل
<br>
•	الالتزام بإحضار الكشف الطبي خلال أسبوع من التسجيل
<br>
•	في حال تعرض الطفل لأمر صحي طارئ نقوم بإتخاذ الإجراء المناسب
<br>
•	الالتزام بإحضار وجبة صحية من المنزل في حال عدم الأشتراك في برنامج الوجبات و يمنع غير ذلك
<br>
•	الالتزام بإحضار احتياجات الطفل الشخصية
<br>
•	إظهار كرت العائلة عند استلام الطفل
<br>
</p>
<br><br>

 <lable class="lable4">الموافقة علي الشروط والاحكام</lable>
                       <br>
                     <select class="i" name="terms" required>
                          <option value="">-</option>
                         <option>نعم</option>
                        </select>
                       <br><br>

    <br>
                           
                      <div style="color:#d6d6d6;font-size:20px;text-align:right;margin-right:20px;" class="form-group">
                   
                  
                    <button class="rr" name="submit">ارسال الاستمارة</button>
                </div>
              </form>
               

        </div>
      </div>

       </div>
     
        
        
  


<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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
               
                    <h4 style="font-size: 25px;color:black;text-align:right;"> <i style="color: black;font-size: 20px;" class="fas fa-map-marker-alt"></i>  المملكة العربية السعودية-المدينة المنورة-حي السلام<h4>
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