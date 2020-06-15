<html>
    <body>

        <?php
        if (isset($_POST['Enviar-formulario'])):
            $FormatosPermitidos = array("png", "jpeg", "jpg", "gif");
            $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

            if (in_array($extensao, $FormatosPermitidos)):
                    $pasta = "arquivos/";
                    $temporario = $_FILES['arquivo']['tmp_name'];
                    $novoNome = uniqid().".$extensao";
                    
                    if(move_uploaded_file($temporario, $pasta.$novoNome)):
                        $mensagem = "Upload feito com sucesso!";
                    else:
                        $mensagem = "Erro, não foi possível fazer o Upload!";
                    endif;
                else:
                    $mensagem = "Formato Inválido!";
            endif;

            echo $mensagem;
        endif;
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo"/><br>
            <input type="submit" name="Enviar-formulario"/>
        </form>  

    </body>
</html>