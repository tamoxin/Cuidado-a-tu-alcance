<html>
    <head>
        
    </head>
    
    <body>
        <h1 align='center'>Prueba de switch</h1>
        
        <form action='prueba.php' method='POST'>
            <div>
                <label>Ingresa un número del 1 al 10</label>
                <input type='text' name='texto' ></input>
            </div>
            <br>
            <input type='submit' value='Submit'>
        </form>
    </body>
</html>

<?php
    $favcolor = "";
    if(isset($_POST['texto'])){
        $favcolor = $_POST['texto'];   
    }

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        case "1":
            echo "Tu número es 1";
            break;
        case "2":
            echo "Tu número es 2";
            break;
        case "3":
            echo "Tu número es 3";
            break;
        case "4":
            echo "Tu número es 4";
            break;
        case "5":
            echo "Tu número es 5";
            break;
        case "6":
            echo "Tu número es 6";
            break;
        case "7":
            echo "Tu número es 7";
            break;
        case "8":
            echo "Tu número es 8";
            break;
        case "9":
            echo "Tu número es 9";
            break;
        case "10":
            echo "Tu número es 10";
            break;
        default:
            echo "Te equivocaste, dude";
    }
 ?>