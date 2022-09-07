<?php

namespace z00f\FilamentReport\Actions\Concerns;

trait CanDisableFileName
{
    protected bool $isFileNameDisabled;

    public function disableFileName(bool $condition = true): static
    {
        $this->isFileNameDisabled = $condition;

        return $this;
    }

    public function isFileNameDisabled(): bool
    {
        return $this->isFileNameDisabled;
    }
}
