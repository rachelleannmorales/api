<?php
/**
 * Created by PhpStorm.
 * User: rachelleannmorales
 * Date: 3/23/19
 * Time: 9:18 PM
 */

namespace App\Controllers;


use App\Services\PointOfInterestService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laravel\Lumen\Routing\Controller;

class PointOfInterestController extends Controller
{
    protected $pointOfInterestService;

    public function __construct(PointOfInterestService $pointOfInterestService)
    {
        $this->pointOfInterestService = $pointOfInterestService;
    }

    public function getAll() {
        return new Response($this->pointOfInterestService->getAllPointOfInterest());
    }

    /**
     * @param Request $request
     * @return Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function save(Request $request) {

        $this->validate($request, [
            'name' => 'required|string',
            'latitude' => 'required|between:0,99.99',
            'longitude' => 'required|between:0,99.99'
        ]);

        $response = $this->pointOfInterestService->savePointOfInterest(
            $request->get('name'),
            $request->get('latitude'),
            $request->get('longitude')
        );

        return new Response($response);
    }
}