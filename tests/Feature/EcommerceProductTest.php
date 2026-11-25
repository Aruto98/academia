<?php

namespace Tests\Feature;

use Tests\TestCase;

class EcommerceProductTest extends TestCase
{
    /**
     * Test that the ecommerce product list page returns a 200 status and renders expected view.
     */
    public function test_product_list_page_returns_successful_response(): void
    {
        $response = $this->get(route('ecommerce.products.index'));

        $response->assertStatus(200);
        $response->assertViewIs('ecommerce.product-list');
        $response->assertSee('datatables-products');
    }

    /**
     * Test that the json asset for ecommerce products exists and is valid.
     */
    public function test_product_list_json_asset_exists(): void
    {
        $filePath = public_path('sneat/json/ecommerce-product-list.json');

        $this->assertFileExists($filePath);

        $jsonContent = json_decode(file_get_contents($filePath), true);

        $this->assertIsArray($jsonContent);
        $this->assertArrayHasKey('data', $jsonContent);
        $this->assertNotEmpty($jsonContent['data']);
        $this->assertArrayHasKey('product_name', $jsonContent['data'][0]);
    }
}
