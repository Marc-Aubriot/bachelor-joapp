<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ErrorTest extends DuskTestCase
{
    public function testLinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/testlol')
                    ->assertSee("Retour à l'accueil");
        });
    }
}
