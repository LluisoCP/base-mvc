<?php ob_start(); ?>

<h1>Nous sommes cool!</h1>


<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')) ?>