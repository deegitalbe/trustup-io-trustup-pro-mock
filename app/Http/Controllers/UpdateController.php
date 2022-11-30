<?php

namespace App\Http\Controllers;

use App\Api\Endpoints\Changelog\Update;
use Deegitalbe\LaravelTrustupIoAuthClient\Contracts\Api\Endpoints\Auth\UserEndpointContract;
use Deegitalbe\LaravelTrustupIoAuthClient\Resources\UserResource;
use Illuminate\Support\Facades\Cache;

class UpdateController extends Controller
{
    public function index( Update $update)
    {

      $updates = Cache::remember('trustup-changelog-updates-index' , 604800 , function(){
        $response = app()->make(Update::class)->index();
        $updates = $response->response()->get()->data;
        return $updates = collect($updates)->groupBy('published_at');
      });


      
        return view('welcome', [
            'updates' => $updates,
        ]);
    }

    public function invalidCache(){

      Cache::forget('trustup-changelog-updates-index');
    }
}
