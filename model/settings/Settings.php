<?php

namespace model\settings;

use interfaces\BaseModelInterface;

/**
 * Модель для работы с настройками в БД
 * Class Settings
 */
class Settings implements BaseModelInterface
{
    /**
     * Таблица для запросов
     */
    public const TABLE_NAME = 's_settings';

    /**
     * Тип верификации для Телеграм
     */
    public const VERIFICATION_TYPE_TG = 'TG';

    /**
     * Тип верификации для Email
     */
    public const VERIFICATION_TYPE_EMAIL = 'EMAIL';

    /**
     * Тип верификации для SmS
     */
    public const VERIFICATION_TYPE_SMS = 'SMS';

    /**
     * @inheritDoc
     */
    public function insert()
    {
        // TODO: Implement insert() method.
    }

    /**
     * @inheritDoc
     */
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    /**
     * @inheritDoc
     */
    public function update(int $id, $value): void
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function getItem(int $id)
    {
        return [
            'id' => $id,
            'value' => '',
        ];
    }
}
