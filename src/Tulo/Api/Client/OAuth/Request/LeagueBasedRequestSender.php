<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Request;

use GuzzleHttp\Exception\GuzzleException;
use League\OAuth2\Client\Provider\AbstractProvider;
use Tulo\Api\Client\Configuration\Request\Request;
use Tulo\Api\Client\Configuration\Response\Response;
use Tulo\Api\Client\OAuth\Request\Builder\LeagueBasedRequestOptionsBuilder;
use Tulo\Api\Client\OAuth\Request\Exception\RequestSenderException;

final class LeagueBasedRequestSender implements RequestSenderInterface
{
    private $provider;
    private $requestOptionsBuilder;

    public function __construct(AbstractProvider $provider, LeagueBasedRequestOptionsBuilder $requestOptionsBuilder)
    {
        $this->provider = $provider;
        $this->requestOptionsBuilder = $requestOptionsBuilder;
    }

    /**
     * @throws RequestSenderException
     */
    public function send(Request $parameters): Response
    {
        $options = $this->requestOptionsBuilder->build($parameters);

        $request = $this->provider->getAuthenticatedRequest(
            $parameters->getHttpMethod()->get(),
            $parameters->getUrl()->get(),
            $parameters->getAccessToken()->getToken(),
            $options
        );

        try {
            $psrResponse = $this->provider->getResponse($request);

            return Response::createFromPsrResponse($psrResponse);
        } catch (GuzzleException $exception) {
            throw RequestSenderException::createFromPrevious($exception);
        }
    }
}
