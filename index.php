<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Strona główna</title>
        <link href="https://fonts.googleapis.com/css?family=Pacifico|Raleway" rel="stylesheet">
        <link rel="stylesheet" href="index.css"/>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/skeleton.css">
        <script src="jquery-3.2.1.min.js"></script>
        <script src="mainscript.js"></script>
    </head>

    <body onload="inputs();">
        <div class="container">
            <div class="row header">
                <div class="six columns"><img width="50%" src="img/Colgate-Logo.png"> </div>
                <div class="six columns"><p style="font-size: 20px; margin-top:5%;">Keep smile :)</p></div>
            </div>
            <div class="row">
                <div class="three columns">
                    <img class="photo" src="img/ram.jpg"/>
                    <span class="info">RAM DDR3 4GB<br>W magazynie: 200</span>
                    <input type="number" id="iloscRam" class="inputs" min="0" max="200" value="0"/>
                </div>
                <div class="three columns">
                    <img class="photo" src="img/cpu.jpg"/>
                    <span class="info">Intel Core I5 4700KUHDQ<br>W magazynie: 324</span>
                    <input type="number" id="iloscCPU" class="inputs" min="0" max="324" value="0"/>
                </div>
                <div class="three columns">
                    <img class="photo" src="img/dysk.png"/>
                    <span class="info">SEAGEATE BARRACUDA 7200RPM<br>W magazynie: 128</span>
                    <input type="number" id="iloscHDD" class="inputs" min="0" max="128" value="0"/>
                </div>
                <div class="three columns">
                    <img class="photo" src="img/471.jpg"/>
                    <span class="info">AMD RADEON 1000STOPNI<br>W magazynie: 128</span>
                    <input type="number" id="iloscGPU" class="inputs" min="0" max="128" value="0"/>
                </div>
            </div>
            <div class="row" style="margin-top:5%;">
                <div class="six columns">
                    <script>setInterval(wynik, 250);</script>
                    <span id="wynik"></span><br>
                    <span id="wynikbv"></span>
                </div>
                <div class="six columns">
                    <audio id="player" controls hidden src="sound/cash.wav" ></audio>
                    <button onclick="last();">Kupuję!</button>
                </div>
            </div>
        </div>
    </body>
</html>
