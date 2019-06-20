<?php


class MoviesController {

    public function index() {

        view('movies.movies-list', compact('movies'));
    }

    public function show($id) {



        view('movies.movie', compact('movie'));
    }

    public function add() {


        view('movies.movie-add');
    }

    public function save() {
        
        dump($_POST);
    }


}