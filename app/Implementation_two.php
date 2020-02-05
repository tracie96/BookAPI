<?php

/**
 * Created by PhpStorm.
 * User: Tracy
 * Date: 04/02/2020
 * Time: 10:26 PM
 */

class Teachers
{
    
    public function borrowBook($requestedBook,$role){
        $jsonData = file_get_contents('books.json');
        $bookAvailable= json_decode($jsonData,true);
        if (is_numeric($requestedBook && $role)) {
            throw new Exception('Numeric priority value not expected');
        }
        if(strtolower($role) == "Teacher"){
            if(in_array($requestedBook,$this->bookAvailable)){
                for($i=0; $i < count($this->bookAvailable); $i++){
                    if($this->bookAvailable[$i] == $requestedBook){
                        unset($this->bookAvailable[$i]);
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
