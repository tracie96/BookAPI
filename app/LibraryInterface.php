<?php

/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 04/02/2020
 * Time: 11:04 PM
 */
interface LibraryInterface
{
    public function lendBook($requestedBook,$borrower);
    
}