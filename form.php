<?php include('regjister.php'); ?>

<html>
    <head>
        
    
       <title>Forma e regjistrimit</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
                  
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
    z-index: 1;

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
        
        </style>
    
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
                            <li><a href="veshje.php" class="">VESHJE</a>
                                
                            </li>
                            
                            <li><a href="kepuce.php">KEPUCE</a></li>
                            
                            <li><a href="aksesore.php">AKSESORE</a></li>
                        
                        </ul>
                        
                    
                    <li><a href="marka.php">MARKA</a></li>
                    
                     
                    
        
               
                
            </ul></header>
     <body>
         <link href="c2.css" rel="stylesheet" type="text/css">
        <div class="hero">    
        <div class="forma">
           <div class="buton">
            <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="hyr()" >Hyr</button>
            <button type="button" class="toggle-btn" onclick="regjistrohu()" >Regjistrohu</button>
               
            </div>
            
        <form action="form.php" method="post" id="hyr" class="input-grup"><?php include("errors.php");?>
            <input type="text" class="input-fusha" name="perdoruesi"  placeholder="Perdoruesi" 
                   required>
            <input type="password" class="input-fusha" name="fjalekalimi"   placeholder="Fjalekalimi"
                   required>
            <!--<input type="checkbox" class="chech-box"><span>Kujtoje Passwordin</span>-->
            <br><br><br>
            <button type="submit" class="submit-btn" name="hyr" >Hyr
                
            </button>
            
            </form>
            
               <form action="form.php" method="post" id="regjistrohu" class="input-grup"><?php include("errors.php");?>
            <input type="text" class="input-fusha" placeholder="Perdoruesi"  name="perdoruesi" 
                   required>
                <input type="text" class="input-fusha" name="emri"   placeholder="Emri" 
                   required>
                <input type="text" class="input-fusha" name="mbiemri"   placeholder="Mbiemri" 
                   required>
                <input type="email" class="input-fusha" name="email"    placeholder="Email"  
                   required>
            <input type="password" class="input-fusha" name="fjalekalimi"  placeholder="Fjalekalimi" 
                   required>
            <input type="checkbox" class="chech-box"><span>Jam dakord me termat & kushtet.</span>
                   <button type="submit" class="submit-btn" name="regjistrohu" >Regjistrohu
                </button>
             
            </form>   
            </div>
        </div>
 <script>
            var x=document.getElementById("hyr");
             var y=document.getElementById("regjistrohu");
             var z=document.getElementById("btn");
            function regjistrohu(){
                x.style.left="-400px";
                y.style.left="50px";
                z.style.left="110px";
            }
            function hyr(){
                x.style.left="50px";
                y.style.left="450px";
                z.style.left="0px";
            }
        </script>
           
</body>
    
</html>