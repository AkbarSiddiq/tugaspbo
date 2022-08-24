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
    <h2>1. Menampilkan Data Pegawai</h2>
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
        $query = mysqli_query($kon, 'SELECT * FROM tbl_pegawai');
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
    <h2>2. Menampilkan Data Pegawai Laki Laki</h2>
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
    <h2>3. Menampilkan Data Pegawai Sudah Menikah</h2>
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
        $query = mysqli_query($kon, 'SELECT * FROM tbl_pegawai where status= "M"');
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
    <h2>4. Menampilkan Data Pegawai Belum Menikah</h2>
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
        $query = mysqli_query($kon, 'SELECT * FROM tbl_pegawai where status="B"');
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
    <h2>5. Menampilkan Data Pegawai 20 tahun sampai 30</h2>
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
    <h2>6. Menampilkan Data Pegawai 31 tahun sampai 45</h2>
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
        $query = mysqli_query($kon, 'SELECT *, (YEAR(CURDATE())-YEAR(tgl_lahir)) AS umur FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(tgl_lahir)) > 30 ');
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
    <h2>7. Menampilkan Data Pegawai Masa Kerja 1 sampai 5 tahun</h2>
    <table>
        <thead>
            <tr>
                <td>No</td>
                <td>Nama</td>
                <td>Nip</td>
                
                <td>Tanggal Lahir</td>                
                           
                <td>Masa Kerja</td>  

            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($kon, 'SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) <= 5 ');
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
    <h2>8. Menampilkan Data Pegawai Masa Kerja 6 sampai 10 tahun</h2>
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
        $query = mysqli_query($kon, 'SELECT *, (YEAR(CURDATE())-YEAR(mulai_kerja)) AS masa FROM tbl_pegawai WHERE (YEAR(CURDATE())-YEAR(mulai_kerja)) between 6 and 10');
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
    <h2>9. Menampilkan Data Pegawai Masa Kerja 11 sampai 25 tahun</h2>
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