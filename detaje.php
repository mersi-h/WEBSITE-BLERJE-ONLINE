<?php
        require('lidhja.php');
        ?>
        <?php
        include('koka.php');
        include('funksion.php');
        ?>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
            body
            {

            font-family:adobe-arabic-regular;
                font-size: 15px;
                color: black;
            }
            .produkte img
            {
                width: 90%;
                margin-bottom: 10px;
                height: 400px;
                
                
            }
            #liste-produktesh
            {
                width: 900px;
                margin: 30px auto 20px auto;
                height: auto;
                padding: 8px;
                background-color: floralwhite;
                border-radius: 2px;
                box-shadow: 0 2px 2px 0 rgba(0,0,0,0.16),0 0 0 1px rgba(0,0,0,0.08);
            }
            .produkte
            {
                display: inline-block;
                width: calc((900px - 76px)/4);
                text-align: center;
                
                
            }
            
            .emer-produkti
            {
                width: auto;
                min-width: calc((900px - 16px)/4);
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
    </head>
    <a href="bli.php?p_cat=<?php echo $p_kat_id;?> "></a>
    <body>
        <div id="content">
            <div class="container">
                <div class="col-md-3">
                    <?php
                    include("sidebar.php");?>
                </div>
                <div class="col-md-9">
                    <div id="productMain" class="row">
                        <div class="col-sm-6">
                            <div id="mainImage">
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1"></li>
                                        <li data-target="#myCarousel" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <center><img class="img-responsive" src="/Website/<?php echo $pro_foto; ?>" alt="produkt1a"></center>
                                        </div>
                                        <div class="item">
                                            <center><img class="img-responsive" src="/Website/<?php echo $pro_foto1; ?>" alt="produkt1b"></center>
                                        </div>
                                        <div class="item">
                                            <center><img  class="img-responsive" src="/Website/<?php echo $pro_foto2; ?>" alt="produkt1c"></center>
                                        </div>
                                    </div>
                                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left"></span>
                                        <span class="sr-only">Para</span>
                                    </a>
                                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right"></span>
                                        <span class="sr-only">Pas</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="box">
                                <h1 class="text-center" style="margin-top:200px;font-weight:bold; font-family:adobe-arabic-regular;font-size: 25px;"><?php echo $pro_emer; ?></h1>
                                <br><br><br>
                                <?php shtoneshporte(); ?>
                                <form action="shporte.php?shtoneshporte=<?php echo $produkt_id; ?>" class="form-horizontal" method="post">
                                    <div class="form-group">
                                    <label class="col-md-5 control-label" style="font-weight:bold; font-family:adobe-arabic-regular;font-size: 15px; margin-right:0px;">Sasia e produktit</label>
                                    <div class="col-md-7">
                                    <select name="Sasia" id="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                </div>
                                    <div class="form-group">
                                        <label class="col-md-5 control-label" style="font-weight:bold; font-family:adobe-arabic-regular;font-size: 15px; margin-right:0px;">Masa</label>
                                        <div class="col-md-7">
                                            <select name="Masa" class="form-control" required oninput="setCustomValidity('')" oninvalid="setCustomValidity('Duhet te zgjidhni nje mase per produktin')">
                                                <option disabled selected>Zgjidh masen:</option>
                                                <option>XS</option>
                                                <option>S</option>
                                                <option>M</option>
                                                <option>L</option>
                                                <option>L+</option>  
                                            </select>   
                                        </div>
                                    </div>
                                    <p class="cmimi" style="font-weight:bold; font-family:adobe-arabic-regular;font-size: 12px; text-align:center">Cmimi:<?php echo $pro_cmimi; ?></p>
                                    <p class="text-center button"><button class="btn btn-dark i fa fa-shopping-cart"  style="font-size:20px"> Shto ne shporte</button></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box" id="detajet">
                        <br><br><h4>Detajet e produktit</h4>
                        <p>
                            <?php echo $pro_pershkrimi; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
           <center>
        <div class="nr-e-faqeve">
            <ul>
         </ul>  
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">