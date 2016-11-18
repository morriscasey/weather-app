<!DOCTYPE html>

<html>
<head>
    <title>Weather Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Delius+Unicase" rel="stylesheet">
    <link rel="stylesheet" href="css/weather-icons.css">
    <link rel="stylesheet" href="css/weather.css">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="js/weather.js"></script>

</head>

<body id="tempColor">
    <div class="container">
       <div class="row">
            <div class="col-xs-12 text-center">        
                <div id="degree"></div>
            </div>
       </div>
       <div class="row">
            <div class="col-xs-12 text-center">
                <div id="description"></div>
            </div>
       </div>
       <div class="row">
            <div id="humidity" class="col-xs-12 text-center">
                <h3>Humidity: <span id="percentage"></span></h3>
            </div>
       </div>
    </div>



</body>
</html>
