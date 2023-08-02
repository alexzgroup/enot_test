<?php

namespace controller;

use model\settings\Settings;
use model\settings\SettingsEmail;
use model\settings\SettingsSms;
use model\settings\SettingsTG;

/**
 * Контролер настроек
 * Class SettingsController
 */
class SettingsController extends BaseController
{
    /**
     * Стартовая точка
     * @return void
     */
    public function index()
    {
        echo "ok";
    }

    /**
     * Обновляет настройки
     * @return void
     */
    public function update()
    {
        $type_verification_code = trim($this->post['type_verification_code']);

        switch ($type_verification_code) {
            case Settings::VERIFICATION_TYPE_TG:
                $classVerificationSettings = new SettingsTG();
                break;
            case Settings::VERIFICATION_TYPE_EMAIL:
                $classVerificationSettings = new SettingsEmail();
                break;
            case Settings::VERIFICATION_TYPE_SMS:
                $classVerificationSettings = new SettingsSms();
                break;
            default:
                $classVerificationSettings = new SettingsEmail();
        }

        $classVerificationSettings->sendCode();
    }
}
