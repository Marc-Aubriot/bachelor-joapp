<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class GCGUTest extends DuskTestCase
{
    public function testCguPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgu')
                    ->assertSee("Conditions Générales d'Utilisation");
        });
    }
}
