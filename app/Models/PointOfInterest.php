<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 9:48 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class PointOfInterest
 * @package App\Models
 *
 * @property string $name
 * @property string $latitude
 * @property array $longitude
 */
class PointOfInterest extends Model
{
    protected $table = 'poi';
    public $timestamps = true;

    protected $fillable = [
        'name',
        'latitude',
        'longitude'
    ];

}