<?php

namespace App\Servieces;

use App\Models\Category;

class CategoryService {


    public function getMainCategory (){

        return Category::where('parent_id',0)->orWhere('parent_id',null)->get();

    }


}
