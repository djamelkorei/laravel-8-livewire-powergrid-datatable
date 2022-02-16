<?php
use App\Models\Product;
use function Pest\Livewire\livewire;

test('Database has products', function () {
    $products = Product::all();

    expect($products->count())->toBeGreaterThan(0);
});

test('Product table renders successfully', function () {
    $this->get('/')
        ->assertOK()
        ->assertSeeLivewire('product-table');
});
