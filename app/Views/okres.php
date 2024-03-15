<?php

$this->extend("layout/layout");

$this->section("content");
echo '<h1>Strankovat:
<button type="button" class="btn btn-primary">'.anchor('/okres/'.$kod.'/10', 10, 'class="text-white text-decoration-none"').'</button>
<button type="button" class="btn btn-primary">'.anchor('/okres/'.$kod.'/20', 20, 'class="text-white text-decoration-none"').'</button>
<button type="button" class="btn btn-primary">'.anchor('/okres/'.$kod.'/50', 50, 'class="text-white text-decoration-none"').'</button>
<button type="button" class="btn btn-primary">'.anchor('/okres/'.$kod.'/100', 100, 'class="text-white text-decoration-none"').'</button>';
?>

<?php
$table = new \CodeIgniter\View\Table();

$table->setHeading('Pořadí obce', 'Název obce', 'Počet adresních míst');


foreach($adresy as $key=>$data){
    $x = ($pager->getCurrentPage() - 1) * $perPage + $key + 1;
    $table->addRow($x, $data->nazev, $data->pocet);
}

$template = [
    'table_open' => '<table class="table">',

    'thead_open'  => '<thead>',
    'thead_close' => '</thead>',

    'heading_row_start'  => '<tr>',
    'heading_row_end'    => '</tr>',
    'heading_cell_start' => '<th scope="col">',
    'heading_cell_end'   => '</th>',

    'tfoot_open'  => '<tfoot>',
    'tfoot_close' => '</tfoot>',

    'footing_row_start'  => '<tr>',
    'footing_row_end'    => '</tr>',
    'footing_cell_start' => '<td>',
    'footing_cell_end'   => '</td>',

    'tbody_open'  => '<tbody>',
    'tbody_close' => '</tbody>',

    'row_start'  => '<tr>',
    'row_end'    => '</tr>',
    'cell_start' => '<td>',
    'cell_end'   => '</td>',

    'row_alt_start'  => '<tr>',
    'row_alt_end'    => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end'   => '</td>',

    'table_close' => '</table>',
];

$table->setTemplate($template);

echo $table->generate();
echo $pager->links();
$this->endsection();
