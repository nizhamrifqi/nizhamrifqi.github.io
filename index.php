<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show and Hide table </title>

    <style>
        .wrapper {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            padding: 70px 0;
            max-width: 400px;
            margin: 0 auto;
        }

        .menu,
        .content {
            width: 100%;
        }

        select {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            font-weight: 700;
            border: none;
            border-radius: 8px;
            border: 2px solid #3f51b5;
            box-shadow: 0 15px 15px #efefef;
            appearance: none;
        }

        .content {
            margin: 30px 0;
        }

        .content .data {
            padding: 25px;
            background-color: #fff;
            border: 2px solid #8bc34a;
            border-radius: 8px;
        }

        .content p {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid gainsboro;
        }

        .content p:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .content p b {
            font-weight: 700;
        }

        .content p span {
            float: right;
            font-weight: normal;
        }

        .data {
            display: none;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="menu">
            <select id="name">
                <option value="warna"> Warna </option>
                <option value="buah"> Buah </option>
                <option value="sayur"> Sayur </option>
            </select>
        </div>


        <div class="content">
            <div id="warna" class="data">
                <form method="POST">
                    <div>
                        <label>Nama Warna</label> <br>
                        <input name="warna" type="text" placeholder="Masukkan Warna"> 
                    </div>
                    <div>
                    </br><button>Submit</button>
                    </div>
                </form>
            </div>
            <div id="buah" class="data">
                <form method="POST">
                    <div>
                        <label>Nama Buah</label> <br>
                        <input name="buah" type="text" placeholder="Masukkan buah">
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
            <div id="sayur" class="data">
            <form method="POST">
                    <div>
                        <label>Nama Sayur</label> <br>
                        <input name="sayur" type="text" placeholder="Masukkan sayur">
                    </div>
                    <div>
                        <button>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
error_reporting (E_ALL ^ E_NOTICE);
$warna = $_POST['warna'];
$buah = $_POST['buah'];
$sayur = $_POST['sayur'];

echo $warna.'</br>'. $buah;
if($warna){
    echo "<strong> Kamu memilih warna : </strong> {$warna}";
}
if($buah){
    echo "<strong> Kamu memilih buah : </strong> {$buah}";
}
if($sayur){
    echo "<strong> Kamu memilih sayur : </strong> {$sayur}";
}
?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#name").on('change', function () {
                $(".data").hide();
                $('#' + $(this).val()).fadeIn(700);
            }).change();
        })
    </script>
</body>

</html>