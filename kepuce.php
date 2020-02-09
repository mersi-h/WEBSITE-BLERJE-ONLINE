<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <?php
    
        include("lidhja.php");
        include("koka.php");
        include("funksion.php");
      
    ?>
        <style>
            
            .produkte img
            {
                width: 80%;
                margin-bottom: 10px;
                height: 450px;
                 display: inline-block;
                width: calc((1400px - 76px)/4);
                
            }
            #liste-produktesh
            {
                
                width: 1400px;
                margin:30px auto 20px auto;
                
                height: auto;
                padding: 8px;
                background-color: floralwhite;
                border-radius: 2px;
                box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
            }
            .produkte
            {
                display: inline-block;
                width: calc((1400px - 76px)/4);
                text-align: center;
               
                
            }
            
            .emer-produkti
            {
                width: auto;
                min-width: calc((1400px - 16px)/4);
                font-family:adobe-arabic-regular;
                font-size: 15px;
                color: black;
                font-weight: bold;
                
                
            }
            .cmimi
            {
                width: auto;
                min-width: calc((1400px - 16px)/4);
                font-family:adobe-arabic-regular;
                font-size: 10px;
                color: #3FC380;
                font-weight: bold;
                margin-top: 8px;
                margin-bottom: 12px;
            }
            .fleks
            {
                display: flex;
                justify-content: space-between;
                margin: 20px 0 10px 0;
            }
            .nr-e-faqeve
            {
                  display: inline;
                width: 300px;
                min-width: 300px;
                height: 40px;
                font-family:adobe-arabic-regular;
                margin: 0 auto 40px auto;
                padding: 8px;
                text-align: center;
                
            }
            .nr-e-faqeve li a
            {
                display: inline-block;
                margin: 0 10px 0 10px;
                color: black;
                transition: color 0.3s ease;
                font-size: 18px;
                text-decoration: none;
                
            }
             .nr-e-faqeve li a:hover
            {
                  
                color: blue;
              
            }
            .nr-e-faqeve ul {
                display: inline-flex;
                list-style: none;
            }
            footer
{
    background-color: black;
    margin-top: 20px;
    text-align: center;
    font-size: 15px;
    font-family: adobe-arabic-regular;
    color: white;
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
    
}
        </style>
    <title>Kepuce</title>
   
    </head>
    <body>
  
        <?php  
        $per_page=6;
        if(isset($_GET['page'])){
            $page=$_GET['page'];
        }else{
                $page=1;
            }
        $start_from=($page-1)*$per_page;
            $merr_produktet="select *from produkte WHERE ID_kategori BETWEEN 6 AND 8
            order by 1 LIMIT $start_from,$per_page";
            $produkte=mysqli_query($con,$merr_produktet);
            while($row_produkte=mysqli_fetch_array($produkte)){
                $pro_id=$row_produkte['ID'];
                $pro_emri=$row_produkte['Emri'];
                $pro_cmimi=$row_produkte['Cmimi'];
                $pro_foto=$row_produkte['Foto'];
                echo "
                <div  class='col-md-4 col-sm-6 center-responsive'>
                
                <div class='fleks'>
                <div style='margin:60px;' class='produkte'>
                <a href='detaje.php?pro_id=$pro_id'>
                <img src='/Website/$pro_foto'>
                </a>
                <div style='font-family: adobe-arabic-regular;color: black;
                font-weight: bold;' class='text'>
                <h3><a style='text-decoration: none;color: black;
                font-weight: bold;' href='detaje.php?pro_id=$pro_id'>$pro_emri</a></h3>
                <p class='cmimi'>
                ALL $pro_cmimi
                </p>
                <p class='button'>
               
                <a style='font-size:12px;margin-right:5px;' class='btn btn-info' href='detaje.php?pro_id=$pro_id'>Shiko detajet</a>
                 <a style='font-weight:bold; font-size:12px;margin-left:5px;' class='btn btn-dark' href='detaje.php?pro_id=$pro_id'>
                 <i class='fa fa-shopping-cart'></i> Shto ne shporte </a>
                </p>
                </div>
                </div>
                </div>
                </div>
                ";
            }
              
              ?>
        <center>
        <div class="nr-e-faqeve">
            <ul>
            <?php 

            $query="select * from produkte where ID_kategori BETWEEN 6 AND 8";
                $rez=mysqli_query($con,$query);
                $totali=mysqli_num_rows($rez);
                $total_faqe=ceil($totali / $per_page);
                echo "
                <li>
                <a  style='display:inline; text-decoration:none;'href='kepuce.php?page=1'>".'Faqja e pare'."</a>
                </li>";
                for($i=1;$i<=$total_faqe;$i++){
                    echo " <li>
                    <a style='display:inline; text-decoration:none;'href='kepuce.php?page=".$i."'>".$i."</a>
                    </li>";
                    
                };
                echo "
                <li>
                <a style=' text-decoration:none; href='kepuce.php?page=$total_faqe'>".'Fund'."</a>
                </li>";
            
            
     
        ?> </ul>
        </div>
        </center>
    </body>
    <footer>Kontakt:
         <ul>
             <li>+355 69 5115 035</li>
             <li>email:houseofmersi@gmail.com </li>
             <li>&copy; HouseofMersi <script type="text/javascript">
		   document.write(new Date().getFullYear()); </script>. Të gjitha të drejtat e rezervuara.</li>
             <li>Made by Mersi Huqi</li>
         </ul>
     </footer>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"></html>
