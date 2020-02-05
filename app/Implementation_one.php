<?php

/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 04/02/2020
 * Time: 10:26 PM
 */

class Students
{
    
    public function borrowBook($requestedBook,$role){
        $jsonData = file_get_contents('books.json');
        $bookAvailable= json_decode($jsonData,true);
        if (is_numeric($requestedBook && $role)) {
            throw new Exception('Numeric priority value not expected');
        }
        if(strtolower($role) == "Senior"){
            if(in_array($requestedBook,$this->books)){
                for($i=0; $i < count($this->books); $i++){
                    if($this->books[$i] == $requestedBook){
                        unset($this->books[$i]);
                    }
                }
                $response="Have your Book";
                $res = json_encode($response);
                return $res;
            }
        }
        else{
            $response="book taken";
            $res = json_encode($response);
            return $res; 
        }
    }


}