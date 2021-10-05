<!DOCTYPE html>
<html>
    <head>
        <!-- Jaiver Orlando Criado Arias-->
        <!-- Desarrollo en PHP-->
        <!-- Taller Uso de funciones-->
        
        <!--Lo que se realiza es hacer un codigo donde se puedan describir las operaciones matematicas utilizando funciones -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Evidencia: Taller “Uso de funciones”</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <h3 center >Operaciones Básicas</h3>
            <form id="form_op" name="form" method= "POST" action="index.php">

                <div class="elemento">
                    <label for="num1">Número 1</label>
                    <input type="number" id="num1" name="num1" 
                    placeholder="Ingrese el primer número"></input>
                </div>    
                <div class="elemento">
                    <label for="num2">Número 2</label>
                    <input type="number" id="num2" name="num2" 
                    placeholder="Ingrese el segundo número"></input>
                </div> 
                <div class="content-select">
                    <select class="select" name="operaciones">
                        <option value="0">Suma</option>
                        <option value="1">Resta</option>
                        <option value="2">Multiplica</option>
                        <option value="3">Divide</option>
                    </select>
                    <i></i>
                </div>
                <button type="submit" name="calcular" value="Ver Resultado">Ver Resultado</button>
            </form>
            <?php

            //Usamos el require_once para llamar el archivo php que contiene el código

                require_once './biblioteca.php';

            //Declaramos el método $_REQUEST para tomar los datos del metodo $_POST

                if(isset($_REQUEST['calcular'])){
                    $n1=$_REQUEST['num1'];
                    $n2=$_REQUEST['num2'];
                    $op=$_REQUEST['operaciones'];
                
            //Se utiliza el switch para evaluar la operación    
                    switch ($op) {
                        case 0;    
                            echo "La suma de $n1 + $n2 = ".suma($n1,$n2);
                        break;
                    
                        case 1;
                            echo "La resta de $n1 - $n2 = ".resta($n1,$n2);
                        break;
                    
                        case 2;
                            echo "La multiplicación de $n1 * $n2 = ".multiplica($n1,$n2);
                        break;
                
                        case 3;
                            echo "La división de $n1 / $n2 = ".divide($n1,$n2);
                        break;
            
                        default;
                            echo "Opcion no existe";
                        break;
                    }
                }
            ?>
        </div>

          
    </body>
</html>

