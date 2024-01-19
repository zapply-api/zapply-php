<?php

namespace Zapply\Resources;

use Zapply\Zapply;

class Resource
{
    /**
     * The Zapply SDK instance.
     *
     * @var Zapply
     */
    public $client;

    /**
     * Create a new resource instance.
     *
     * @param Zapply $client
     * @return void
     */
    public function __construct(Zapply $client)
    {
        $this->client = $client;
    }
}
