<?php

namespace Inserve\ALSOCloudMarketplaceAPI\Model;

/**
 *
 */
final class Field
{
    protected ?string $name = null;
    protected ?string $displayName = null;
    protected mixed $value = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    /**
     * @return mixed
     */
    public function getValue(): mixed
    {
        return $this->value;
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
     * @param string|null $displayName
     *
     * @return $this
     */
    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * @param mixed $value
     *
     * @return $this
     */
    public function setValue(mixed $value): self
    {
        $this->value = $value;

        return $this;
    }
}
