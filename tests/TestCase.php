<?php

namespace Tests;
use Illuminate\Foundation\Testing\RefreshDatabase;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    //
    use RefreshDatabase; // This will refresh the database for each test
}
