<?php

namespace Tests\Feature;

use ApiSpec\ApiSpecTestCase;
use Tests\CreatesApplication;

class HttpTest extends ApiSpecTestCase
{
    use CreatesApplication;
    protected $isExportSpec = true;

    public function testGet()
    {
        $this->getJson('/api/test');
    }

    public function testPost()
    {
        $this->postJson('/api/test', [
            'hoge' => 'huga'
        ]);
    }
}