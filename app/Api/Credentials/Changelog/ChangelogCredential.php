<?php

namespace App\Api\Credentials\Changelog;

use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Henrotaym\LaravelApiClient\JsonCredential;

class ChangelogCredential extends JsonCredential
{
    public function prepare(RequestContract &$request)
    {
        parent::prepare($request);
        $request->setBaseUrl('trustup-io-changelog/api/');
    }
}
