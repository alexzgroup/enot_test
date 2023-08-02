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
     * @param string $type_verification_code
     * @return SettingsEmail|SettingsSms|SettingsTG
     */
    public static function getClassVerification(string $type_verification_code)
    {
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

        return $classVerificationSettings;
    }

    /**
     * Отправляет код подтверждения
     * @return void
     */
    public function send_code()
    {
        $type_verification_code = trim($this->post['type_verification_code']);
        $classVerificationSettings = self::getClassVerification($type_verification_code);
        $classVerificationSettings->sendCode();
    }

    /**
     * Обновляет настройки
     * @return void
     */
    public function update()
    {
        $user_setting_id = (int)$this->post['user_setting_id'];
        $user_setting_value = trim($this->post['user_setting_value']);
        $type_verification_code = trim($this->post['type_verification_code']);
        $settingModel = new Settings();

        $classVerificationSettings = self::getClassVerification($type_verification_code);

        if ($classVerificationSettings->verificationCode()) {
            $settingModel->update($user_setting_id, $user_setting_value);
        }
    }
}
