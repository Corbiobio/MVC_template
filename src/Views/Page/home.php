<?php
ob_start();
?>

<section>
    <h1>homepage</h1>

    <?php
    var_dump($users);
    var_dump($user);
    ?>
</section>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';
