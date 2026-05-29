<?php

namespace Tests\Feature;

use Tests\TestCase;

class FailingTest extends TestCase
{
    public function test_pipeline_falla_para_validar_branch_protection(): void
    {
        $this->assertTrue(false);
    }
}