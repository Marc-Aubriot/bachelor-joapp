<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LContactTest extends DuskTestCase
{
    public function testContactPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertSee("Formulaire de contact");
        });
    }
}
