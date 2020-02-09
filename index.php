<!DOCTYPE html> 
 <html>
    <head>
        <meta charset=utf-8 />
        <title>Fashion Website</title>
        <?php
        include("lidhja.php");
        include("stil.php");
        ?>
        <link href="style.css" rel="stylesheet" type="text/css">
    
    </head>
    <body>
        <header>
            
  
            <div class="slideshow middle">
          
    
                <div class="f1"><a href="form.php">HYR</a></div>
                
                
                 <ul class="menu">
                    <li id="kreu"> <a href="index.php">KREU</a></li>
                    
                    <li><a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a></li>
                     
                    
                    <li><a href="bli.php" class="bli">BLI</a>
                        <ul>
                            <li><a href="veshje.php" class="">  VESHJE </a></li>
                            
                            <li><a href="kepuce.php">  KEPUCE </a></li>
                            
                            <li><a href="aksesore.php">AKSESORE</a></li>
                        
                        </ul>
                        
                    
                    <li><a href="marka.php">MARKA</a></li>
                    <li><a href="ulje.php">ULJE</a></li>
                
                </ul>
                 
                    <div class="slides">
                      
                         
                        <input type="radio" name="r" id="r1" checked>
                        <input type="radio" name="r" id="r2">
                        <input type="radio" name="r" id="r3">
                        <input type="radio" name="r" id="r4">
                        <input type="radio" name="r" id="r5">
            
                        <div class="slide s1">
                            <p style =" margin-left:420px;">SWEET AND SULTRY</p>
                            <div class="shop1">
                <a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a>
            </div> 
                        <img src="20200113_01.jpg" alt="">
                        </div>
                        <div class="slide">
                            <p style ="margin-left:380px;">MY SWEET VALENTINE</p>
                            <div class="shop1">
                <a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a>
            </div> 
                        <img src="20200113_02.jpg" alt="">
                        </div>
                        <div class="slide">
                            <p style="margin-left: 570px;">RED HOT</p>
                            <div class="shop1">
                <a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a>
            </div> 
                        <img src="20200113_03.jpg" alt="">
                        </div>
                        <div class="slide">
                            <p style="margin-left: 450px">BEST I EVER HAD</p>
                            <div class="shop1">
                <a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a>
            </div> 
                        <img src="20200120_01.jpg" alt="">
                        </div>
                         <div class="slide">
                             <p style="margin-left: 420px">ROMANTIC RUFFLES</p>
                             <div class="shop1">
                <a href="koleksioni_i_ri.php">KOLEKSIONI I RI</a>
            </div> 
                         <img src="20200120_02.jpg" alt="">
                         </div>
                       
                     </div>
                
                <div class="navigim">
                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>
                    <label for="r3" class="bar"></label>
                    <label for="r4" class="bar"></label>
                    <label for="r5" class="bar"></label>
                  
                </div>
           
            </div>
           
                </header>
            
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
</html