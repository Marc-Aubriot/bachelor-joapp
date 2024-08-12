<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CguTest extends DuskTestCase
{
    public function rendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgu')
                    ->assertSee("Conditions Générales d'Utilisation");
        });
    }
}
