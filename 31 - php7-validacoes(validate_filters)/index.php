<html>
<body>

<?php
/*
 * Validações
 * 
 * Funções (Filter_input - filter_var)
 * 
 * FILTER_VALIDATE_INT
 * FILTER_VALIDATE_FLOAT
 * FILTER_VALIDATE_EMAIL
 * FILTER_VALIDATE_IP
 * FILTER_VALIDATE_URL
 * 
 */
?>
    <?php
        if(isset($_POST['enviar-formulario'])):
            //ARRAY DE ERROS
            $erros = array();
            
            //VALIDAÇÕES
            if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
                $erros[] = "Idade precisa ser um inteiro";
            endif;
            
            if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
                $erros[] =  "Email inválido!";
            endif;
            
            if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
                $erros[] = "Peso precisa ser um float";
            endif;
            
            if(!$IP = filter_input(INPUT_POST, 'IP', FILTER_VALIDATE_IP)):
                $erros[] = "IP inválido!";
            endif;
            
            if(!$URl = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
                $erros[] = "URL inválido!";
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
        Idade: <input type="text" name="idade"/><br>
        Email: <input type="text" name="email"/><br>
        Peso: <input type="text" name="peso"/><br>
        IP: <input type="text" name="IP"/><br>
        URL: <input type="text" name="url"/><br>
        <button type="submit" name="enviar-formulario">Enviar</button>
    </form>

</body>
</html>
