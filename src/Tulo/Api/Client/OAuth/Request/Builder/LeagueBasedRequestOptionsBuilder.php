<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Request\Builder;

use Tulo\Api\Client\Configuration\Request\Request;

final class LeagueBasedRequestOptionsBuilder
{
    public function build(Request $parameters): array
    {
        $options = [];

        if ($parameters->hasBody()) {
            $options['body'] = $parameters->getBody()->get();
        }

        if ($parameters->getHeaders()->hasAtLeastOne()) {
            $options['headers'] = $parameters->getHeaders()->normalize();
        }

        return $options;
    }
}
