<?php

$menuList = array(
    'index.php' => 'Hjem',
    'page-astrid-lindgren.php' => 'Astrid Lindgrens Värld',
    'page-demography.php' => 'Demografi',
    'page-gallery.php' => 'Bilder',
    'page-about.php' => 'Om gården'
);

?>

<ul class="nav nav-tabs">
    <?php foreach ($menuList as $url => $name) {
        $active = strpos($_SERVER['PHP_SELF'], $url) !== false; ?>
    <li class="active<?php if ($active) { ?> current<?php } ?>">
        <a href="<?php echo $url . '?pass=middlefarm'?>"><?php echo $name?></a>
    </li>
    <?php } ?>
</ul>