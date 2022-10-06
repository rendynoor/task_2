<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Season 2022</title>
    <link rel="icon" href="asset/logo.png">
    <style>
        #tabel{
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            border: 5px solid rgb(0, 0, 0);
        }

        div.border_tabel{
            margin: auto;
            border: 10px outset rgb(81, 255, 0);
            top: 80%;
            width: 20%;
            background-color: rgb(0, 247, 255);  
        }

        section.logo{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: large;
            text-align: center;
        }

        #form{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: medium;
            text-align: center;
        }

        body{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url('asset/bg.jpg');
        }
        .resizedTextbox{
            width: 30px; 
            height: 10px
        }
        footer{
            font-style: bold;
            font-size: medium;
            color: rgb(0, 0, 0);
            text-align: center;
        }

    </style>
</head>
<body>
    <section class="logo">
        <a href="https://www.youtube.com/c/MuseID">
                <img class="logo object-contain" src="asset/logo.png" height="100px" width="100px" style="display:block; margin:auto;">
            </a>
            <p font-size=14px>Anime seasson 2022</p>
    </section>
<br>
    <div class="border_tabel">
        <h2 id="form">MASUKAN ANIME DAN MUSIMNYA</h2>
        <form  method="get" action="detail.php" id="form">
            <table id="tabel">
                <tr>
                    <th>Judul: <input type="text" name="fjudul" id="fjudul" > </th> 
                </tr>

                <tr>
                    <th>Musim: <input type="text" name="fmusim" id="fmusim"> </th>
                </tr>

                <tr>
                    <th>Studio: <input type="text" name="fstudio" id="fstudio" > </th>
                </tr>

    </br>
                <tr>
                    <th>
                        Jumlah episode : <input type="number" class="resizedTextbox" name=fepisod><label for="tab2"> Episode</label>
                    </th>
                </tr>
            </table>
            <input type="submit" name = "submit" value="submit">
        </form>
    </div>

<?php 
    if(isset($_GET['submit']))
    {
        $fjudul = $_GET['fjudul'];
        $fmusim = $_GET['fmusim'];
        $fstudio = $_GET['fstudio'];
        $fepisod = $_GET['fepisod'];
    }
?>
</body>
<footer>
    ©Rndynoda
</footer>
</html>