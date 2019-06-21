<?php ob_start(); ?>

<h1>Créer un nouveau article</h1>

<form action="<?= url('add-article') ?>" method="POST">
    <!-- <div style="margin:10px 30px;" class="form-group">
        <label for="id">Identifiant de l'Article:</label>
        <input id="id" name="id" type="text" class="from-control">
    </div> -->
    <div style="margin:10px 30px;" class="form-group">
        <label for="authorId">Votre Identifiant:</label>
        <input id="authorId" name="authorId" type="text" class="from-control">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label for="title">Titre de l'article:</label>
        <input id="title" name="title" type="text">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label style="display: block;" for="content">Contenu de l'article:</label>
        <textarea id="content" name="content" rows="12" cols="40"></textarea>
    </div>
<!-- 
    <div style="margin:10px 30px;" class="form-group">
        <label style="display: block;" for="createdAt">Date de création (YYYY-MM-DD):</label>
        <input id="createdAt" name="createdAt" type="text">
    </div>
    <div style="margin:10px 30px;" class="form-group">
        <label style="display: block;" for="updatedAt">Date de modification (YYYY-MM-DD):</label>
        <input id="updatedAt" name="updatedAt" type="text">
    </div>
     -->
    <button style=" margin:10px 30px;" type="submit">Envoyer</button>
</form>

<?php $content = ob_get_clean() ?>

<?php view('template', compact('content')) ?>