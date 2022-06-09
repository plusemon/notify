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

if (! function_exists('notifySuccess')) {
    /**
     * Return the success flesh message to the session.
     *
     * @return Plusemon\Notify\Notify
     */
    function notifySuccess(...$args)
    {
        return app('notify')->success(...$args);
    }
}

if (! function_exists('notifyInfo')) {
    /**
     * Return the info flesh message to the session.
     *
     * @return Plusemon\Notify\Notify
     */
    function notifyInfo(...$args)
    {
        return app('notify')->info(...$args);
    }
}

if (! function_exists('notifyWarning')) {
    /**
     * Return the warning flesh message to the session.
     *
     * @return Plusemon\Notify\Notify
     */
    function notifyWarning(...$args)
    {
        return app('notify')->warning(...$args);
    }
}

if (! function_exists('notifyError')) {
    /**
     * Return the error flesh message to the session.
     *
     * @return Plusemon\Notify\Notify
     */
    function notifyError(...$args)
    {
        return app('notify')->error(...$args);
    }
}