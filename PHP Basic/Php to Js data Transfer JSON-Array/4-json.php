<?php
// (A) CONVERT ARRAY TO STRING
$data = ["Apple", "Banana", "Cherry"];
$encoded = json_encode($data );
?>

<!-- (B) THIS IS JAVASCRIPT -->
<script>
// (B1) JSON ENCODED STRING
var encoded = '<?=$encoded?>';
console.log(encoded); // STRING

// (B2) JSON PARSE (DECODE)
var data = JSON.parse(encoded);
console.log(data); // ARRAY
</script>
