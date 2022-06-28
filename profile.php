<?php 
session_start();

	include("connection.php");
	include("function.php");
	$user_data = check_login($conn);
?>
<html>
    <head>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
          integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <style>
          .all{
            padding-left:2cm;
            padding-right:2cm;
          }
          .user{
              font-size:40px;
              text-align:center;
              color:green;
          }
          h2{
            color:green;
            font-size:35px;
          }
          .what{
            padding-left:2cm;
            padding-top:2cm;
            padding-right:2cm;
          }
          .what p{
            text-align:left;
          }
          .factors p{ 
            font: size 30px;
            
          }
          p{
            font-size:25px;
          }
            .factors{
            font: size 30px;
            padding-left:2cm;
            padding-right:2cm;
          }
          .factor_buttons {
            padding-left: 12.5cm;
            padding-right: 10.5cm;
          }
          .factor_buttons .button_one{
            padding-bottom:40px;
             padding-top:40px;
          }
          .factor_buttons .button_two{
            padding-bottom:40px;
                 
          }
          .factor_buttons .button_three{
            padding-bottom:40px;
          }
          .factor_buttons .button_four{
            padding-bottom:40px;
          }
          .factor_buttons .button_five{
            padding-bottom:40px;
          }
          .factor_buttons .button_one button{
                   width:80%;
                   height:100px;
                   font-size:20px;
                   text-align:center;
                   background: transparent;
                   justify-content: space-between;
                   align-items: center;
                   border-radius:10px;
          }
          .factor_buttons .button_two button{
                   width:80%;
                   height:100px;
                   font-size:20px;
                   text-align:center;
                   background: transparent;
                   justify-content: space-between;
                   align-items: center;
                   border-radius:10px;
          }
          .factor_buttons .button_three button{
                   width:80%;
                   height:100px;
                   font-size:20px;
                   text-align:center;
                   background: transparent;
                   justify-content: space-between;
                   align-items: center;
                   border-radius:10px;
          }
          .factor_buttons .button_four button{
                   width:80%;
                   height:100px;
                   font-size:20px;
                   text-align:center;
                   background: transparent;
                   justify-content: space-between;
                   align-items: center;
                   border-radius:10px;
          }
          .factor_buttons .button_five button{
                   width:80%;
                   height:100px;
                   font-size:20px;
                   text-align:center;
                   background: transparent;
                   justify-content: space-between;
                   align-items: center;
                   border-radius:10px;
          }
          .factor_buttons .button_one button:hover{
            background-color:#fa5a02;
            color:white;
          }
          .factor_buttons .button_two button:hover{
            background-color:#9ec3db;
            color:white;
          }
          .factor_buttons .button_three button:hover{
            background-color:#f7324c;
            color:white;
          }
          
          .factor_buttons .button_four button:hover{
            background-color:#cf998d;
            color:white;
          }
          .factor_buttons .button_five button:hover{
            background-color:#1d140a;
            color:white;
          }
       </style>
    </head>
    <body>
            <div class="navbar">
              <img src ="NUTRI-TOPIA-logos_black.png" alt="" width="145px" height="145px" >
              <ul>
               <li><a href="login.php">Logout</a></li>
              </ul>
            </div>
            <br>
            <section class="all">
            <div class="user">
	               Hello, <?php echo $user_data['name'];?> Thanks For Login In. 
            </div> 
            <div class="what">
              <h2>What Is Nutrition ?</h2><br>
             <p> Nutrition is the study of nutrients in food, how the body uses them, and the relationship between diet, health, and disease.
              Nutritionists use ideas from molecular biology, biochemistry, and genetics to understand how nutrients affect the human body.
              Nutrition also focuses on how people can use dietary choices to reduce the risk of disease, what happens if a person has too much or too little of a nutrient, and how allergies work.
            Nutrients provide nourishment. Proteins, carbohydrates, fat, vitamins, minerals, fiber, and water are all nutrients. If people do not have the right balance of nutrients in their diet, their risk of developing certain health conditions increases.</p>
            </div><br>
            <div  class="factors"><br>
          <h2>What are  determinants of health?</h2><br>
          <p>Health is influenced by many factors, which may generally be organized into five broad categories known as determinants of health: genetics, behavior, environmental and physical influences, medical care and social factors. These five categories are interconnected.</p>
          <p>Several factors related to health outcomes are listed below.</p><br>
       
        </div>           
            <div class="factor_buttons">
              <div class="button_one"><a href="bmi.html"><button>BMI</button></a><br></div>
              <div class="button_two"><a href="spoo.html"><button>SPO2</button></a><br></div>
              <div class="button_five"><a href="mentalheath.html"><button >Mental Health</button></a><br></div>
              <div class="button_three"><a href="main.html"><button>BP</button></a><br></div>
              <div class="button_four"><a href="age.html"><button>Age</button></a><br></div>
             </div>
             </section>
        <section class="footer" style ="width:100%;">
    <div class="social">
       <a href="#"><i class="fab fa-instagram"></i></a>
       <a href="#"><i class="fab fa-snapchat"></i></a>
       <a href="#"><i class="fab fa-twitter"></i></a>
       <a href="#"><i class="fab fa-facebook"></i></a>
    </div>
  <ul class="list">
    <li> 
        <a href="index.html">Home</a>
    </li>
    <li>
        <a href="about.html">About us</a>
    </li>
    <li>
        <a href="#">privacy policy</a>
    </li>
  </ul>
  <p class="copyright">
    Nutri-Topia @ 2022
  </p>
        </section>
      </body>
</html>