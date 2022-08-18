<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
            'id' => 1,
            'title' => 'listing One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Consequatur cum doloribus earum, enim eveniet illum laudantium
                                modi mollitia nemo odio optio provident quaerat quos rerum
                                saepe sequi velit vitae voluptatem!'
            ],
            [
                'id' => 2,
                'title' => 'listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Consequatur cum doloribus earum, enim eveniet illum laudantium
                                modi mollitia nemo odio optio provident quaerat quos rerum
                                saepe sequi velit vitae voluptatem!'
            ],
  ];
    }

    public static function find($id)
    {
        $listings = self::all();

        foreach ($listings as $listing)
        {
            if ($listing['id'] == $id){
                return $listing;
            }
        }
    }
}
