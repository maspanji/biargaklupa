<br>
<div class="container">
    <h5>Ditribusi Per Dosen: <?php echo $nama_dosen->nama; ?></h5>

    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($list_mahasiswa == null) {
                echo "<tr colspan='2'> <td>Tidak Ditemukan !</td></tr>";
            } else {
                foreach ($list_mahasiswa as $mahasiswa)
                echo "<tr>";
                echo "    <td>" . $mahasiswa->nim . "</td>";
                echo "    <td>" . $mahasiswa->nama . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>