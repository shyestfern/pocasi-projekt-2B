<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1 class="text-center m-4"><?= $zeme->name ?></h1>

<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-8 col-6">
            <img class="img-fluid" src="<?= base_url('images/flags/' . $zeme->vlajka) ?>" alt="<?= "Vlajka spolkové země " . $zeme->name ?>">
        </div>
        <div class="col-lg-4 col-6">
            <img class="img-fluid" src="<?= base_url('images/maps/' . $zeme->mapa) ?>" alt="<?= "Mapa spolkové země " . $zeme->name ?>">
        </div>
    </div>
</div>

<h2 class="text-center m-4">Přehled meteorologických stanic ve spolkové zemi <?= $zeme->name ?></h2>

<div class="row">
    <?php foreach($stanice as $row): ?>

        <div class="col-md-6 col-12 mb-4">
            <div class="card">
                <div class="card-body">

                    <h5 class="card-title">
                        <?= anchor('data/'.$row->S_ID, $row->place); ?>
                    </h5>

                    <ul class="list-unstyled">
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