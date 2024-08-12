<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CgvTest extends DuskTestCase
{
    public function rendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cgv')
                    ->assertSee("Conditions Générales de Vente");
        });
    }
}
