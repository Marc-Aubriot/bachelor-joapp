<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TicketsTest extends DuskTestCase
{
    public function testImgs(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/billets')
                ->assertSee("Nos offres d'entrées")
                ->assertSee("Voir toutes nos offres")
                ->assertSee("Réserver ce billet");
                   
        });
    }
}
