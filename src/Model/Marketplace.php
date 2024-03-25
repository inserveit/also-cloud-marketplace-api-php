<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Model;

/**
 *
 */
class Marketplace
{
    protected ?int $id = null;
    protected ?string $name = null;
    protected ?int $serviceCount = null;
    protected ?int $hiddenServiceCount = null;
    protected ?int $assigneeCount = null;
    protected ?int $priority = null;
    protected ?string $pricingMode = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return $this
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string|null $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getServiceCount(): ?int
    {
        return $this->serviceCount;
    }

    /**
     * @param int|null $serviceCount
     *
     * @return $this
     */
    public function setServiceCount(?int $serviceCount): self
    {
        $this->serviceCount = $serviceCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getHiddenServiceCount(): ?int
    {
        return $this->hiddenServiceCount;
    }

    /**
     * @param int|null $hiddenServiceCount
     *
     * @return $this
     */
    public function setHiddenServiceCount(?int $hiddenServiceCount): self
    {
        $this->hiddenServiceCount = $hiddenServiceCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAssigneeCount(): ?int
    {
        return $this->assigneeCount;
    }

    /**
     * @param int|null $assigneeCount
     *
     * @return $this
     */
    public function setAssigneeCount(?int $assigneeCount): self
    {
        $this->assigneeCount = $assigneeCount;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int|null $priority
     *
     * @return $this
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPricingMode(): ?string
    {
        return $this->pricingMode;
    }

    /**
     * @param string|null $pricingMode
     *
     * @return $this
     */
    public function setPricingMode(?string $pricingMode): self
    {
        $this->pricingMode = $pricingMode;

        return $this;
    }
}
