<?

require_once('Publicaaciones.php');
$Publicaciones=  new Publicaciones();
$datos=$_REQUEST;
 $datos=$datos['user'];
  $desc=$datos['desc'];
    $estado=$datos['est'];
    $img=null;
//Guardo la publicacion 

if($Publicaciones->store($user;$desc,$estado,$img);
  //Busco el ultimo id de registrado
 $last=$Publicaciones->last_id();
 //Busco el registro completo
 $registro=$Publicaciones->show($last[0]['pub_id']);
echo json_encode($registro);
?>