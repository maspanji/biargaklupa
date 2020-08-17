<div class="card border-light" style="margin: 10px">
    <div class="card-title">
        <h4>Distribusi Bimbingan Baru <?php echo $data_periode->keterangan; ?></h4>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Dosen </h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Total Bimb.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data_dosen_dan_bimbingan as $dosen) {
                                echo "<tr>";
                                echo "<td>" . $dosen->nama . "</td>";
                                echo "<td>" . $dosen->total_bimb. "</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Daftar Mahasasiswa Skripsi (Baru)</h5>
                    <form class="form-inline">
                        Mahasiswa terpilih, didistribusikan ke:  
                        <select name="pembimbing" class="custom-select" style="margin-left: 1em">
                            <?php
                            foreach ($data_dosen as $dosen) {
                                echo "<option value='" . $dosen->id_dosen . "'>" . $dosen->nama . "</option>";
                            }
                            ?>  
                        </select>
                        <input type='hidden' name='id_periode' value='<?php echo $data_periode->idperiode; ?>'>
                        <button id="distribusikan-button" type="button" class="btn btn-secondary" style="margin-left: 1em">Distribusikan</button>
                    </form>
                    <br>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Topik</th>
                                <th scope="col">Berkas</th>
                                <th scope="col">Pilih</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $counter = 1;
                            foreach ($data_mahasiswa as $mahasiswa) {
                                echo "<tr>";
                                echo "<td>" . $counter . "</td>";
                                echo "<td>" . $mahasiswa->nim . "</td>";
                                echo "<td>" . $mahasiswa->nama . "</td>";
                                echo "<td>" . $mahasiswa->tema_skripsi . "</td>";
                                echo "<td><a href='" . $mahasiswa->url_berkas . "'>lihat</a></td>";
                                echo "<td><input type='checkbox' name='mhs_distribusi' value='" . $mahasiswa->id_mhs . "'></td>";
                                echo "</tr>";
                                $counter++;
                            }
                            ?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
