<?php

namespace Inserve\ALSOCloudMarketplaceAPI\API;

use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Inserve\ALSOCloudMarketplaceAPI\Model\Company;
use Inserve\ALSOCloudMarketplaceAPI\Model\CreditLimit;
use Symfony\Component\Serializer\Exception\ExceptionInterface;

/**
 *
 */
class CompanyAPI extends AbstractAPIClient
{
    /**
     * @param int $accountId
     *
     * @return Company|null
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function get(int $accountId): ?Company
    {
        $response = $this->apiClient->call(
            '/GetCompany',
            (string) json_encode(compact('accountId'))
        );

        return $this->apiClient->denormalize($response, Company::class);
    }

    /**
     * @param int $parentAccountId
     *
     * @return Company[]
     *
     * @throws MarketplaceAPIException|ExceptionInterface
     */
    public function list(int $parentAccountId): array
    {
        $response = $this->apiClient->call(
            '/GetCompanies',
            (string) json_encode(compact('parentAccountId'))
        );

        /** @var Company[] $companies */
        $companies = [];
        foreach ($response as $item) {
            $companies[] = $this->apiClient->denormalize($item, Company::class);
        }

        return $companies;
    }

    /**
     * @param int $accountId
     *
     * @return CreditLimit|null
     *
     * @throws ExceptionInterface
     * @throws MarketplaceAPIException
     */
    public function getCreditLimit(int $accountId): ?CreditLimit
    {
        $response = $this->apiClient->call(
            '/GetCreditLimit',
            (string) json_encode(compact('accountId'))
        );

        return $this->apiClient->denormalize($response, CreditLimit::class);
    }
}
