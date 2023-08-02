<?php

namespace controller;

/**
 * Базовый класс контроллера
 * Class BaseController
 */
abstract class BaseController
{
    abstract public function index();

    /**
     * Дефолтный экшен
     */
    public const DEFAULT_ACTION = 'index';

    protected $action;

    protected $get;

    protected $post;

    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->get = $_GET;
        $this->post = $_POST;
        $this->action = ($_GET['action'] ?? '') ?: self::DEFAULT_ACTION;
    }

    /**
     * Запускаем экшен
     * @return void
     * @throws \Exception
     */
    public function run()
    {
        session_start();
        $action = $this->action;

        if (method_exists(get_class($this), $action)) {
            $this->{$action}();
        } else {
            throw new \Exception("Method $action controller not exist");
        }
    }
}
