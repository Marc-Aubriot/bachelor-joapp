<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FooterTest extends DuskTestCase
{
    public function testLinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('CGV')
                    ->assertSee('CGU')
                    ->assertSee('Politique de confidentialité')
                    ->assertSee('Mentions légales')
                    ->assertSee('Copyrights 2024 MarcAu');
        });
    }
}
