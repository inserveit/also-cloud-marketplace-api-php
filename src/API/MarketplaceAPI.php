<?php

namespace Inserve\ALSOCloudMarketplaceAPI\API;

use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\Model\Marketplace;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class MarketplaceAPI extends AbstractAPIClient
{
    /**
     * @return Marketplace[]
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function list(): array
    {
        $response = $this->apiClient->call(
            '/GetMarketplaces',
            '{}'
        );

        /** @var Marketplace[] $marketplaces */
        $marketplaces = [];
        foreach ($response as $item) {
            $marketplaces[] = $this->apiClient->denormalize($item, Marketplace::class);
        }

        return $marketplaces;
    }
}
