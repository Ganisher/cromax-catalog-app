<?php

namespace App\Listeners;

use App\Events\CategorySaving;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class GenerateCategorySlug
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
     * @param CategorySaving $event
     * @return void
     */
    public function handle(CategorySaving $event)
    {
        $category = $event->category;

        $category->slug = join('-', [$category->getAttribute('title'), $category->getAttribute('sku')]);
    }
}
