
<html>
    <head>
        <meta charset="UTF-8">
        <title>Algorand Price</title>
        <style>
            
body {
    margin: auto;
    width: 444px;
    height: 444px;
    font-size: 80px;
    background-color: black; 
    text-align: center;
}

    </style>

    </head>
    
    <body>
        

<?php 

$json = file_get_contents('https://api.coingecko.com/api/v3/simple/price?ids=algorand&vs_currencies=usd');

$pricedata = json_decode($json,true);

$price = ($pricedata['algorand']['usd']);

$json = file_get_contents('https://api.coingecko.com/api/v3/coins/algorand/market_chart?vs_currency=usd&days=1&interval=daily');

$dailydata = json_decode($json,true);

$yesterdayprice = ($dailydata['prices']['0']['1']);
$todayprice = ($dailydata['prices']['1']['1']);




if($todayprice > $yesterdayprice) {

    echo "<p style='font-family:courier; color:green;'>";
    
    print_r($price);
    
    "</p>";
    } 
    elseif ($todayprice < $yesterdayprice) {
   
         echo "<p style='font-family:courier; color:red;'>";
    
    print_r($price);
    
    "</p>";
        
     }
     
         elseif ($todayprice = $yesterdayprice) {
   
      echo "<p style='font-family:courier; color:white;'>";
    
    print_r($price);
    
    "</p>";
        
     }
?>


  
    </body>
</html>