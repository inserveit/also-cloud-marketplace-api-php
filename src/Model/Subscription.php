<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Model;

/**
 *
 */
class Subscription
{
    protected ?int $parentAccountId = null;
    protected ?int $companyAccountId = null;
    protected ?string $parentType = null;
    protected ?int $accountId = null;
    protected ?string $accountState = null;
    protected ?string $serviceName = null;
    protected ?string $serviceDisplayName = null;
    protected ?string $contractId = null;
    protected ?string $provisioningStatus = null;
    protected ?int $dependencyAccountId = null;
    protected ?string $dependencyServiceName = null;
    protected ?string $errorDetails = null;
    protected ?string $vendorReferenceId = null;
    protected ?string $secondVendorReferenceId = null;
    protected ?string $productName = null;
    protected ?string $contractEndDate = null;
    protected ?string $priceProtectionEndDate = null;
    protected ?string $scheduledTerminationDate = null;
    protected ?bool $hasRenewActionValuesConfigured = null;
    protected ?int $remainingCreditLimit = null;
    protected ?string $purchaseOrderNumber = null;
    protected ?string $advancePeriodEndDate = null;

    /** @var Field[]|null */
    protected ?array $fields = [];

    /** @var Field[]|null */
    protected ?array $renewFields = [];

    /** @var PriceableItem[]|null */
    protected ?array $priceableItems = [];

    /**
     * @return int|null
     */
    public function getParentAccountId(): ?int
    {
        return $this->parentAccountId;
    }

    /**
     * @return int|null
     */
    public function getCompanyAccountId(): ?int
    {
        return $this->companyAccountId;
    }

    /**
     * @return string|null
     */
    public function getParentType(): ?string
    {
        return $this->parentType;
    }

    /**
     * @return int|null
     */
    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    /**
     * @return string|null
     */
    public function getAccountState(): ?string
    {
        return $this->accountState;
    }

    /**
     * @return string|null
     */
    public function getServiceName(): ?string
    {
        return $this->serviceName;
    }

    /**
     * @return string|null
     */
    public function getServiceDisplayName(): ?string
    {
        return $this->serviceDisplayName;
    }

    /**
     * @return string|null
     */
    public function getContractId(): ?string
    {
        return $this->contractId;
    }

    /**
     * @return string|null
     */
    public function getProvisioningStatus(): ?string
    {
        return $this->provisioningStatus;
    }

    /**
     * @return string|null
     */
    public function getErrorDetails(): ?string
    {
        return $this->errorDetails;
    }

    /**
     * @return string|null
     */
    public function getVendorReferenceId(): ?string
    {
        return $this->vendorReferenceId;
    }

    /**
     * @return bool|null
     */
    public function getHasRenewActionValuesConfigured(): ?bool
    {
        return $this->hasRenewActionValuesConfigured;
    }

    /**
     * @return Field[]|null
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @return PriceableItem[]|null
     */
    public function getPriceableItems(): ?array
    {
        return $this->priceableItems;
    }

    /**
     * @param int|null $parentAccountId
     *
     * @return $this
     */
    public function setParentAccountId(?int $parentAccountId): self
    {
        $this->parentAccountId = $parentAccountId;

        return $this;
    }

    /**
     * @param int|null $companyAccountId
     *
     * @return $this
     */
    public function setCompanyAccountId(?int $companyAccountId): self
    {
        $this->companyAccountId = $companyAccountId;

        return $this;
    }

    /**
     * @param string|null $parentType
     *
     * @return $this
     */
    public function setParentType(?string $parentType): self
    {
        $this->parentType = $parentType;

        return $this;
    }

    /**
     * @param int|null $accountId
     *
     * @return $this
     */
    public function setAccountId(?int $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * @param string|null $accountState
     *
     * @return $this
     */
    public function setAccountState(?string $accountState): self
    {
        $this->accountState = $accountState;

        return $this;
    }

    /**
     * @param string|null $serviceName
     *
     * @return $this
     */
    public function setServiceName(?string $serviceName): self
    {
        $this->serviceName = $serviceName;

        return $this;
    }

    /**
     * @param string|null $serviceDisplayName
     *
     * @return $this
     */
    public function setServiceDisplayName(?string $serviceDisplayName): self
    {
        $this->serviceDisplayName = $serviceDisplayName;

        return $this;
    }

    /**
     * @param string|null $contractId
     *
     * @return $this
     */
    public function setContractId(?string $contractId): self
    {
        $this->contractId = $contractId;

        return $this;
    }

    /**
     * @param string|null $provisioningStatus
     *
     * @return $this
     */
    public function setProvisioningStatus(?string $provisioningStatus): self
    {
        $this->provisioningStatus = $provisioningStatus;

        return $this;
    }

    /**
     * @param string|null $errorDetails
     *
     * @return $this
     */
    public function setErrorDetails(?string $errorDetails): self
    {
        $this->errorDetails = $errorDetails;

        return $this;
    }

    /**
     * @param string|null $vendorReferenceId
     *
     * @return $this
     */
    public function setVendorReferenceId(?string $vendorReferenceId): self
    {
        $this->vendorReferenceId = $vendorReferenceId;

        return $this;
    }

    /**
     * @param bool|null $hasRenewActionValuesConfigured
     *
     * @return $this
     */
    public function setHasRenewActionValuesConfigured(?bool $hasRenewActionValuesConfigured): self
    {
        $this->hasRenewActionValuesConfigured = $hasRenewActionValuesConfigured;

        return $this;
    }

    /**
     * @param Field[]|null $fields
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @param PriceableItem[]|null $priceableItems
     */
    public function setPriceableItems(?array $priceableItems): self
    {
        $this->priceableItems = $priceableItems;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getDependencyAccountId(): ?int
    {
        return $this->dependencyAccountId;
    }

    /**
     * @param int|null $dependencyAccountId
     *
     * @return $this
     */
    public function setDependencyAccountId(?int $dependencyAccountId): self
    {
        $this->dependencyAccountId = $dependencyAccountId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDependencyServiceName(): ?string
    {
        return $this->dependencyServiceName;
    }

    /**
     * @param string|null $dependencyServiceName
     *
     * @return $this
     */
    public function setDependencyServiceName(?string $dependencyServiceName): self
    {
        $this->dependencyServiceName = $dependencyServiceName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSecondVendorReferenceId(): ?string
    {
        return $this->secondVendorReferenceId;
    }

    /**
     * @param string|null $secondVendorReferenceId
     *
     * @return $this
     */
    public function setSecondVendorReferenceId(?string $secondVendorReferenceId): self
    {
        $this->secondVendorReferenceId = $secondVendorReferenceId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProductName(): ?string
    {
        return $this->productName;
    }

    /**
     * @param string|null $productName
     *
     * @return $this
     */
    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContractEndDate(): ?string
    {
        return $this->contractEndDate;
    }

    /**
     * @param string|null $contractEndDate
     *
     * @return $this
     */
    public function setContractEndDate(?string $contractEndDate): self
    {
        $this->contractEndDate = $contractEndDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPriceProtectionEndDate(): ?string
    {
        return $this->priceProtectionEndDate;
    }

    /**
     * @param string|null $priceProtectionEndDate
     *
     * @return $this
     */
    public function setPriceProtectionEndDate(?string $priceProtectionEndDate): self
    {
        $this->priceProtectionEndDate = $priceProtectionEndDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getScheduledTerminationDate(): ?string
    {
        return $this->scheduledTerminationDate;
    }

    /**
     * @param string|null $scheduledTerminationDate
     *
     * @return $this
     */
    public function setScheduledTerminationDate(?string $scheduledTerminationDate): self
    {
        $this->scheduledTerminationDate = $scheduledTerminationDate;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRemainingCreditLimit(): ?int
    {
        return $this->remainingCreditLimit;
    }

    /**
     * @param int|null $remainingCreditLimit
     *
     * @return $this
     */
    public function setRemainingCreditLimit(?int $remainingCreditLimit): self
    {
        $this->remainingCreditLimit = $remainingCreditLimit;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPurchaseOrderNumber(): ?string
    {
        return $this->purchaseOrderNumber;
    }

    /**
     * @param string|null $purchaseOrderNumber
     *
     * @return $this
     */
    public function setPurchaseOrderNumber(?string $purchaseOrderNumber): self
    {
        $this->purchaseOrderNumber = $purchaseOrderNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAdvancePeriodEndDate(): ?string
    {
        return $this->advancePeriodEndDate;
    }

    /**
     * @param string|null $advancePeriodEndDate
     *
     * @return $this
     */
    public function setAdvancePeriodEndDate(?string $advancePeriodEndDate): self
    {
        $this->advancePeriodEndDate = $advancePeriodEndDate;

        return $this;
    }

    /**
     * @return Field[]|null
     */
    public function getRenewFields(): ?array
    {
        return $this->renewFields;
    }

    /**
     * @param array|null $renewFields
     *
     * @return $this
     */
    public function setRenewFields(?array $renewFields): self
    {
        $this->renewFields = $renewFields;

        return $this;
    }
}
