<?php

declare(strict_types=1);

namespace Tulo\Api\Client\OAuth\Rest\Accounts;

use Tulo\Api\Client\Configuration\Data\Email;
use Tulo\Api\Client\Configuration\Request\ApiRequestHeadersFactory;
use Tulo\Api\Client\Configuration\Request\HttpMethod;
use Tulo\Api\Client\Configuration\Request\Request;
use Tulo\Api\Client\Configuration\Request\Url;
use Tulo\Api\Client\OAuth\AccessToken\Exception\CouldNotProvideAccessTokenException;
use Tulo\Api\Client\OAuth\ClientInterface;
use Tulo\Api\Client\OAuth\Request\Exception\RequestSenderException;
use Tulo\Api\Client\OAuth\Rest\Accounts\Request\PasswordResetBodyFactory;
use Tulo\Api\Client\OAuth\Rest\Exception\ApiException;

final class Accounts
{
    private const RESET_PASSWORD_ACTION = 'accounts/request_password_reset';
    private const RESET_PASSWORD_ERROR_MESSAGE_PATTERN = 'Could not reset password. API returned "%s" status code.';

    private $client;
    private $headersFactory;
    private $bodyFactory;

    public function __construct(
        ClientInterface $client,
        ApiRequestHeadersFactory $headersFactory,
        PasswordResetBodyFactory $bodyFactory
    ) {
        $this->client = $client;
        $this->headersFactory = $headersFactory;
        $this->bodyFactory = $bodyFactory;
    }

    /**
     * @throws ApiException
     */
    public function requestPasswordReset(Email $email): void
    {
        try {
            $accessToken = $this->client->getAccessTokenProvider()->getBasedOnClientCredentials();
        } catch (CouldNotProvideAccessTokenException $exception) {
            throw ApiException::createFromPrevious($exception);
        }

        $request = new Request(
            HttpMethod::createForPostMethod(),
            new Url(
                $this->client->getConfiguration()->getUrls()->getBaseApiUrl()->getApiUrl(self::RESET_PASSWORD_ACTION)
            ),
            $accessToken,
            $this->headersFactory->create(),
            $this->bodyFactory->create($email)
        );

        try {
            $response = $this->client->getRequestSender()->send($request);

            if (!$response->wasCreated()) {
                throw new ApiException(
                    sprintf(self::RESET_PASSWORD_ERROR_MESSAGE_PATTERN, $response->getStatusCode())
                );
            }
        } catch (RequestSenderException $exception) {
            throw ApiException::createFromPrevious($exception);
        }
    }
}
