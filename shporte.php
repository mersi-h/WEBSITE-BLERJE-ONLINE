<!DOCTYPE html>
<html>
    <?php
    //session_start();
    //include('regjister.php');
    //if(!isset($_SESSION['Perdoruesi'])){
   //$_SESSION['msg']="Ju duhet te logoheni ne fillim per te pare kete faqe";
   //  header('location: form.php');
 //} ?>
    <head>
        <?php include("funksion.php"); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            .img-responsive
            {
                width: 30%;
                margin-bottom: 10px;
                height: 200px;
                
                
            }
            body
            {
                font-family:adobe-arabic-regular;
                font-size: 15px;
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
                /*background-color: white;*/
                
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
            .cmimi-produkti
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
                width: 300px;
                min-width: 300px;
                height: 40px;
                font-family:adobe-arabic-regular;
                margin: 0 auto 40px auto;
                padding: 8px;
                text-align: center;
            }
            a
            {
                margin: 0 10px 0 10px;
                color: black;
                transition: color 0.3s ease;
                font-size: 18px;
                text-decoration: none;
            }
            a:hover
            {
                color: blue;
            }
            
            #cart .table tbody tr td img{
                width: 120px;
                
                
}
            #cart .table tbody tr td input
            {
                width: 40px;
                text-align: right;
                
            }
            #cart .table tbody tr td
            {
                vertical-align: middle;
            }
            #cart .table tfoot
            {
                font-size: 18px;
            }
            .box .box
            {
                background-color: white;
                border-radius: 2px;
                box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
}
            .box .box-footer
            {
                background-color: #f7f7f7;
                margin: 30px -20px 20px;
                padding: 20px;
                border-top: 1px solid #eeeeee;
                
            }
            .box .box-footer:before,
            .box .box-footer:after
            {
                content: "";
                display: table;
}
            .box .box-footer:after{
                clear: both;
            }
            .box .box-header{
                background-color: #f7f7f7;
                margin: -20px -20px 20px;
                padding: 20px;
                border-top: 1px solid #eeeeee;
            }
            #order-summary table
            {
                margin-top: 20px;
            }
            #order-summary table td
            {
                color:#999999;
            }
            #order-summary table tr .total td, #order-summary table tr .total th
            {
                font-size: 18px;
                color: #555555;
                font-weight: 700;
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
        <title></title>
        <?php
        require('lidhja.php');
        
        ?>
        <?php
        include('koka.php');
        ?>
    </head>
    
    <body>
         <div id="cart" class="col-md-9">
             <div class="box">
                 <form action="shporte.php" method="post" enctype="multipart/form-data">
                     <?php // shto_ne_shporte(); ?>
                     <h1>Shporta e blerjeve</h1>
                     <p class="text-muted">Ju keni <?php produkte();?> produkt(e) ne shporte.</p>
                     <div class="table-responsive">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th colspan="2">Produkti</th>
                                     <th>Sasia</th>
                                     <th>Cmimi</th>
                                     <th>Masa</th>
                                     <th colspan="1">Fshi</th>
                                     <th colspan="2">Totali</th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php 
                                 $totali=0;
                                 $rezervim_id=merrIdrezervimin();
     
                                 $zgjidh_produktet=mysqli_query($con,"select * from fatura where ID_rezervim='$rezervim_id'");
                                 while($rrjesht_shporta=mysqli_fetch_array($zgjidh_produktet)){
                                     
                                 $pro_id=$rrjesht_shporta['ID_produktit'];
                                 $pro_masa=$rrjesht_shporta['Masa'];
                                 $pro_sasia=$rrjesht_shporta['Sasia'];
                                     $merr_produktet="select * from produkte where ID='$pro_id'";
                                     $produktet=mysqli_query($con,$merr_produktet);
                                     while($rrjesht_produkt=mysqli_fetch_array($produktet)){
                                         $emer_produkti=$rrjesht_produkt['Emri'];
                                         $foto_produkti=$rrjesht_produkt['Foto'];
                                         $cmimi_produkti=$rrjesht_produkt['Cmimi'];
                                         $sub_total=$rrjesht_produkt['Cmimi'] * $pro_sasia;
                                         $totali+=$sub_total;
                                     
                                 ?>
                                 <tr>
                                     <td>
                                         <img  class="img-responsive" src="/Website/<?php echo $foto_produkti; ?>" alt="produkt1a">
                                     </td>
                                     <td>
                                         <a href="detaje.php?pro_id=<?php echo $pro_id; ?>"><?php echo $emer_produkti; ?></a>
                                     </td>
                                     <td>
                                         <?php echo $pro_sasia; ?>
                                     </td>
                                     <td>
                                         <?php echo $cmimi_produkti; ?>
                                     </td>
                                     <td>
                                         <?php echo $pro_masa;?>
                                     </td>
                                     <td>
                                         <input type="checkbox" name="heq[]" value="<?php echo $pro_id;?>">
                                     </td>
                                     <td>
                                        ALL<?php echo $sub_total; ?>
                                     </td>
                                 </tr>
                             </tbody>
                             <?php } }  ?>
                             <tfoot>
                                 <tr>
                                     <th colspan="5">Totali gjithsej:</th>
                                     <th colspan="2"><?php echo total_cmimi(); ?></th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                     <div class="box-footer">
                         <div class="pull-left">
                             <a href="index.php" type="submit" class="btn btn-info">
                                 <i class="fa fa-chevron-left"></i>Vazhdo te blesh
                                 
                             </a>
                         </div>
                         <div class="pull-right">
                             <button type="submit" name="rifresko" value="Rifresko shporten" class="btn btn-info">
                                 <i class="fa fa-refresh"></i>Rifresko shporten
                    
                             </button>
                             <a href="procedo.php" class="btn btn-primary">Vazhdo procedo
                                 <i class="fa fa-chevron-right"></i>
                             </a>
                         </div>
                     </div>
                 </form>
             </div>
             <?php 
             function rifresko_shporten(){
                 global $con;
                 if(isset($_POST['rifresko'])){
                     foreach($_POST['heq'] as $heq_id){
                         $fshi_produkt="delete from fatura where ID_produktit='$heq_id'";
                         $fshi=mysqli_query($con,$fshi_produkt);
                         if($fshi){
                             echo " <script>window.open('shporte.php','_self')</script>";
                             
                         }
                     }
                 }
             }
             echo $rifreskoshporten=rifresko_shporten();
             ?>
        </div>
        <div class="col-md-3">
            <div style="background-color:white; margin-top:90px;" id="order-summary" class="box">
                <div style="text-align:center;" class="box-header">
                    <h3>Fatura</h3>
                </div>
                <p  style="text-align:center;"class="text-muted">
                    Kostoja eshte llogaritur ne saj te vlerave qe keni vendosur.
                    
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Porosia totali</td>
                                <th>ALL<?php echo $totali; ?></th>
                            </tr>
                            <tr>
                                <td>Transporti</td>
                                <td>0,00 ALL</td>
                            </tr>
                            <tr>
                                <td>Taksa</td>
                                <td>0,00 ALL</td>
                            </tr>
                            <tr class="totali">
                                <td>Totali</td>
                                <th>ALL<?php echo $totali; ?></th>
                            </tr>        
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
    </body>
    
</html>