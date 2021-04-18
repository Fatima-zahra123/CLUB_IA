<html>

<head>
    <meta charset="UTF-8">
    <title>connexion</title>
    <link rel="stylesheet"  href="style5.css">
</head>

<body>


<div class ="a">
<?php 

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre','root','');


if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['connect'])  )
{

$mail = $_POST["mail_d'utilisateur"] ;
$pass= $_POST["mot_de_passe"];

$sql = "SELECT * FROM membres WHERE email = ? ";
$result = $bdd->prepare($sql);
$result->execute(array($mail));

echo $result->rowCount();


if($result->rowCount()==1) {
	$_SESSION["user"] = $user;
       
	header('Location: http://localhost/projet_php/projet.html');
        exit();
	echo "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Bienvenue ".$_SESSION["user"]." dans notre site</p>";
}
else
{
	echo "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px '>Nous ne trouvons pas votre compte.  veuillez s'inscrire</p>";
	

	
	

	
}

}
 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscription']) )
{

 $name = $_POST["nom_d'utilisateur"];
 
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
               echo  "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Seuls les lettres et espaces sont autorisés</p>";


    }
	
	$email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo  "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Format d'email invalide <br> </p>" ;
    }
	

 $mot_de_passe =  $_POST["mot_de_passe"];
	if (preg_match("/^[a-zA-Z-']*$/",$mot_de_passe)) {
      echo  "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Le mot de passe n'est pas fort ,ajoutez des nombres</p>";
    }
	

      
	
 if (!preg_match("/^[a-zA-Z-']*$/",$mot_de_passe) && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/^[a-zA-Z-' ]*$/",$name) )
	 {
		
                  $nom = htmlspecialchars($_POST["nom_d'utilisateur"]); $mail = htmlspecialchars($_POST['email']); $mdp = $_POST['mot_de_passe'];
                  


$reqnom = $bdd->prepare("SELECT * FROM membres WHERE nom = ? ");
                 $reqnom->execute(array($nom));
                 $nomexist = $reqnom->rowCount();

                  $reqmail = $bdd->prepare("SELECT * FROM membres WHERE email = ? ");
                 $reqmail->execute(array($mail));
                 $mailexist = $reqmail->rowCount();
                   
                  if( $mailexist == 0){
		 $insert = $bdd->prepare("INSERT INTO membres(nom,email,motdepasse) VALUES(?,?,?)");
                  $insert->execute(array($nom,$mail,$mdp));}
                   else { echo "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Adresse mail déja utilisé</p>"; }
                         
     
                 if( $nomexist == 0){                  	
}
else{

 echo "<p style='font-size : 170% ;text-align :center ; color :white ; margin-top : 10px'>Nom déja utilisé</p>"; 

}	


}
}
?>

<div class="container">
<img src="img/12.png" class="logo">	
</div>
<div class="form">
<div class="botton">
<div   id="btn"></div>
<button type="button" class="b"   onclick ="login()">Connexion</button>
<button type="button" class="b" onclick ="register()">Inscription</button>
 
</div>
<div class="icons">
<img src="img/facebook.png">
<img src="img/instag.png">
<img src="img/yout.png">
</div>

<form id="login" class="in"  method="post" action=""  >

<input type="text" name="mail_d'utilisateur" class="in_field" placeholder="Email" required>
<input type="password" name="mot_de_passe" class="in_field" placeholder="Mot de passe" required >
<input type="checkbox" class="check"><span>se souvenir du mot de passe</span>
<button type="submit" class="sub" name="connect" >Connexion</button>


</form>


<form id="register" class="in"  method="post" action=" ">

<input type="text" name="nom_d'utilisateur" class="in_field" placeholder="Nom d'utilisateur" maxlength="30" required>
<input type="text" name="email" class="in_field" placeholder="Email" required >
<input type="password" name="mot_de_passe" class="in_field" placeholder="Mot de passe" required >
<input type="checkbox" class="check"  required><span>J'accepte les termes et  conditions</span>
<button type="submit" class="sub"  name ="inscription" >Inscription</button>


</form>


</div>
</div>

<script>

var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register(){

x.style.left = "-400px";
y.style.left = "50px";
z.style.left = "110px";


}


function login(){

x.style.left = "50px";
y.style.left = "450px";
z.style.left = "0";


}




</script>



<style>
*{
	margin : 0;
	padding : 0 ;
	 font-family :sans-serif ;
	
}

.logo {
	align : top left;
	position : absolute;
	top : -37px;
	left : 5%;
	width :230px


}





.a {
	
	
	background-image : linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)) ,url("img/21.jpg");
	background-position : center ;
		background-size : cover ;

	position : absolute ;
	
}

.form {
	border-radius : 30px;
	width : 380px;
	height : 480px ;
	position : relative ;
	margin : 4% auto ;
	background : white ;
	padding : 5px ;
	overflow :hidden ;
	
	
	
}


.botton {
	
	width : 220px;
	margin :35px auto ;
	position : relative ;
	box-shadow : 0 0 20px 9px #ff61241f ;
	border-radius : 30px;
	
	
	
}


.b {
	
	padding : 10px 21px;
	cursor : pointer ;
	background :transparent;
	border : 0;
	outline :none ;
	position :relative ;
	
	
}

#btn {
	
	top :0 ;
	left :0;
	position : absolute ;
	width :110px ;
	height : 100% ;
	background  : linear-gradient(to right ,#ca2996 ,#6e0d8b );
	border-radius : 30px;
	transition :.5s ;
	
	
}



.icons{
	
	margin : 30px auto ;
	text-align : center;
	
	
}




.icons img {
	width : 30px;
	margin : 0 12px ;
	
	cursor : pointer;
	
	
	
}


.in {
	
	top :180px;
	position :absolute ;
	width :280px;
	transition : .5s;
	
	
}



.in_field {
	
	width : 100%;
	padding :10px 0;
	margin : 5px 0 ;
	border-left : 0;
	border-top : 0;
	border-right : 0;
	border-bottom : 1px solid #999 ;
	outline : none ;
	background : transparent ;
	
	
	
}


.sub {
	
	width :85%;
	padding : 10px 30px ;
	cursor :pointer ;
	display : block ;
	margin :auto ;
	background :linear-gradient(to right ,#ca2996 ,#6e0d8b);
	border :0;
	outline : none;
	border-radius : 30px;
}



.check {
	
	margin : 30px  10px 30px 0;
	
	
	
}

span {
	
	color : #777 ;
	font-size : 12px;
	bottom :68px;
	position :absolute ;
	
	
}

#login {
	
	left :50px
}
#register {
	
	left :450px
}


</style>
</body>



</html>