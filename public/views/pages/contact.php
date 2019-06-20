<?php ob_start(); ?>

<h1>Contactez-nous</h1>

<form action="<?= url('contact') ?>" method="POST">
    <div style="margin:10px 30px;" class="form-group">
        <label for="name">Nom:</label>
        <input id="name" name="name" type="text" class="from-control">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label for="prenom">Prénom:</label>
        <input id="prenom" name="prenom" type="text">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label for="mail">Email:</label>
        <input id="mail" name="mail" type="text">
    </div>
    <button style="margin:10px 30px;" type="submit">Envoyer</button>
</form>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')) ?>