<html>
    <body>
        <pre>
            <?php
            if (isset($_POST['Enviar-formulario'])):
                var_dump($_FILES);
                $quantidadearquivos = count($_FILES["arquivo"]["name"]);
                $contador = 0;
            
                while ($contador < $quantidadearquivos):
                    $FormatosPermitidos = array("png", "jpeg", "jpg", "gif");
                    $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);

                    if (in_array($extensao, $FormatosPermitidos)):
                        $pasta = "arquivos/";
                        $temporario = $_FILES['arquivo']['tmp_name'][$contador];
                        $novoNome = uniqid() . ".$extensao";

                        if (move_uploaded_file($temporario, $pasta . $novoNome)):
                            echo "Upload feito com sucesso para $pasta$novoNome<br>";
                        else:
                            echo "Erro ao enviar o arquivo $temporario";
                        endif;
                    else:
                        echo "$extensao não é permitida!<br>";
                    endif;
                    $contador ++;
                endwhile;
            endif;
            ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo[]" multiple/><br>
            <input type="submit" name="Enviar-formulario"/>
        </form>  
        </pre>
    </body>
</html>