<?php

namespace Vanguard\Core\Concerns;

/**
 * Set an active property on a class
 */
trait IsActive
{
    /** Defaults to being false */
    protected bool $active = false;

    /**
     * Set the active property, chainable.
     * 
     * @param bool $active
     * @return static
     */
    public function active(bool $active): static
    {
        $this->setActive($active);
        return $this;
    }

    /**
     * Set the active property quietly.
     * 
     * @param bool $active
     */
    protected function setActive(bool|null $active): void
    {
        if (is_null($active)) return;
        $this->active = $active;
    }

    /**
     * Check if the class is active (alias)
     * 
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->getActive();
    }

    /**
     * Check if the class is active
     * 
     * @return bool
     */
    public function getActive(): bool
    {
        return $this->evaluate($this->active);
    }
}