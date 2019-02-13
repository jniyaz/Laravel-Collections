<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleCollectionsController extends Controller
{
    // LARAVEL Collections - by Examples

    // ToJson
    public function example1()
    {
        return collect(['product' => 'apple 1 kg', 'price' => 45, 'status' => true])->toJson();
    }

    // all() vs toArray()
    public function example2()
    {
        return collect([
            collect([1, 2, 3, 4, 5]),
            collect([6,7,8,9,10])
        ])->all();

        // ->toArray();
    }

}
