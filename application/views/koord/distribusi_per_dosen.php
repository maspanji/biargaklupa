<br>
<div class="container">
    <h4>Distribusi Per Dosen</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Total Bimb.</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data_dosen_dan_bimbingan as $dosen) {
                echo "<tr>";
                echo "<td>" . $dosen->nama . "</td>";
                echo "<td>" . $dosen->total_bimb . "</td>";
                echo "<td><a href='".site_url()."/koord/distribusi/lihat_bimbingan/".$dosen->id_dosen."'>Lihat</a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>