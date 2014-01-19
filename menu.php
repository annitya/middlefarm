<?php

$menuList = array(
    'index.php' => 'Hjem',
    'page-gallery.php' => 'Bilder'
)

?>

<ul class="nav nav-tabs">
    <?php foreach ($menuList as $url => $name) { ?>
    <li class="active">
        <a href="<?php echo $url?>"><?php echo $name?></a>
    </li>
    <?php } ?>
</ul>