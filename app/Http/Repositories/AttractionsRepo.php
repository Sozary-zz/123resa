<?php

namespace App\Http\Repositories;

use App\Models\Attraction;
use App\Singleton;
use Illuminate\Database\Eloquent\Collection;

class AttractionsRepo extends Singleton
{
    public static function getSearchZone($type): Collection
    {
        return Attraction::where('type_id', $type)
            ->where('accueil', 1)
            ->orderBy('nom')
            ->limit(40)
            ->get();
    }

}
