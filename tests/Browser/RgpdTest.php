<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RgpdTest extends DuskTestCase
{
    public function testRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rgpd')
                    ->assertSee("Politique de confidentialité");
        });
    }
}
