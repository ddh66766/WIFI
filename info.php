
<?php
include 'info.php';
include 'vendor/index.php';

?>

<?php

$test = mysqli_reap_async_query($connect);

if ($test == true) {
    echo 'ok';
} else {
    echo 'error';
}
