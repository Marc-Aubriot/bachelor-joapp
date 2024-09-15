<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class JRgpdTest extends DuskTestCase
{
    public function testRgpdPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/rgpd')
                    ->assertSee("Politique de confidentialité");
        });
    }
}
