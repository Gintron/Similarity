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

    public function test_if_bacon_api_works(){
        $controller = new SimilarityController();
        $data = $controller->getDataFromBaconApi();
        $this->
            assertIsArray($data);
    }
    public function test_array_to_string(){
        $controller = new SimilarityController();
        $data = $controller->getDataFromBaconApi();
        $data = $controller->convertArrayToString($data);

        $this->
            assertIsString($data);
    }
}
