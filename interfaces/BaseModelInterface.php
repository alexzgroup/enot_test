<?php

namespace interfaces;

/**
 * Базовый интерфейс модели ДБ
 */
interface BaseModelInterface
{
    /**
     * Добавляет запись
     * @return mixed
     */
    public function insert();

    /**
     * Удаляет запись
     * @return mixed
     */
    public function delete();

    /**
     * Обновляет запись
     * @param int $id
     * @param $value
     * @return mixed
     */
    public function update(int $id, $value);

    /**
     * Получает запись по ключу
     * @param int $id
     * @return mixed
     */
    public function getItem(int $id);
}
