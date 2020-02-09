<?php include("lidhja.php");
      //include("funksion.php");
?>
<?php if(isset($_GET['pro_id'])){
        $produkt_id=$_GET['pro_id'];
    $get_produkt="select * from produkte where ID='$produkt_id'";
    $produkt=mysqli_query($con,$get_produkt);
    $row_produkt=mysqli_fetch_array($produkt);
    $p_kat_id=$row_produkt['ID_kategori'];
    $pro_emer=$row_produkt['Emri'];
    $pro_cmimi=$row_produkt['Cmimi'];
    $pro_pershkrimi=$row_produkt['Pershkrimi'];
    $pro_foto=$row_produkt['Foto'];
    $pro_foto1=$row_produkt['Foto1'];
    $pro_foto2=$row_produkt['Foto2'];
    $get_p_kat="select * from nenkategori where ID_kategori='$p_kat_id'";
    $produkt_kategori=mysqli_query($con,$get_p_kat);
    $row_produkt=mysqli_fetch_array($produkt_kategori);
    $p_kat_emer=$row_produkt['Emer_kategori'];
}
    ?>

<!DOCTYPE html> 
 <html>
    <head>
        
        <meta charset=utf-8 />
        <title>Fashion Website</title>
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
    z-index:+1;

}
ul li ul li a
{
    padding: 15px;
    z-index:+1;

}

ul li ul li a:hover
{
    background-color: maroon;
    z-index:+1;
    

}
ul li:hover ul
{
    display: block;
    z-index:+1;
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
    
}
        </style>
    
    </head>
    <body>

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
                                <!---<ul>
                                    <li><a href="">Fustane</a></li>
                                    <li><a href="">Xhaketa</a></li>
                                    <li><a href="">Kominoshe</a></li>
                                    <li><a href="">Pantallona/Funde</a></li>
                                    
                                </ul> --->
                            </li>
                            
                            <li><a href="kepuce.php">KEPUCE</a></li>
                            
                            <li><a href="aksesore.php">AKSESORE</a></li>
                        
                        </ul>
                        
                    
                    <li><a href="marka.php">MARKA</a></li>
                   <!-- <li><a href="profilim.php">PROFILI IM</a></li>-->
                     
                    
        
               
                
            </ul></header>
     </body>
                 
     
</html>      