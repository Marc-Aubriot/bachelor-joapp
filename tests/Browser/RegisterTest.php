<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    public function testInputs(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee("Prénom")
                ->assertSee("Nom")
                ->assertSee("Adresse Email")
                ->assertSee("Mot de passe")
                ->assertSee("S'ENREGISTRER");     
        });
    }
}
