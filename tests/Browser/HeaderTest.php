<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HeaderTest extends DuskTestCase
{

    public function testLinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Accueil')
                    ->assertSee('Billets');
        });
    }
}
