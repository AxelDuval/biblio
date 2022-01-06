<?php

class Book
{
    private $id;
    private $title;
    private $author;
    private $release_date;
    private $category;
    private $availablity;


    public function __construct($id, $title, $author, $release_date, $category, $availablity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->release_date = $release_date;
        $this->category = $category;
        $this->availablity = $availablity;
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getRelease_date()
    {
        return $this->release_date;
    }
    public function setRelease_date($release_date)
    {
        $this->release_date = $release_date;
    }

    public function getCategory()
    {
        return $this->category;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }


    public function getAvailablity()
    {
        return $this->availablity;
    }
    public function setAvailablity($availablity)
    {
        $this->availablity = $availablity;
    }
}
