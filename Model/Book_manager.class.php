<?php

class Book_manager
{
    private $books;

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }
}
