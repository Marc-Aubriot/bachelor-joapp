<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{

    public function testInputs(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee("Email")
                ->assertSee("Mot de passe")
                ->assertSee("Créer un compte")
                ->assertSee("Réinitialiser mdp")
                ->assertSee("CONNEXION");  
        });
    }
}
