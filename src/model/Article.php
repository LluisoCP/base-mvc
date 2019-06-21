<?php

class Article extends Db {

    const TABLE_NAME = "article";

    protected $id;
    protected $author_id;
    protected $title;
    protected $content;
    protected $created_at;
    protected $updated_at;


    /* Methods */
    /* Setters */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setAuthorId($authorId)
    {
        
        if (!is_numeric($authorId) || intval($authorId)<0)
        {
            throw new Exception("L'id saisi n'est pas valable.");
        }
        // if (!is_int($authorId)) {
        //     throw new Exception('\'author_id doit être un entier.');
        // }
        $this->author_id = $authorId;
    }

    public function setTitle($title)
    {
        if (strlen($title)<3)
        {
            throw new Exception("Le titre est trop court.");
        }
        if (strlen($title)>255)
        {
            throw new Exception("Le titre est trop longue.");
        }
        $this->title = $title;
    }

    public function setContent($content)
    {
        if (strlen($content) < 10) 
        {
            throw new Exception ("Le contenu est trop court.");
        }

        $this->content = $content;
    }

    public function setCreatedAt($createdAt)
    {
        $date = DateTime::createFromFormat('Y-m-d', $createdAt);

        if (!$date) {
            throw new Exception('La date de création saisie n\'est pas au format YYYY-MM-DD.');
        }
        $this->created_at = $createdAt;
    }


    public function setUpdatedAt($updatedAt)
    {
        $date = DateTime::createFromFormat('Y-m-d', $updatedAt);

        if (!$date) {
            throw new Exception('La date d\'actualisation saisie n\'est pas au format YYYY-MM-DD.');
        }
        $this->updated_at = $updatedAt;
    }


    /*Getters */
    
    public function getId()
    {
        return $this->id;
    }

    public function getAuthorId()
    {
        return $this->author_id;
    }

    public function getTitle()
    {
        $titleUppercase = ucfirst($this->title);
        return $titleUppercase;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function getUpdatedAtFormat()
    {

        $timestamp = strtotime($this->updated_at);

        $dateFr = date('d/m/Y', $timestamp);

        return $dateFr;
    }

    public function getCreatedAt()
    {
        return $this->updated_at;
    }

    public function getCreatedAtFormat()
    {
    
        $timestamp = strtotime($this->created_at);
    
        $dateFr = date('d/m/Y', $timestamp);
    
        return $dateFr;
    }

    public function save()
    {
        $data = [
            "title"     => $this->title,
            "content"   => $this->content,
            "author_id" => $this->author_id
        ];

        $id = $this->dbCreate(self::TABLE_NAME, $data);

        $this->id = $id;

        return $this;
    }


}
