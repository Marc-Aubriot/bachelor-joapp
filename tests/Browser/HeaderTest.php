<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HeaderTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testLinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Relais de la flamme')
                    ->assertSee('Calendrier')
                    ->assertSee('Accueil')
                    ->assertSee('Billets')
                    ->assertSee('Boutique')
                    ->assertSee('Hospitalité')
                    ->assertSee('Langues');
        });
    }
}
