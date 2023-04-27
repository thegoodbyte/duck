<?php

/**
 * a DuckController Class
 * @author Martin Halla <marin@halladesign.com>
 * @since 1.0
 */

namespace App\Http\Controllers;

use App\Classes\Duck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DuckController extends Controller
{

    public function index(Duck $duck) {

        return View::make('pages.ducks.index',
            [
                'age' => $duck->getAge(),
                'weight' => $duck->getWeight(),
                'activity' => $duck->getActivity(),
                'gender' => $duck->getgender(),
            ]
        );
    }
}
