<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Tests;

use Inserve\ALSOCloudMarketplaceAPI\API\CompanyAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\MarketplaceAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\SubscriptionAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\UserAPI;
use Inserve\ALSOCloudMarketplaceAPI\Client\APIClient;
use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\MarketplaceAPIClient;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;

/**
 *
 */
class MarketplaceAPIClientTest extends TestCase
{
    /**
     * @return void
     *
     * @throws Exception
     */
    public function testMagicMethods(): void
    {
        $apiClientMock = $this->createMock(APIClient::class);
        $apiClient = new MarketplaceAPIClient($apiClientMock);

        self::assertInstanceOf(CompanyAPI::class, $apiClient->company);
        self::assertInstanceOf(MarketplaceAPI::class, $apiClient->marketplace);
        self::assertInstanceOf(SubscriptionAPI::class, $apiClient->subscription);
        self::assertInstanceOf(UserAPI::class, $apiClient->user);
    }

    /**
     * @return void
     *
     * @throws MarketplaceAPIException
     * @throws Exception
     */
    public function testAuthenticate(): void
    {
        $clientMock = $this->createMock(APIClient::class);
        $marketplaceAPIClient = new MarketplaceAPIClient($clientMock);

        $clientMock->expects(self::once())
            ->method('call')
            ->with('GetSessionToken', '{"username":"unit","password":"test"}')
            ->willReturn('sessionToken');

        self::assertSame(
            'sessionToken',
            $marketplaceAPIClient->authenticate('unit', 'test')
        );
    }
}
