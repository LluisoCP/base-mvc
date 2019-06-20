<?php


class ArticlesController {

    public function index() {


        view( 'articles.article_list', compact('articles'));
    }

    public function show($id) {


        view('articles.article', compact('article'));
    }

    public function add() {


        view('articles.article-add');
    }

    public function dealAdd() {

        dump($_POST);
    }
}