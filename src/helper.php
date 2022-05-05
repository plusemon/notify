<?php

if (! function_exists('notify')) {
    /**
     * Return the instance of notify.
     *
     * @return Plusemon\Notify\Notify
     */
    function notify()
    {
        return app('notify');
    }
}