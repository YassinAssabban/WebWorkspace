
<?php

    $test = array('test' => 'test', 'test2' => 'test2');

?>
var test = <?php echo json_encode($test); ?>;

console.log(test);