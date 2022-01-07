<?php
require_once("Model/Book_manager.class.php");


class BookController
{
    private $bookManager;

    public function __construct()
    {
        $this->bookManager = new Book_manager;
        $this->bookManager->loadBooks();
    }

    public function showBooks()
    {
        $books = $this->bookManager->getBooks();
        require("View/livres.view.php");
    }
}
