<!DOCTYPE html>
<hmtl>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="imagetoolbar" content="no" />
        <title>IGC - Coming Soon!</title>
        <link rel="stylesheet" href="<?php echo base_url() . "assets/"; ?>style.css" type="text/css">

        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
            }

            header {
                background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                    url(<?php echo base_url() . "assets/images/image.png"; ?>);
                height: 100vh;
                background-position: center;
                background-size: cover;
            }

            .Soon {
                top: 50%;
                left: 50%;
                position: absolute;
                transform: translate(-50%, -50%);
                color: #fff;
                text-align: center;
                font-family: "Fira Sans", sans-serif;
            }

            h1 {
                font-size: 65px;
                letter-spacing: 15px;
            }

            hr {
                width: 50%;
                margin: 30px auto;
                border: 1.5px solid #fff;
            }

            p {
                font-size: 20px;
                margin-bottom: 30px;
            }

            #launch {
                font-size: 40px;
                word-spacing: 20px;
            }
        </style>
    </head>

    <body>
        <header>
            <div class="Soon">
                <img src="<?php echo base_url() . "assets/images/Indonesia Gaming Community.png"; ?>" width="180" height="180">
                <br><br>
                <!--<p>Indonesia Gaming Community</p>-->
                <h1>COMING SOON</h1>
                <hr>
                <p id="launch"></p>
            </div>
        </header>
    </body>



    <script>
        var countDownDate = new Date("July 1, 2022 00:00:00").getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("launch").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById('launch').innerHTML = "EXPIRED";
            }

        }, 1000);
    </script>
</hmtl>