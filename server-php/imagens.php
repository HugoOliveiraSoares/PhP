<?php
  $nome_arquivo = $_GET['nome'];
  $dir = 'imagem/';
  if (!$nome_arquivo){
     $array_dir = scandir($dir);
     foreach ($array_dir as $images)
     {
        if ($images != "." && $images != "..")
	{
	  echo "<img src='/imagem/$images' width=150 height=150 />";
	  echo "<a href=?nome=$images><img src='imagem/lixeira.png' width=30 height=30 border=0/></a>&nbsp;&nbsp;";
	}
     }
  }else{
	unlink ($dir.$nome_arquivo);
	echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=nome_do_arquivo.php'>";
  }
?>
