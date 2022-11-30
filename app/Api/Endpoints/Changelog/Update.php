<?php

namespace App\Api\Endpoints\Changelog;

use App\Api\Credentials\Changelog\ChangelogCredential;
use Deegitalbe\LaravelTrustupIoAuthClient\Contracts\Models\UserContract;
use Henrotaym\LaravelApiClient\Contracts\ClientContract;
use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Illuminate\Support\Collection;

class Update
{
    protected ClientContract $client;

    public function __construct(ClientContract $client, ChangelogCredential $credential)
    {
        $this->client = $client->setCredential($credential);
    }

    public function index()
    {
        /** @var RequestContract */
        $request = app()->make(RequestContract::class);

        $request->setVerb('GET')->setUrl('updates')->addQuery([
            'project_id' => '',
            'level_id' => '',
            'futur' => '',
        ]);

        $response = $this->client->try($request, "Cannot get all updates");

        return $response;
    }
}
