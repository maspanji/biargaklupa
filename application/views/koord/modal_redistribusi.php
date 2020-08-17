<!-- Modal -->
<div class="modal fade" id="modal-redistribusi" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="header-modal">Redistribusi Mahasiswa (<?php echo $_SESSION['keterangan_periode']; ?>)</h4>
            </div>
            <div class="modal-body">
                <p id="nama_mhs"></p>
                <select id="pembimbing" name="pembimbing" class="custom-select" >
                    <?php
                    foreach ($data_dosen as $dosen) {
                        echo "<option value='" . $dosen->id_dosen . "'>" . $dosen->nama . "</option>";
                    }
                    ?>  
                </select>
                <input type="hidden" id="id_periode" value="<?php echo $_SESSION['id_periode']?>" />
                <input type="hidden" id="id_mhs_in_modal" value="" />
                
                <button style="margin-top: 1em" id="tombol-redistribusi" type="button" class="btn btn-primary" >Redistribusi !</button>
            </div>
            <div class="modal-footer">
                <button id="button_close_modal_redistribusi" type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>