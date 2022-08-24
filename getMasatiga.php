<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Menampilkan Data Dari Database PHP</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Nip</td>
                
                <td>Mulai Kerja</td>                
                           
                <td>Masa Kerja</td>  

            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) between 11 and 25');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nip'] ?></td>
                
                <td><?php echo $data['mulai_kerja'] ?></td>
                
                <td><?php echo $data['masa'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>