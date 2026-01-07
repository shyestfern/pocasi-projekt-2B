<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>

<h1 class="text-center m-4">Karty všech stanic</h1>

<div class="row">
    <?php foreach($stanice as $row): ?>

        <div class="col-md-6 col-12 mb-4">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">
                        <?= anchor('data/'.$row->S_ID, $row->place); ?>
                    </h5>

                    <img src="<?= base_url('images/flags/'.$row->flag) ?>"
                    class="img-fluid w-100"
                    style="max-height: 250px; object-fit: contain;" 
                    alt="Vlajka <?= $row->name ?>"><br>

                    <ul class="list-unstyled">
                        <li>Zem. šířka: <?= $row->geo_latitude ?></li>
                        <li>Zem. délka: <?= $row->geo_longtitude ?></li>
                        <li>Nadm. výška: <?= $row->height ?> m n. m.</li>
                    </ul>

                    <a href="<?= base_url('data/'.$row->S_ID) ?>" class="btn btn-primary btn-sm mt-2">
                        Zobrazit data
                    </a>
                    
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>