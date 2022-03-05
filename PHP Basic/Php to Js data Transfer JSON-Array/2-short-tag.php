<?php
// (A) THIS IS PHP
$phpvar = "Foo Bar";
?>

<!-- (B) THIS IS JAVASCRIPT -->
<script>
var jsvar = "<?=$phpvar?>";
console.log(jsvar);
</script>
