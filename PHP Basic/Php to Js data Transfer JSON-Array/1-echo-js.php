<?php
// (A) THIS IS PHP
$phpvar = "Foo Bar";
?>

<!-- (B) THIS IS JAVASCRIPT -->
<script>
<?php
// USE PHP TO ECHO JAVASCRIPT CODE
// var jsvar = 'Foo Bar';
echo "var jsvar = '$phpvar';";
?>
console.log(jsvar);
</script>
