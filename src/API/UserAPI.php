<?php

namespace Inserve\ALSOCloudMarketplaceAPI\API;

use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\Model\User;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
final class UserAPI extends AbstractAPIClient
{
    /**
     * @param int $accountId
     *
     * @return User|null
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function get(int $accountId): ?User
    {
        $response = $this->apiClient->call(
            'GetUser',
            (string) json_encode(compact('accountId'))
        );

        return $this->apiClient->denormalize($response, User::class);
    }

    /**
     * @param int $companyAccountId
     *
     * @return User[]
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function list(int $companyAccountId): array
    {
        $response = $this->apiClient->call(
            'GetUsers',
            (string) json_encode(compact('companyAccountId'))
        );

        /** @var User[] $users */
        $users = [];
        foreach ($response as $item) {
            $users[] = $this->apiClient->denormalize($item, User::class);
        }

        return $users;
    }
}
