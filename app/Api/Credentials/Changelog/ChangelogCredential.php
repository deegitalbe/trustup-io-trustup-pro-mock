<?php

namespace App\Api\Credentials\Changelog;

use Deegitalbe\ServerAuthorization\Credential\AuthorizedServerCredential;
use Henrotaym\LaravelApiClient\Contracts\RequestContract;
use Henrotaym\LaravelApiClient\JsonCredential;

class ChangelogCredential extends AuthorizedServerCredential
{
    public function prepare(RequestContract &$request)
    {
        parent::prepare($request);
        $request->setBaseUrl(env('TRUSTUP_IO_CHANGELOG_URL') . '/api');
    }
}
