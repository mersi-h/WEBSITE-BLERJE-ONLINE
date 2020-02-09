<?php
   session_start();
   //include('regjister.php');
   if(!isset($_SESSION['Perdoruesi'])){
   $_SESSION['msg']="Ju duhet te logoheni ne fillim per te pare kete faqe";
   header('location: form.php');}
       
       if(isset($_GET['dil'])){
    session_destroy();
    unset($_SESSION['Perdoruesi']);
    header('location: form.php');
           exit();
}
    ?>
<style>
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
 <?php
        if(isset($_SESSION["success"])):?>
         <?php
         echo $_SESSION["success"];
         unset ($_SESSION["success"]);
         ?>
       
        <?php endif?>
  
         <?php if(isset($_SESSION["Perdoruesi"])):?>
        <h1 >Ju e kryet blerjen me sukses!Faleminderit <strong><?php echo $_SESSION['Perdoruesi']; ?> !</strong></h1>
         <br><br>
        
         <a  href="form.php?dil='1'" class="btndil" >DIL</a> 
         
        
          <?php endif ?>
    
        
        
        
        
    