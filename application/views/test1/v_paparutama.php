
<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-1">
        
        <table class="table">
            <tr>
                <th>ID</th>
                <th>Plat</th>
                <th>Status</th>
            </tr>
            <?php 
            if (isset($bus) && !empty($bus)) {
                foreach ($bus as $bu) {
            ?>
            <tr>
                <td><?=$bu->bu_id; ?></td>
                <td><?=$bu->bu_plat; ?></td>
                <td><?=$bu->bu_status; ?></td>
            </tr>
            <?php } } ?>
        </table>
        
        <form method="post" action="<?=site_url('test1/antaForm'); ?>">
            <div class="row">
                <div class="col-md-2">
                    No. Plat :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="bu_plat" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama Saya :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nama_saya" />
                </div>
                <button class="btn btn-success" type="submit">Tekan Saya</button>
            </div>
        </form>
        
    </div>
</div>