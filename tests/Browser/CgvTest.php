<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CGVTest extends DuskTestCase
{
    public function testRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgv')
                    ->assertSee("Conditions Générales de Vente");
        });
    }
}
