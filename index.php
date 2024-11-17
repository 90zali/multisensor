<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Monitoring Sensor</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript" >
        $(document).ready( function(){

            setInterval( function(){
                $("#cektrain1").load("cektrain1.php");
                $("#cektrain2").load("cektrain2.php");
                $("#cektrain3").load("cektrain3.php");
            }, 1000 );
        });
</script>
  </head>
  <body>
      <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">ogin</a></li>
                <li><a href="log.html">Log Data</a></li>
            </ul>
        </nav>
     </header>
    <div class="container" style="text-align: center; margin-top:50px">
        <h2>Monitoring Intensitas Lampu UV <br> secara real time</h2>
<div style="display:flex;">
    <div class="card" style="width:33.33%">
    <div class="card-header" style="font: size 30px;font-weight:bold">
    train 1
    </div>
         <div class="card-body">
            <h1><span id = "cektrain1">0</span>    </h1>
         </div>
        </div>
    <div class="card" style="width:33.33%">
    <div class="card-header" style="font: size 30px;font-weight:bold">
    train 2 
    </div>
         <div class="card-body" >
            <h1><span id = "cektrain2">0</span>    </h1>
         </div>
        </div>
    <div class="card"style="width:33.33%">
    <div class="card-header" style="font: size 30px;font-weight:bold">
    train 3
    </div>
         <div class="card-body">
            <h1><span id = "cektrain3">0</span>    </h1>
         </div>
        </div>
</div>        
</div>
  </body>
</html>