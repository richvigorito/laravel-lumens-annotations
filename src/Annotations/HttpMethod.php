<?php

namespace ProAI\Annotations\Annotations;

abstract class HttpMethod
{
    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $as;

    /**
     * @var mixed
     */
    public $middleware;
}
