<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CGUTest extends DuskTestCase
{
    public function testRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgu')
                    ->assertSee("Conditions Générales d'Utilisation");
        });
    }
}
