<?php
// realizando upload de arquivos 
if ($_FILES) {
	
$foto = $_FILES['foto']['name'];
$destino = 'foto/'.$foto;
if (!is_dir($_POST['dir'])) {
	@mkdir($_POST['dir'],0777);
}
if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino))
{
	/*echo '<h1>Deu certo</h1>';
	echo "<br>TIPO".$_FILES['foto']['type']."<br>TAMANHO".$_FILES['foto']['size'];*/
	echo '<img src="'.$destino.'" height="200px">';
}
else
{
	echo '<h1> deu ruim</h1>';

}
}
?>
<form method="post" action="teste.php" enctype="multipart/form-data">
	<input type="file" name="foto"> <br>
	<input type="submit" name="Vai curintia">
</form>
<?php
//exibir o conteudo de um diretorio 
$path ="foto/";
$diretorio = dir($path);
//vai "varrer" o diretorio e mostra tudo que tiver 
while($arquivo = $diretorio -> read()){
	echo "<img src='".$path.$arquivo."' height='50px'>";
}
$diretorio -> close();

?>