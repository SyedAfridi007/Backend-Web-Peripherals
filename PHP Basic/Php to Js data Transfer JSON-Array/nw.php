<?php
// (A) CONVERT ARRAY TO STRING
$array = array();

$array[0] = array();
$array[0]['name'] = 'John Doe';
$array[0]['email'] = 'john@example.com';

$array[1] = array();
$array[1]['name'] = 'Jane Doe';
$array[1]['email'] = 'jane@example.com';

$encoded = json_encode($array );
?>

<!-- (B) THIS IS JAVASCRIPT -->
<script>
// (B1) JSON ENCODED STRING
var encoded = '<?=$encoded?>';
console.log(encoded); // STRING

// (B2) JSON PARSE (DECODE)
var data = JSON.parse(encoded);
console.log(data[0]['email']); // ARRAY
</script>
