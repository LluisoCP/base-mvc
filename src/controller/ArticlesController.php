<?php


class ArticlesController {

    public function index() {

        echo "Liste d'articles";
        // view( 'articles.article_list', compact('articles'));
    }

    public function show() {

        echo "Affichage de l'article";
        // view('articles.article', compact('article'));
    }

    public function add() {

        echo "Affichage du formulaire";
        view('articles.article-add');
    }

    public function save() {

        // dump($_POST);
        // Ici on traitera les donées et si tout va bien on ferait
        // Header('Location: ' . url('article'));
        // Mais on a fait une helper function pour raccourcir ça, et donc on fait:
        redirectTo('article');
    }

}