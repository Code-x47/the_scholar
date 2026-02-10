<?php

namespace App\Services;


class ValidationService {
   
   public function ValidateCategory($data) {
          return  validator($data, [
            "name"=>"required",
          ])->validate();
   }


   public function ValidateJournal($data) {
    return validator($data, [
       "title" => "required",
       //"slug" => "required",
        "description" => "required",
      //  "issn" => "required",
         "publisher" => "required",
         "category_id" => "required",
    ])->validated();
   }

}