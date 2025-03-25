<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Model;

/**
 *
 */
final class Company
{
    protected ?int $parentAccountId = null;
    protected ?int $accountId = null;
    protected ?string $accountState = null;
    protected ?string $companyName = null;
    protected ?string $vatId = null;
    /** @var string[]|null */
    protected ?array $domain = [];
    protected ?string $billingStartDate = null;
    protected ?string $contractId = null;
    protected ?string $purchaseOrderNumber = null;
    protected ?string $customerId = null;
    protected ?string $currency = null;
    protected ?string $address = null;
    protected ?string $city = null;
    protected ?string $country = null;
    protected ?string $zip = null;
    protected ?string $email = null;
    protected ?string $technicalEmail = null;
    protected ?string $salesMan = null;
    protected ?int $marketplace = null;
    /** @var int[]|null */
    protected ?array $marketplaces = [];
    protected ?string $crefoNumber = null;
    protected ?string $mpnId = null;
    protected ?string $vat = null;
    protected ?string $accountType = null;
    protected ?string $numericId = null;
    protected ?string $language = null;
    protected ?bool $onlineBillSplitByEndCustomer = null;

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
    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    /**
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }

    /**
     * @return string[]|null
     */
    public function getDomain(): ?array
    {
        return $this->domain;
    }

    /**
     * @return string|null
     */
    public function getBillingStartDate(): ?string
    {
        return $this->billingStartDate;
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
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return int|null
     */
    public function getMarketplace(): ?int
    {
        return $this->marketplace;
    }

    /**
     * @return int[]|null
     */
    public function getMarketplaces(): ?array
    {
        return $this->marketplaces;
    }

    /**
     * @return string|null
     */
    public function getVat(): ?string
    {
        return $this->vat;
    }

    /**
     * @return string|null
     */
    public function getAccountType(): ?string
    {
        return $this->accountType;
    }

    /**
     * @return string|null
     */
    public function getNumericId(): ?string
    {
        return $this->numericId;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }

    /**
     * @return bool|null
     */
    public function getOnlineBillSplitByEndCustomer(): ?bool
    {
        return $this->onlineBillSplitByEndCustomer;
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
     * @param string|null $companyName
     *
     * @return $this
     */
    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @param string|null $vatId
     *
     * @return $this
     */
    public function setVatid(?string $vatId): self
    {
        $this->vatId = $vatId;

        return $this;
    }

    /**
     * @param string[]|null $domain
     */
    public function setDomain(?array $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @param string|null $billingStartDate
     *
     * @return $this
     */
    public function setBillingStartDate(?string $billingStartDate): self
    {
        $this->billingStartDate = $billingStartDate;

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
     * @param string|null $currency
     *
     * @return $this
     */
    public function setCurrency(?string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @param string|null $address
     *
     * @return $this
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string|null $city
     *
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @param string|null $country
     *
     * @return $this
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @param string|null $zip
     *
     * @return $this
     */
    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param int|null $marketplace
     *
     * @return $this
     */
    public function setMarketplace(?int $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * @param int[]|null $marketplaces
     */
    public function setMarketplaces(?array $marketplaces): self
    {
        $this->marketplaces = $marketplaces;

        return $this;
    }

    /**
     * @param string|null $vat
     *
     * @return $this
     */
    public function setVat(?string $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * @param string|null $accountType
     *
     * @return $this
     */
    public function setAccountType(?string $accountType): self
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * @param string|null $numericId
     *
     * @return $this
     */
    public function setNumericId(?string $numericId): self
    {
        $this->numericId = $numericId;

        return $this;
    }

    /**
     * @param string|null $language
     *
     * @return $this
     */
    public function setLanguage(?string $language): self
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @param bool|null $onlineBillSplitByEndCustomer
     *
     * @return $this
     */
    public function setOnlineBillSplitByEndCustomer(?bool $onlineBillSplitByEndCustomer): self
    {
        $this->onlineBillSplitByEndCustomer = $onlineBillSplitByEndCustomer;

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
    public function getCustomerId(): ?string
    {
        return $this->customerId;
    }

    /**
     * @param string|null $customerId
     *
     * @return $this
     */
    public function setCustomerId(?string $customerId): self
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTechnicalEmail(): ?string
    {
        return $this->technicalEmail;
    }

    /**
     * @param string|null $technicalEmail
     *
     * @return $this
     */
    public function setTechnicalEmail(?string $technicalEmail): self
    {
        $this->technicalEmail = $technicalEmail;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getSalesMan(): ?string
    {
        return $this->salesMan;
    }

    /**
     * @param string|null $salesMan
     *
     * @return $this
     */
    public function setSalesMan(?string $salesMan): self
    {
        $this->salesMan = $salesMan;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCrefoNumber(): ?string
    {
        return $this->crefoNumber;
    }

    /**
     * @param string|null $crefoNumber
     *
     * @return $this
     */
    public function setCrefoNumber(?string $crefoNumber): self
    {
        $this->crefoNumber = $crefoNumber;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMpnId(): ?string
    {
        return $this->mpnId;
    }

    /**
     * @param string|null $mpnId
     *
     * @return $this
     */
    public function setMpnId(?string $mpnId): self
    {
        $this->mpnId = $mpnId;

        return $this;
    }
}
