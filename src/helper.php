<?php

if (! function_exists('notify')) {
    /**
     * Return the instance of notify.
     *
     * @return Idemonbd\Notify\Notify
     */
    function notify()
    {
        return app('notify');
    }
}