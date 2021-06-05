<?php

if (! function_exists('alert')) {
    /**
     * Return the instance of alert.
     *
     * @return idemonbd\Alert\Alert
     */
    function alert()
    {
        return app('alert');
    }
}