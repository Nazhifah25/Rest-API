<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use function PHPUnit\Framework\assertJson;

class produkTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        var_dump('test1');
        $response = $this->get('/api/produk');

        $response->assertStatus(200);
    }
    public function test_get(): void
    {
        $response = $this->get('/api/produk');

        $response->assertStatus(200);
    }
    public function test_delete_namausaha_NotFound(): void
    {
        $response = $this->delete('/api/produk', [
            'nama_usaha' => 'nadif',
            'message' 
        ]);

        $response->assertStatus(404);
    }
    public function test_Add_produk_Validationerror(): void
    {
        $response = $this->delete('/api/produk',[
            'nama_usaha' => 'naina scraf'
        ]);
        $response->assertSta(200);
    }
}
