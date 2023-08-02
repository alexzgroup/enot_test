<?php

namespace model\settings;

use interfaces\SettingsInterface;

class SettingsSms implements SettingsInterface
{

    /**
     * @inheritDoc
     */
    public function sendCode()
    {
        // TODO: Implement sendCode() method.
    }

    /**
     * @inheritDoc
     */
    public function verificationCode(): bool
    {
        return true;
    }
}