<?php

/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 04/02/2020
 * Time: 10:22 PM
 */
class Library
{
    public $listOfBooks = [];
    public function __construct($listOfBooks)
    {
        $jsonData = file_get_contents('books.json');
        $listOfBooks= json_decode($jsonData,true);
        $this->title = $listOfBooks;
    }

    public function addBook($newBook){
        return array_push($this->listOfBooks,$newBook);
    }
}