<br>
<div class="container">
    <h5>Distribusi Per Dosen: <?php echo $nama_dosen->nama; ?></h5>

    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($list_mahasiswa == null) {
                echo "<tr > <td>Tidak Ditemukan !</td></tr>";
            } else {
                foreach ($list_mahasiswa as $mahasiswa) {
                    echo "<tr>";
                    echo "    <td>" . $mahasiswa->nim . "</td>";
                    echo "    <td>" . $mahasiswa->nama . "</td>";
                    echo "    <td><a href='#' class='tombol-redistribusi' id=".$mahasiswa->id_mhs." value='".$mahasiswa->nama ."'>Redistribusi</a></td>";
                    echo "</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</div>