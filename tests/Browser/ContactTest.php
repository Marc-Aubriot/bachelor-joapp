<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactTest extends DuskTestCase
{
    public function testRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                    ->assertSee("Formulaire de contact");
        });
    }
}
