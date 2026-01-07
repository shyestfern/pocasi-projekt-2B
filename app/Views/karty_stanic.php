<?= $this->extend('layout/template'); ?>

<?= $this->section('content') ?>

<h1 class="text-center m-4">Karty všech stanic</h1>

<div class="row">
    <?php foreach($stanice as $row): ?>

        <div class="col-md-6 col-12 mb-4">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title text-center">
                        <?= anchor('data/'.$row->S_ID, $row->place); ?>
                    </h5>

                    <img src="<?= base_url('images/flags/'.$row->vlajka) ?>"
                    class="img-fluid w-100"
                    style="max-height: 250px; object-fit: contain;" 
                    alt="Vlajka <?= $row->name ?>"><br>

                    <ul class="list-unstyled text-center mt-4">
                        <li>Zem. šířka: <?= $row->geo_latitude ?></li>
                        <li>Zem. délka: <?= $row->geo_longtitude ?></li>
                        <li>Nadm. výška: <?= $row->height ?> m n. m.</li>
                    </ul>

                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?= $this->endSection(); ?>