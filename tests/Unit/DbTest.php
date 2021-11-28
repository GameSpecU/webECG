<?php

namespace Tests\Unit;

use Tests\TestCase;

//use PHPUnit\Framework\TestCase;

class DbTest extends TestCase
{

    public function test_db_connection()
    {
        $this->assertNotNull(\DB::connection());
    }


}
