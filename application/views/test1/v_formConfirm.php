
<div class="row" style="margin-top: 5%;">
    <div class="col-md-10 col-md-offset-1">
        
        <form method="post" action="<?=site_url('test1/terimaForm'); ?>">
            <div class="row">
                <div class="col-md-2">
                    No. Plat :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="bu_plat" value="<?=$input['bu_plat']; ?>" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    Nama Saya :
                </div>
                <div class="col-md-10">
                    <input type="text" class="form-control" name="nama_saya" value="<?=$input['nama_saya']; ?>" />
                </div>
                <button class="btn btn-success" type="submit">Tekan Saya</button>
            </div>
        </form>
        
    </div>
</div>