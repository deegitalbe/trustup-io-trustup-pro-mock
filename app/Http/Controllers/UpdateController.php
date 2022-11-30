<?php

namespace App\Http\Controllers;

use App\Api\Endpoints\Changelog\Update;
use Deegitalbe\LaravelTrustupIoAuthClient\Contracts\Api\Endpoints\Auth\UserEndpointContract;
use Deegitalbe\LaravelTrustupIoAuthClient\Resources\UserResource;

class UpdateController extends Controller
{
    public function index( Update $update)
    {
      $response = $update->index();
      $updates = $response->response()->get()->data;
      $updates = collect($updates)->groupBy('published_at');
        return view('welcome', [
            'updates' => $updates,
        ]);
    }
}
