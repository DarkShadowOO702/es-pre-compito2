<?php
    if(isset($_GET["options"])){
        print_r($_GET["options"]);
        // se l'array options è definito posso scorrerlo
        // con un for oppure 
        // con un foreach
        // foreach($array as $element)
        //      ... qui $element è l'elemento i-esino d  
        
        foreach($_GET["options"] as $element){
            echo $element;

            // In questo caso particolare

            //
            if(in_array("absolute", $_GET["options"])){
                // Allora calcolo il valore assoluto 
            }

            // Qui controllo se l'utente a selezionato ANCHE square SENZA else if ma solo comn if()
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">

    <h1>calcolatrice</h1>

    <br>

    <label for="a">a:</label>
    <input type="number" id="a" name="a" step="any" required> 
    
    <br>

    <label for="a">b:</label>
    <input type="number" id="b" name="b" step="any" required>  

    <br><br>

    <fieldset>
        <legend > Operazione </legend>
         <div>
            <input id="somma" type="radio" name="options[]" value="somma" />
            <label for="somma">Somma</label>
        </div>

        <div>
            <input id="differenza" type="radio" name="options[]" value="differenza" />
            <label for="differenza">Differenza</label>
        </div>

        <div>
            <input id="prodotto" type="radio" name="options[]" value="prodotto" />
            <label for="prodotto">Prodotto</label>
        </div>

         <div>
            <input id="quoziente" type="radio" name="options[]" value="quoziente" />
            <label for="quoziente">Quoziente</label>
        </div>


    </fieldset>

    <fieldset>
        <legend > Opzioni </legend>
         <div>
            <input id="abs" type="checkbox" name="options[]" value="absolute" />
            <label for="abs">Valore assoluto</label>
        </div>

        <div>
            <input id="square" type="checkbox" name="options[]" value="square" />
            <label for="square">Quadrato</label>
        </div>

        <div>
            <input id="2decimali" type="checkbox" name="options[]" value="2decimali" />
            <label for="2decmali">Arrotonda a 2 decimali</label>
        </div>


    </fieldset>

    <br>

    <input type="submit" value="calcola" value="calcola">

    </form>
</body>
</html>