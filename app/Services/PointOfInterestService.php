<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 9:28 PM
 */

namespace App\Services;


use App\Models\PointOfInterest;

class PointOfInterestService
{
    public function getAllPointOfInterest() {
        $pointOfInterests = PointOfInterest::all();
        return $pointOfInterests;
    }

    public function savePointOfInterest(string $name, float $latitude, float $longitude) {
        $pointOfInterest = new PointOfInterest();
        $pointOfInterest->name = $name;
        $pointOfInterest->latitude = $latitude;
        $pointOfInterest->longitude = $longitude;
        $pointOfInterest->save();
        return $pointOfInterest;
    }
}