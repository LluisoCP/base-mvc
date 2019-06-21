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
        // Etant donné qu'on a fait une helper function pour raccourcir ça, et donc on fait:
        // redirectTo('article');



        $article = new Article;
        // $article->setId($_POST['id']);
        $article->setAuthorId($_POST['authorId']);
        $article->setTitle($_POST['title']);
        $article->setContent($_POST['content']);
        // $article->setCreatedAt($_POST['createdAt']);
        // $article->setupdatedAt($_POST['updatedAt']);

        // dump($article);
        $article->save();
        // redirectTo('article');



        /*********************
         * TEST DES SETTERS
         * Décommentez les tests pour voir le résultat !
         ********************/
/*
        // Test du setter setTitle() avec un nom trop court
        // $article->setTitle('a');

        // Test du setter setTitle() avec un nom trop long
        // $article->setTitle( 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ratione, fugiat laboriosam tenetur tempora dolorem. Eos nihil, ipsam sequi iusto accusantium nostrum culpa natus eligendi quae, provident et quis odio. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ratione, fugiat laboriosam tenetur tempora dolorem. Eos nihil, ipsam sequi iusto accusantium nostrum culpa natus eligendi quae, provident et quis odio.');
        

        // Test du setter setTitle() avec un nom correct
        // $article->setTitle('Nouvel article de blog !');

        // Test du setter setContent() avec un contenu trop court
        // $article->setContent('a');

        // Test du setter setContent() avec un contenu correct
        // $article->setContent('Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae ratione, fugiat laboriosam tenetur tempora dolorem. Eos nihil, ipsam sequi iusto accusantium nostrum culpa natus eligendi quae, provident et quis odio.');

        // Test du setter setAuthorId() avec un caractère string
        // $article->setAuthorId('hello');

        // Test du setter setAuthorId() avec un array
        // $article->setAuthorId([1,2,3]);

        // Test du setter setAuthorId() avec un entier
        // $article->setAuthorId(23);

        // Test du setter setCreatedAt() avec une date au mauvais format
        // $article->setCreatedAt('23 juillet 2019');
        // $article->setCreatedAt('23/07/2019');
        // $article->setCreatedAt('23-07-2019');

        // Test du settter setCreatedAt() avec une date au bon format
        // $article->setCreatedAt('2019-07-23');

        // Test du setter setUpdatedAt() avec une date au mauvais format
        // $article->setUpdatedAt('23 juillet 2019');
        // $article->setUpdatedAt('23/07/2019');
        // $article->setUpdatedAt('23-07-2019');

        // Test du settter setUpdatedAt() avec une date au bon format
        // $article->setUpdatedAt('2019-07-23');

        dump($article);

        dump($article->getCreatedAtFormat());
        dump($article->getUpdatedAtFormat());

        echo "Test de getId() : ";
        dump($article->getId());

        echo "Test de getTitle() : ";
        dump($article->getTitle());

        echo "Test de getContent() : ";
        dump($article->getContent());

        echo "Test de getAuthorId() : ";
        dump($article->getAuthorId());

        echo "Test de getCreatedAt() : ";
        dump($article->getCreatedAt());

        echo "Test de getCreatedAtFormat() : ";
        dump($article->getCreatedAtFormat());

        echo "Test de getUpdatedAt() : ";
        dump($article->getUpdatedAt());

        echo "Test de getUpdatedAtFormat() : ";
        dump($article->getUpdatedAtFormat());

        echo "Test des propietés (sans utiliser les getters)";

        dump($article->title());
        dump($article->id());
        dump($article->author_id());
        dump($article->content());
        dump($article->created_at());
        dump($article->updated_at());
*/


    }

}