<?php

$menuList = array(
    'index.php' => 'Hjem',
    'page-gallery.php' => 'Bilder'
)

?>

<ul class="nav nav-tabs">
    <?php foreach ($menuList as $url => $name) {
        $active = strpos($_SERVER['PHP_SELF'], $url) !== false; ?>
    <li class="active<?php if ($active) { ?> current<?php } ?>">
        <a href="<?php echo $url?>"><?php echo $name?></a>
    </li>
    <?php } ?>
</ul>