<?php

namespace interfaces;

/**
 * Интерфейс для классов с настройками
 */
interface SettingsInterface
{
    /**
     * Отправляет код подтверждения
     * @return mixed
     */
    public function sendCode();

    /**
     * Проверяет код на валидность
     * @return mixed
     */
    public function verificationCode();
}
