<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian Matriks</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            border-collapse: collapse;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px 15px;
            text-align: center;
            font-weight: bold;
        }
        .header-hijau {
            background-color: #00FF00;
            color: black;
        }
        .bg-kuning {
            background-color: #FFEB3B;
            color: black;
        }
        .bg-biru {
            background-color: #00BCD4;
            color: black;
        }
    </style>
</head>
<body>

    <h3>Bilangan Genap dari 1 sampai 10</h3>
    <?php

    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>

    <h3>Tabel Perkalian Matriks</h3>
    <table>
        <tr>
            <th class="header-hijau">bilangan</th>
            <?php
            for ($j = 1; $j <= 10; $j++) {
                echo "<th class='header-hijau'>$j</th>";
            }
            ?>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<th class='header-hijau'>$i</th>";
            
            // Kolom perkalian 
            for ($j = 1; $j <= 10; $j++) {
                $hasil = $i * $j;
                
                //warnaa selang-seling kuning dan biru
                if (($i + $j) % 2 == 0) {
                    echo "<td class='bg-kuning'>$hasil</td>";
                } else {
                    echo "<td class='bg-biru'>$hasil</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>