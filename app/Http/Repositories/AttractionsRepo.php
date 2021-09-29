<?php

namespace App\Http\Repositories;

use App\Models\Attraction;
use App\Models\ZoneTouristique;
use App\Singleton;
use Illuminate\Database\Eloquent\Collection;

class AttractionsRepo extends Singleton
{
    public static function getSearchZone($type): Collection
    {
        if ($type === 'zone') {
            return ZoneTouristique::orderBy('nom')->get();
        }

        if ($type === 'ville') {
            return new Collection([
                ['nom' => 'Hôtel Aix-en-Provence'], ['nom' => 'Hôtel Annecy'], ['nom' => 'Hôtel Avignon'], ['nom' => 'Hôtel Biarritz'], ['nom' => 'Hôtel Bordeaux'], ['nom' => 'Hôtel Cannes'], ['nom' => 'Hôtel Grenoble'], ['nom' => 'Hôtel La Rochelle'], ['nom' => 'Hôtel Lille'], ['nom' => 'Hôtel Lourdes'], ['nom' => 'Hôtel Lyon'], ['nom' => 'Hôtel Marseille'], ['nom' => 'Hôtel Montpellier'], ['nom' => 'Hôtel Nantes'], ['nom' => 'Hôtel Nice'], ['nom' => 'Hôtel Orléans'], ['nom' => 'Hôtel Paris'], ['nom' => 'Hôtel Strasbourg'], ['nom' => 'Hôtel Toulouse'], ['nom' => 'Hôtel Tours'], ['nom' => 'Hôtel Vichy'],
            ]);

        }

        return Attraction::where('type_id', $type)
            ->where('accueil', 1)
            ->orderBy('nom')
            ->limit(40)
            ->get();
    }

}
