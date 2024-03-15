<div class="container-fluid bg-light">
    <nav class="navbar navbar-expand-md navbar-light bg-light">

      <div class="navbar-collapse collapse-horizontal w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <?php
foreach ($okresy as $okres) {
  echo '  <li class="nav-item">';
                             $anchorProperties = [
                              'title' => 'Země',
                              'class' => 'nav-link'
                             ];
                            echo anchor('/okres/'.$okres->kod.'/20', $okres->nazev, $anchorProperties);
  echo '</li>';
}
                      ?>
        </ul>
      </div>
    </nav>
  </div>
