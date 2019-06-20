<?php ob_start(); ?>

<h1>Créer un nouveau article</h1>

<form action="<?= url('add-article') ?>" method="POST">
    <div style="margin:10px 30px;" class="form-group">
        <label for="name">Votre nom:</label>
        <input id="name" name="name" type="text" class="from-control">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label for="title">Titre de l'article:</label>
        <input id="title" name="title" type="text">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label style="display: block;" for="content">Contenu de l'article:</label>
        <textarea id="content" name="content" rows="12" cols="40"></textarea>
    </div>
    <button style="margin:10px 30px;" type="submit">Envoyer</button>
</form>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')) ?>