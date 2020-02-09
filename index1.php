<?php
session_start();

  if(!isset($_SESSION['Perdoruesi'])){
   $_SESSION['msg']="Ju duhet te logoheni ne fillim per te pare kete faqe";
     header('location: form.php');
 }


if(isset($_GET['dil'])){
    session_destroy();
    unset($_SESSION['Perdoruesi']);
    header('location: form.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
       <link type="text/css" href="./koka.css">
        <title>FAQJA KRYESORE</title>
       
        <style>
            *
{
    margin: 0;
    padding: 0;
}
header
{
    
    background-color:black;
    height:72px;
    background-size:cover;
    background-position: center;
}
            .menu
{
    background-position: center;
    float:right;
    list-style: none;
    margin-top: 5px;
    margin-bottom: 2px;
    /*margin-top: 15px;
    margin: 15px;
    padding: 15px;*/
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
}
.menu li
{
    display: block;
    position: relative;
    float:left;
    
    
}
.menu li a
{
    display: block;
    color:white;
font-weight: bold;
    text-decoration: none;
    padding: 15px;
    margin: 5px;
    font-size: 17px;
    font-family: adobe-arabic-regular;
    
    list-style: none;
    position: relative;
    border: 1px solid transparent ;
    
}
.menu li a:hover

{
    border-color: white;
  
}
            ul li ul
{
    display: none;
    position: absolute;
    background: rgba(0,0,0,.3);
    border-radius: 0px 0px 5px 5px;

}
ul li ul li a
{
    padding: 15px;
    

}

ul li ul li a:hover
{
    background-color: maroon;
    
    

}
ul li:hover ul
{
    display: block;
    
}
body
{
    font-family: adobe-arabic-regular;
}
            .f1
{
    margin-top: 10px;
    font-family: adobe-arabic-regular;
    float: left;
   
    margin-left: 30px;
    font-weight: 500; 
   
    
    margin-bottom: 2px;
    
    
    padding: 15px;

    font-size: 15px;
    font-family: adobe-arabic-regular;
    
    
}
.f1 a
{
     text-decoration: none;
     color:#fff;
}
.f1 a:hover
{
    color: lightpink;
    text-decoration:underline;
    text-decoration-style:solid;
    
}
      .logo
            {
                display: inline;
                
            }
    .logo img
{
    position: static;
    margin-left: 25px;
    margin-top: 22px;
    

    width: 25px;
    height:  22px;
    object-fit: cover;
    
    

    
    }
        /*    footer
{
    background-color: black;
    margin-top: 20px;
    text-align: center;
    font-size: 15px;
    font-family: adobe-arabic-regular;
    color: white;*/
    
button
            {
                 background: #000;
                font-size: 20px;
                font-weight: 300;
                height: 50px;
                width:70px;
                
            }
            .btndil{
                text-decoration: none;
                padding: 10px;
                border: 1px solid black;
                color: white;
                background: black;
                border-radius: 2px;
            }
            .btndil:hover{
                background: white;
                color: black;
                border-color: white;
            }
            body
            { 
                color: white;
                text-align: center;
                font-size: 30px;
                background-image: url(20200120_02.jpg);
                 background-repeat: no-repeat;
                background-attachment: fixed;
                font-family: adobe-arabic-regular;
                background-size: contain;
                 width: 100%;
                 height: 100%;
                 background-position:center;
                 background-size:cover;
                 position:absolute;
                overflow: hidden;
            }
            h1
            {
                margin-top: 200px;
                
                text-align:center;
            }
             button a:hover
            {
                color: black;
                background: white !important;
                text-decoration: none;
                transition-delay: none;
                
            }
        </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    

        <header>
            

          
    
                <div class="f1"><a href="form.php">HYR</a></div>
            <div style="float:left; margin-top:21px; margin-left:15px" class="logo"><a href="shporte.php" >
                    <!--<img src="PngItem_1181191.png">-->
                <i class="fa fa-shopping-cart" style="font-size:28px;color:white"></i></a></div>
                
                 <ul class="menu">
                    <li id="kreu"> <a href="index.php">KREU</a></li>
                    
                    <li><a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a></li>
                     
                    
                    <li><a href="bli.php" class="bli">BLI</a>
                        <ul>
                            <li><a href="veshje.php" class="">VESHJE</a></li>
                            
                            <li><a href="kepuce.php">KEPUCE</a></li>
                            
                            <li><a href="aksesore.php">AKSESORE</a></li>
                        
                        </ul>
                        
                    
                    <li><a href="marka.php">MARKA</a></li>
                    <li><a href="ulje.php">ULJE</a></li>
                     
                    
        
               
                
            </ul></header>
     <body>
     <?php
        if(isset($_SESSION["success"])):?>
         <?php
         echo $_SESSION["success"];
         unset ($_SESSION["success"]);
         ?>
       
        <?php endif?>
  
         <?php if(isset($_SESSION["Perdoruesi"])):?>
        <h1 >MIRE SE VINI  <strong><?php echo $_SESSION['Perdoruesi']; ?> !</strong></h1>
         <br><br>
        
         <a  href="form.php?dil='1'" class="btndil" >DIL</a> 
         
        
          <?php endif?>
    
        
        
        
        
    </body>
</html>
