<?php
if (!isset($_POST['nama'])){
    echo '<script>alert("Mohon isi form terlebih dahulu")</script>
<meta http-equiv="refresh" content="0; url=form-nilai.php">';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST['nama'] ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $_POST['nim'] ?></td>
        </tr>
        <tr>
            <td>Rombel</td>
            <td>:</td>
            <td><?= $_POST['rombel'] ?></td>
        </tr>
        <tr>
            <td>Mata Kuliah</td>
            <td>:</td>
            <td><?= $_POST['matkul'] ?></td>
        </tr>
        <tr>
            <td>Nilai Tugas</td>
            <td>:</td>
            <td><?= $_POST['tugas'] ?></td>
        </tr>
        <tr>
            <td>Nilai UTS</td>
            <td>:</td>
            <td><?= $_POST['uts'] ?></td>
        </tr>
        <tr>
            <td>Nilai UAS</td>
            <td>:</td>
            <td><?= $_POST['uas'] ?></td>
        </tr>
        <tr>
            <td>Predikat</td>
            <td>:</td>
            <td>
                <?php
                $tugas=$_POST['tugas']*(35/100);
                $uts=$_POST['uts']*(30/100);
                $uas=$_POST['uas']*(35/100);
                $total=$tugas+$uts+$uas;

                if ($total<=29){
                    $ket = "E";
                    echo "E";
                }
                elseif ($total<=54){
                    $ket = "D";
                    echo "D";
                }
                elseif ($total<=69){
                    $ket = "C";
                    echo "C";
                }
                elseif ($total<=84){
                    $ket = "B";
                    echo "B";
                }
                elseif ($total<=100){
                    $ket = "A";
                    echo "A";
                }
                else{
                    $ket = "Tidak Valid";
                    echo "Tidak Valid";
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <td>
                <?php
                switch ($ket) {
                    case 'A':
                        echo "Sangat Baik";
                        break;
                    case 'B;':
                        echo "Baik";
                        break;
                    case 'C;':
                        echo "Cukup";
                        break;
                    case 'D;':
                        echo "Kurang";
                        break;
                    case 'E;':
                        echo "Sangat Kurang";
                        break;

                    default:
                        echo "Tidak Diketahui";
                        break;
                }
                ?>
            </td>
        </tr>
    </table>
</body>
</html>