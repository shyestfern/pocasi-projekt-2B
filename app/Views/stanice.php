<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<h1>Přehled meteorologických stanic ve spolkové zemi <?= $zeme->name ?></h1>

<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading('Místo', 'Zem. šířka', 'Zem. délka', 'Nadm. výška');

    foreach($stanice as $row){
        $table->addRow(anchor('data/'.$row->S_ID, $row->place), $row->geo_latitude, $row->geo_longtitude, $row->height." m n. m.");    
    }

    $template = array(
        'table_open'=> '<table class="table table-bordered">',
        'thead_open'=> '<thead>',
        'thead_close'=> '</thead>',
        'heading_row_start'=> '<tr>',
        'heading_row_end'=>' </tr>',
        'heading_cell_start'=> '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
    );
        
    $table->setTemplate($template);
    echo $table->generate();
?>

<?= $this->endSection(); ?>