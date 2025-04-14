<!DOCTYPE html>
<html>

<head>
    <title> Laporan Kasir</title>
</head>

<body>

    <centr>

        <h2>DATA Laporan Kasir</h2>
    </centr>

    <?php
    include '../koneksi.php';
    ?>

    <table border="1" style="width: 100%">
        <tr>
            <th width="1%">No</th>
            <th>ID penjualan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th width="5%">Total Harga</th>
        </tr>
        <?php
        $no = 1;
        $sql = mysqli_query($koneksi, "SELECT * FROM Pelanggan INNER JOIN Penjualan ON Pelanggan.PelangganID=Penjualan.PelangganID");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['PelangganID']; ?></td>
            <td><?php echo $data['NamaPelanggan']; ?></td>
            <td><?php echo $data['Alamat']; ?></td>
            <td><?php echo $data['TotalHarga']; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <script>
    window.print();
    </script>

</body>

</html>