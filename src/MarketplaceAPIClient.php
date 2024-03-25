<?php

namespace Inserve\ALSOCloudMarketplaceAPI;

use GuzzleHttp\ClientInterface;
use Inserve\ALSOCloudMarketplaceAPI\API\CompanyAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\MarketplaceAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\SubscriptionAPI;
use Inserve\ALSOCloudMarketplaceAPI\API\UserAPI;
use Inserve\ALSOCloudMarketplaceAPI\Client\APIClient;
use Inserve\ALSOCloudMarketplaceAPI\Exception\MarketplaceAPIException;
use Psr\Log\LoggerInterface;
use SensitiveParameter;

/**
 * @property CompanyAPI      $company
 * @property MarketplaceAPI  $marketplace
 * @property SubscriptionAPI $subscription
 * @property UserAPI         $user
 */
class MarketplaceAPIClient
{
    protected APIClient $apiClient;

    /**
     * @param ClientInterface      $client
     * @param LoggerInterface|null $logger
     */
    public function __construct(protected ClientInterface $client, protected ?LoggerInterface $logger = null)
    {
        $this->apiClient = new APIClient($this->client, $this->logger);
    }

    /**
     * @param string        $name
     * @param array<string> $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments): mixed
    {
        return $this->__get($name);
    }

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function __get(string $name): mixed
    {
        $fqdnClass = sprintf('%s\\API\\%sAPI', __NAMESPACE__, ucfirst($name));

        if (class_exists($fqdnClass)) {
            return new $fqdnClass($this->apiClient);
        }

        return null;
    }

    /**
     * @param string $username
     * @param string $password
     *
     * @return string
     *
     * @throws MarketplaceAPIException
     */
    public function authenticate(string $username, #[SensitiveParameter] string $password): string
    {
        $loginData = json_encode(compact('username', 'password'));
        $sessionToken = (string) $this->apiClient->call('GetSessionToken', (string) $loginData);
        $this->apiClient->setSessionToken($sessionToken);

        return $sessionToken;
    }
}
