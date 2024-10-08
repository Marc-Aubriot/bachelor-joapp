<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HCGVTest extends DuskTestCase
{
    public function testCgvPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgv')
                    ->assertSee("Conditions Générales de Vente");
        });
    }
}
