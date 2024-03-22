<?php

namespace Inserve\ALSOCloudMarketplaceAPI\API;

use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\Model\Subscription;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class SubscriptionAPI extends AbstractAPIClient
{
    /**
     * @param int $accountId
     *
     * @return Subscription|null
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function get(int $accountId): ?Subscription
    {
        $response = $this->apiClient->call(
            '/GetSubscription',
            (string) json_encode(compact('accountId'))
        );

        return $this->apiClient->denormalize($response, Subscription::class);
    }

    /**
     * @param int  $parentAccountId
     * @param bool $excludeUserLevel
     *
     * @return Subscription[]
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function list(int $parentAccountId, bool $excludeUserLevel = false): array
    {
        $response = $this->apiClient->call(
            '/GetSubscriptions',
            (string) json_encode(compact('parentAccountId', 'excludeUserLevel'))
        );

        /** @var Subscription[] $subscriptions */
        $subscriptions = [];
        foreach ($response as $item) {
            $subscriptions[] = $this->apiClient->denormalize($item, Subscription::class);
        }

        return $subscriptions;
    }
}
