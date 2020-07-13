<br>
<div class="container">
    <div id="container-tabel">
        <h4>Daftar Pendaftar Skripsi Baru</h4>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">NIM</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">Email</th>
                    <th scope="col">URL</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $counter = 1;
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . $counter++ . "</td>";
                    echo "<td>" . $row->nim . "</td>";
                    echo "<td>" . $row->nama . "</td>";
                    echo "<td>" . $row->email . "</td>";
                    echo "<td><a href='" . $row->url_berkas . "' target='_blank'>URL berkas</a></td>";                    
                    echo "<td>"
                    . "<a href='#' class='tombol-setujui' value='" . $row->nim . "'>Setujui</a> / "
                    . "<a href='#' class='tombol-tolak' value='" . $row->nim . "'>Tolak</a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>

        </table>

    </div>        
</div>




