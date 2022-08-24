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
                
                <td>Tanggal Lahir</td>                
                           
                <td>Umur</td>  

            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) <= 30');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nip'] ?></td>
                
                <td><?php echo $data['tgl_lahir'] ?></td>
                
                <td><?php echo $data['umur'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>