<?php
// Create 5 random numbers to be displayed
function numbers() {
for($i = 0; $i < 5; $i++ ) {
    echo " " , (rand(1,69));
    }
}

// Create 1 random Number
function oneNumber() {
    echo (rand(1,29));
   
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lucky Numbers </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
           <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            h1, #num, #oneNum{
                text-align:center;
                font-size: 25px;
               
            }
            
            body {
                background-color: pink;
            }
            #box {
               
                text-align:center;
            }
            button {
                background-color:aqua;
            }
            
        </style>
        
        <script>
                
                $(document).ready(function(){
            $("box").click(function(){
                //alert("The paragraph was clicked.");
            });
        });
        </script>
        
    </head>
        
    <body>
        <h1>Lucky Numbers</h1>
        
        <div id="num" >
            5 Random Numbers:
            <?php Numbers(); ?> 
        </div> 
        
        <br>
        
        <div id="oneNum">
            1 Random Number: 
            <?php oneNumber(); ?>
        </div>
        
        <br>
        
        <form id="box">
            
             <button type="submit" class="btn btn-default">New Numbers</button>
        </form>
        
    </body>
</html>