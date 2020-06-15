<html>
<body>

<?php
/*
 * Sanitização (Filtros de limpeza)
 * 
 * Funções (Filter_input - filter_var)
 * 
 * FILTER_SANITIZE_SPECIAL_CHARS
 * FILTER_SANITIZE_NUMBER_INT
 * FILTER_SANITIZE_EMAIL
 * FILTER_SANITIZE_URL
 * 
 */
?>
    <?php
        if(isset($_POST['enviar-formulario'])):
            //ARRAY DE ERROS
            $erros = array();
            
            //SANITIZE
            $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
            
            $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
            if(!filter_var($idade, FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro!";
            endif;
            
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                $erros[] = "Email Inválido!";
            endif;
            
            $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
            if(!filter_var($url, FILTER_VALIDATE_URL)):
                $erros[] = "Url Inválida!";
            endif;
            
            //EXIBINDO MENSAGENS
            if(!empty($erros)):
                foreach ($erros as $erro):
                    echo "<li> $erro </li>";
                endforeach;
                else:
                    echo "Parabéns, seus dados estão corretos";
            endif;
        endif;
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Nome: <input type="text" name="nome"/><br>
        Idade: <input type="text" name="idade"/><br>
        Email: <input type="text" name="email"/><br>
        URL: <input type="text" name="url"/><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>


