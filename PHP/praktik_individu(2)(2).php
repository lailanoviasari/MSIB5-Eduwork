<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik2_1</title>

    <style>
        td {
            width: max-content;
            padding: 5px;
        }

        table,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <?php
        for ($i = 0; $i <= 10; $i++) {
            echo "<tr>";
            if ($i == 0) {
                for ($j = 0; $j < 3; $j++) {
                    echo "<td style='background-color: DodgerBlue'>";
                    if ($j == 0) {
                        echo "No";
                    } elseif ($j == 1) {
                        echo "Nama";
                    } else {
                        echo "Kelas";
                    }
                    echo "</td>";
                }
            } else {
                if ($i % 2 == 0) {
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td>";
                        if ($j == 0) {
                            echo $i;
                        } elseif ($j == 1) {
                            echo "Nama ke-$i";
                        } else {
                            $minus = 11;
                            echo "Kelas ", $minus - $i;
                        }
                        echo "</td>";
                    }
                } else {
                    for ($j = 0; $j < 3; $j++) {
                        echo "<td style='background-color: LightGray'>";
                        if ($j == 0) {
                            echo $i;
                        } elseif ($j == 1) {
                            echo "Nama ke-$i";
                        } else {
                            $minus = 11;
                            echo "Kelas ", $minus - $i;
                        }
                        echo "</td>";
                    }
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>