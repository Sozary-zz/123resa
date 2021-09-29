<?php

namespace App\Http\Controllers;

use App\Http\Repositories\AttractionsRepo;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function getSearchZone(Request $request, $type)
    {
        $types = ['airport' => 3, 'station' => 2, 'attraction' => 1, 'zone' => 'zone', 'ville' => 'ville'];

        if (array_key_exists($type, $types)) {
            return AttractionsRepo::getSearchZone($types[$type]);
        }

    }
}
