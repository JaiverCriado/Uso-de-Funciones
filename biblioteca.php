<?php
    /* Jaiver Orlando Criado Arias
    Desarrollo en PHP
    Taller Uso de funciones */
    
    //Se declara la función de la suma y sus argumentos

    function suma($num1, $num2){

        // Se valida los campos con condicionales
        
                if($num1 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                }
                elseif($num2 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                }
                else{
                    echo"<center>";
                    $suma = $num1+$num2;
                    echo"</center>";
        
        // Retorna el valor solicitado
        
                    return $suma;
                }
        
            }
        
        //Se declara la función de la resta y sus argumentos
        
        function resta($num1, $num2){
        
        // Se valida los campos con condicionales
        
                if($num1 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                }
                elseif($num2 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                }
                else{
                    $resta = $num1-$num2;
                    return $resta;
                }
            }
        
        //Se declara la función de la Multiplicación y sus argumentos
        
        function multiplica($num1, $num2){
        
        // Se valida los campos con condicionales
        
                if($num1 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                }
                elseif($num2 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                   
                }
                else{
                    $multiplicacion = $num1*$num2;
                    return $multiplicacion;
                }
        
            }
        
        //Se declara la función de la División y sus argumentos
        
        function divide($num1, $num2){
        
        // Se valida los campos con condicionales
        
                if($num1 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                    
                }
                elseif($num2 == ""){
                    echo"<center>";
                    die("!Error!");
                    echo"</center>";
                    
                }
                elseif($num1 == 0){
                    echo"<center>";
                    die("La division de $num1 / $num2 = 0");
                    echo"</center>";
                }
                elseif($num2 == 0){
                    echo"<center>";
                    die("La division de $num1 / $num2 = Error");
                    echo"</center>";
                }
                else{
                    echo"<center>";
                    $division = $num1/$num2;
                    echo"</center>";
                    return $division;
                }      
            } 
        ?>
