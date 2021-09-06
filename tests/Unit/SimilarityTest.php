<?php

namespace Tests\Unit;

use App\Http\Controllers\SimilarityController;

use Tests\TestCase;
class SimilarityTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_count_of_ll()
    {
        $controller = new SimilarityController();
        $data = $controller->getNumberOfLL('hello');

        $this->assertEquals(1, $data);
    }
}
