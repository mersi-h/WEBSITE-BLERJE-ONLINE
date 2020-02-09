<?php
if(!session_id()&& !headers_sent())
{
    session_start();
}
ob_start();

//inicializimi i variablave

$perdoruesi=""; 
$email="";

$errors=array();

//lidhja me databazen
$db=mysqli_connect('localhost','root','','house')or die("could not connect to database");



if(isset($_POST['regjistrohu'])){
    
$perdoruesi=($_POST['perdoruesi']);
$emri=($_POST['emri']);
$mbiemri=($_POST['mbiemri']);
$email=($_POST['email']);
$fjalekalimi=($_POST['fjalekalimi']);

//validimi i formes

if(empty($perdoruesi)){ 
  array_push($errors,"Perdoruesi eshte i nevojshem.");}
if(empty($fjalekalimi)){
    array_push($errors,"Fjalekalimi eshte i nevojshem.");}
if(empty($emri)){
    array_push($errors,"Emri eshte i nevojshem.");}
if(empty($mbiemri)){
    array_push($errors,"Mbiemri eshte i nevojshem.");}
if(empty($email)){
    array_push($errors,"Emaili eshte i nevojshem.");}
    
   
    $perdoruesi_kontrollo="SELECT * FROM perdorues WHERE Perdoruesi= '$perdoruesi' OR Email='$email' LIMIT 1";
    $rez=mysqli_query($db,$perdoruesi_kontrollo);
    $user=mysqli_fetch_assoc($rez);

if($user){
    if($user['Perdoruesi'] === $perdoruesi){ array_push($errors, "Ky perdorues ekziston");}
    if($user['Email'] === $email){ array_push($errors, "Ky email ka nje perdorues ekzistues");}
}


//kontrollon databazen nqs ekzistojn perdorues me te njejtin emer perdoruesi


//regjistrimi i perdorusit
    if(count($errors)==0){
    $fjalekalim1=md5($fjalekalimi);//enkriptimi i passwordit
    $sql="insert into perdorues(Perdoruesi,Fjalekalimi,Emri,Mbiemri,Email)values('$perdoruesi','$fjalekalim1','$emri','$mbiemri','$email')";
    mysqli_query($db,$sql);
    
    $_SESSION["success"]="Ju tani jeni loguar.";
    $_SESSION["Perdoruesi"]=$perdoruesi;
    
    echo("<script>location.href='index1.php?msg=$msg';</script>");

    }

}



if(isset($_POST['hyr'])){
    
    $perdoruesi=($_POST['perdoruesi']);
     $fjalekalimi=($_POST['fjalekalimi']);
    
if(empty($perdoruesi)){ 
  array_push($errors,"Perdoruesi eshte i nevojshem.");}
if(empty($fjalekalimi)){
    array_push($errors,"Fjalekalimi eshte i nevojshem.");}
    
     if(count($errors)==0){
        $fjalekalimi=md5($fjalekalimi);
        $query="SELECT * FROM perdorues WHERE Perdoruesi='$perdoruesi' AND Fjalekalimi='$fjalekalimi'";
        $rez=mysqli_query($db,$query);
 if(mysqli_num_rows($rez)==1)
 {
     $_SESSION["success"]="Ju tani jeni loguar.";
     $_SESSION['Perdoruesi']=$perdoruesi;
    // echo $_SESSION['Perdoruesi'];
//echo("<script>location.href='index1.php';</script>");
     
     header('location:index1.php');
    
 }else{
     array_push($errors, "Perdoruesi/Fjalekalimi kombinim i gabuar!");
 }
    
     }
    
    
    
}
 ob_end_flush();
?>