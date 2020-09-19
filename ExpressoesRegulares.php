<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Estudo</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Expressões Regulares</h1>
        <h2>Curso de PHP 7 - Aula 55 - Expressões Regulares e Preg_Match [Final]</h2>
        <!-- https://www.youtube.com/watch?v=yL9LQqG8o5I -->
        
                <?php
                
                //VALIDANDO E-MAIL
                $String ="contato@gmail.org";
                $padrao="/^[a-z0-9.\-\_]+@[a-z0-9.\-\_]+\.(com|br|com.br)$/i";
                $data="19/09/2020";
                $datapadrao="/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
                //Ocorrências=> ?(0 ou 1 ocorrência); *(0,várias ocorrências), +(1 ou + ocorrências) 
                
                
                
                /*$String ="asdf";
                $padrao="/^[a-z0-9]+$/"; //definir padrão 1. colocar entre as barras os operadores e caracteres
               */
                // **** ^ => indica o início da expressão $ => indica o fim da expressão
                
                
                /*
                 1)
                $String ="abc";
                $padrao="/^abc$/";
                                 
                 2)
                $String ="abc";
                $padrao="/^[a-z]$/";  RESULTADO INVÁLIDO
                 
                 3)
                $String ="abc";
                $padrao="/^[a-z][a-z][a-z]$/";  RESULTADO VÁLIDO
                
                 4)
                $String ="abc";
                $padrao="/^[a-za-za-z]$/";  RESULTADO INVÁLIDO
                   
                 5)
                 Adicionando /i após o final da expressão ("$") => case insensitive
                 
                 6) Colocando {1,4}, por exemplo, ele valida 4 caracteres
                $String ="a54b";
                $padrao="/^[a-z0-9]{1,4}$/";    RESULTADO VÁLIDO
                 
                 7)
                $String ="a54";
                $padrao="/^[a-z0-9]{4}$/";     RESULTADO INVÁLIDO
                 
                 8) ? => indica que será aceita uma ou nenhuma ocorrência
                $String ="za";
                $padrao="/^[a-z0-9]?$/";   RESULTADO INVÁLIDO
                 
                $String ="a";
                $padrao="/^[a-z0-9]?$/";  RESULTADO VÁLIDO
                 
                $String ="";
                $padrao="/^[a-z0-9]?$/"; RESULTADO VÁLIDO
                 
                 9) Acrescentando o sinal de + é aceito um ou mais ocorrências
                $String ="asdf";
                $padrao="/^[a-z0-9]+$/";  RESULTADO VÁLIDO
                 
                 */
                
               if(preg_match($padrao, $String)):
                    echo 'Válido';
                    echo '<hr>';
                    echo $String;
                else:
                    echo 'inválido';
                    echo '<hr>';
                    
                endif;
                
                if(preg_match($datapadrao, $data)):
                    echo 'Data válida';
                    echo '<hr>';
                    echo $data;
                else:
                    echo 'inválido';
                    echo '<hr>';
                endif;
                
                ?>
        
        <br><br><br><br><br>
        <hr>
        <h2>DevMedia</h2>
        <?php
preg_match_all('/<([^>]+)>(.*)<\/\1>/U',
	"<div>aaa</div><p>bbb</p><div>ccc</div>", $matches);
var_dump($matches);
// Output:
// array(3) {
//   [0]=>
//   array(3) {
//     [0]=>
//     string(14) "<div>aaa</div>"
//     [1]=>
//     string(10) "<p>bbb</p>"
//     [2]=>
//     string(14) "<div>ccc</div>"
//   }
//   [1]=>
//   array(3) {
//     [0]=>
//     string(3) "div"
//     [1]=>
//     string(1) "p"
//     [2]=>
//     string(3) "div"
//   }
//   [2]=>
//   array(3) {
//     [0]=>
//     string(3) "aaa"
//     [1]=>
//     string(3) "bbb"
//     [2]=>
//     string(3) "ccc"
//   }
// }
?>
        
    </body>
</html>


