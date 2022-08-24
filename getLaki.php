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
                <td>Jenis Kelamin</td>
                <td>Tanggal Lahir</td>                
                <td>Status</td>                
                <td>Mulai Kerja</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT * FROM tbl_pegawai where jns_kel="L"');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $data['nama'] ?></td>
                <td><?php echo $data['nip'] ?></td>
                <td><?php echo $data['jns_kel'] ?></td>
                <td><?php echo $data['tgl_lahir'] ?></td>
                <td><?php echo $data['status'] ?></td>
                <td><?php echo $data['mulai_kerja'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>