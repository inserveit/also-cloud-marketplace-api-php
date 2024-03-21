<?php

namespace Inserve\ALSOCloudMarketplaceAPI\API;

use Inserve\ALSOCloudMarketplaceAPI\Client\APIClient;

/**
 *
 */
abstract class AbstractAPIClient
{
    /**
     * @param APIClient $apiClient
     */
    public function __construct(#[\SensitiveParameter] protected APIClient $apiClient)
    {
    }
}
