
<style>
*
{
    margin: 0;
    padding: 0;
}
header
{
    
    background-color:black;
    height:110vh;
    background-size:cover;
    background-position: center;
}
.slideshow
{
    width: 1500px;
    height: 790px;
    overflow:hidden;
}
.middle
{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}
.navigim
{
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}
.bar
{
    width: 50px;
    height: 10px;
    border: 2px solid #fff;
    margin: 6px;
    cursor: pointer;
    transition: 0.4s;
}
.bar:hover
{
    background: #fff;
}
input[name="r"]{
    position: absolute;
    visibility: hidden;
}
.slides
{
    width: 500%;
    height: 100%;
    display: flex;
}
.slide
{
    width: 20%;
    transition: 0.6s;
    
    
    
}
.slide p{
    text-align: center;
}
.slide img
{
    width: 100%;
    height: 100%;
}
#r1:checked~.s1
{
    margin-left: 0;
    
}
#r2:checked~.s1
{
    margin-left: -20%;
}
#r3:checked~.s1
{

    margin-left: -40%;
}
#r4:checked~.s1
{
    margin-left: -60%;
}
#r5:checked~.s1
{
    margin-left: -80%;
}
/*#r6:checked~.s1
{
    margin-left: -100%;
}*/
.menu
{
     margin-top: 20px;
    background-position: center;
    float:right;
    list-style: none;
    
    margin-bottom: 2px;
    /*margin-top: 15px;
    margin: 15px;
    padding: 15px;*/
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

/*.menu ul li ul
{
    display:none;
    position: absolute;
    background-color: transparent; 
    padding: 10px;
    border-radius: 0px 0px 4px 4px;
}
.menu ul li ul li:hover ul
{
    display:block;
    margin-top: auto;
    float: right;
  
    
}
.menu ul li ul li 
{
    display: block;
    width:110px;
    border-radius: 20px;
    
    
}
 .menu ul li ul li a:hover
{
    display: block;
    background-color:maroon;
   
    text-decoration: bold;
    text-align: center;
    position: absolute;
}

*/

logo img
{
    margin-top: 20px;
    
    float :left;

    
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
    padding:15px;
    

}

ul li ul li a:hover
{
    background-color: maroon;
    background-size: cover;
    /*text-align: center;*/
    
    
    

}
ul li:hover ul
{
    display: block;
    
}
body
{
    font-family: adobe-arabic-regular;
}
.rrjesht
{
    max-width: 1500px;
    margin: auto;
    display: inline-block;
}
p
{
    display: inline-block;
    position: absolute;
    width:auto;
   
    font-family: adobe-arabic-regular;

    color:white;
    text-transform: uppercase;
    font-size: 70px;
    text-align: center;
    margin-top: 275px;
}

.shop1
{
    position: absolute;
    width:auto;
    display: inline-block;
    margin-top: 370px;
    margin-left: 545px;
}
.f1
{
    margin-top: 25px;
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
    color: lightcoral;
    text-decoration:underline;
    text-decoration-style:solid;
    font-weight: bold;
}
.shop1 a
{
    color:white;
    text-decoration-line: underline;
    text-transform: uppercase;
    font-size: 50px;
    text-align: center;
    margin-top: 270px;
    
}
footer
{
    background-color: black;
    margin-top: 5px;
    text-align: center;
    font-size: 15px;
    font-family: adobe-arabic-regular;
    color: white;
    
}
</style>

