<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">No Transaksi</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Pesanan</th>
            <th scope="col">Pengiriman</th>
            <th scope="col">Status</th>
            <th scope="col">Bukti Bayar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if (!empty($trans)) {
            foreach ($trans as $data) { // Lakukan looping pada variabel siswa dari controller
                echo "<tr>";
                echo "<td>" . $data->id_transaksi . "</td>";
                echo "<td>" . $data->nama . "</td>";
                echo "<td>" . $data->alamat . "</td>";
                echo "<td>" . $data->pesanan . "</td>";
                echo "<td>" . $data->mode_pengiriman . "</td>";
                echo "<td>" . $data->status . "</td>";
        ?>
                <td><img src="<?= base_url('assets/images/bayar/') . $data->gambar_payment; ?>" class="img-thumbnail" width="100px"></td>
        <?php
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='7'>
            <div class='alert alert-danger' role='alert'>
            Data transaksi tidak ditemukan !
            </div>
            </td></tr>";
        }
        ?>
    </tbody>
</table>