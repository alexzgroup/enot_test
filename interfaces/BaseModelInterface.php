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
     * @return mixed
     */
    public function update();

    /**
     * Получает запись по ключу
     * @return mixed
     */
    public function getItem();
}
