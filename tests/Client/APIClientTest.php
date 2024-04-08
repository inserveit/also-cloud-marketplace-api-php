<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Tests\Client;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Inserve\ALSOCloudMarketplaceAPI\Client\APIClient;
use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\RequestExceptionInterface;
use Psr\Http\Message\ResponseInterface;

/**
 *
 */
class APIClientTest extends TestCase
{
    /** @psalm-suppress PropertyNotSetInConstructor */
    protected APIClient $apiClient;

    /**
     * @return void
     */
    public function testAuthenticateException(): void
    {
        $this->setExpectedResponses([
            new BadResponseException(
                '',
                new Request('POST', '/SimpleAPI/SimpleAPIService.svc/rest/GetUnitTest'),
                new Response(body: $this->getErrorResponse('Whoops!'))
            ),
        ]);

        $this->expectExceptionMessage('GetUnitTest: Whoops!');
        $this->expectException(MarketplaceAPIException::class);
        $this->apiClient->call('GetUnitTest', 'body');
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

        $client = new Client(['handler' => $handlerStack]);
        $this->apiClient = new APIClient($client);
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
