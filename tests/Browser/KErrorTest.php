<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class KErrorTest extends DuskTestCase
{
    public function testErrorPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/testlol')
                    ->assertSee("Retour à l'accueil");
        });
    }
}
