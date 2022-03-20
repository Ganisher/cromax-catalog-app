<?php

namespace App\Listeners;

use App\Events\ProductSaving;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateProductSlug
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ProductSaving $event
     * @return void
     */
    public function handle(ProductSaving $event)
    {
        $product = $event->product;

        $product->slug = join('-', [$product->getAttribute('title'), $product->getAttribute('sku')]);
    }
}
