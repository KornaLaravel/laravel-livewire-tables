<?php

namespace Rappasoft\LaravelLivewireTables\Traits\Helpers;

trait CustomisationsHelpers
{
    /**
     * Used to determine if a Layout Extends has been defined - used when using as a Full Page Component
     */
    public function hasExtends(): bool
    {
        return $this->extends !== null;
    }

    public function getExtends()
    {
        return $this->extends;
    }

    /**
     * Used to determine if a Layout Section has been defined - used when using as a Full Page Component
     */
    public function hasSection(): bool
    {
        return $this->section !== null;
    }

    public function getSection()
    {
        return $this->section;
    }

    /**
     * Used to determine if a Layout Slot has been defined - used when using as a Full Page Component
     */
    public function hasSlot(): bool
    {
        return $this->slot !== null;
    }

    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Used to determine if a $layout has been defined - used when using as a Full Page Component
     */
    public function hasLayout(): bool
    {
        return $this->layout !== null;
    }

    public function getLayout()
    {
        return $this->layout;
    }
}
