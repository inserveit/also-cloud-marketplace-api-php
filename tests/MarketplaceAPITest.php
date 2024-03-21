<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\MarketplaceAPI;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\RequestExceptionInterface;
use Psr\Http\Message\ResponseInterface;

/**
 *
 */
class MarketplaceAPITest extends TestCase
{
    protected ClientInterface $httpClient;
    protected MarketplaceAPI $marketplaceAPI;

    /**
     * @return void
     *
     * @throws MarketplaceAPIException
     */
    public function testAuthenticateException(): void
    {
        $this->setExpectedResponses([
            new BadResponseException(
                '',
                new Request('POST', '/SimpleAPI/SimpleAPIService.svc/rest/GetSessionToken'),
                new Response(body: $this->getErrorResponse('Invalid login!'))
            ),
        ]);

        $this->expectExceptionMessage('GetSessionToken: Invalid login!');
        $this->expectException(MarketplaceAPIException::class);
        $this->marketplaceAPI->authenticate('invalid', 'password');
    }

    /**
     * @return void
     *
     * @throws MarketplaceAPIException
     */
    public function testAuthenticate(): void
    {
        $this->setExpectedResponses([
            new Response(200, [], (string) json_encode('sessionToken')),
        ]);

        self::assertSame(
            'sessionToken',
            $this->marketplaceAPI->authenticate('unit', 'test')
        );
    }

    /**
     * @param array<ResponseInterface|RequestExceptionInterface> $responses
     *
     * @return void
     */
    protected function setExpectedResponses(array $responses): void
    {
        $mockHandler = new MockHandler($responses);
        $handlerStack = HandlerStack::create($mockHandler);

        $this->httpClient = new Client(['handler' => $handlerStack]);
        $this->marketplaceAPI = new MarketplaceAPI($this->httpClient);
    }

    /**
     * @param string $message
     *
     * @return string
     */
    protected function getErrorResponse(string $message): string
    {
        // phpcs:disable
        return sprintf('<Fault xmlns="http://schemas.microsoft.com/ws/2005/05/envelope/none">
    <Code>
        <Value>Sender</Value>
    </Code>
    <Reason>
        <Text xml:lang="en-US">%s</Text>
    </Reason>
    <Detail>
        <ServiceException xmlns="http://schemas.datacontract.org/2004/07/Nervogrid.Platform.API" xmlns:i="http://www.w3.org/2001/XMLSchema-instance">
            <IsSessionExpired>false</IsSessionExpired>
            <IssueToken i:nil="true"/>
            <Message>%s</Message>
        </ServiceException>
    </Detail>
</Fault>', $message, $message);
    }
}
