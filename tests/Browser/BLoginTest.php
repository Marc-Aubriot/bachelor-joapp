<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class BLoginTest extends DuskTestCase
{

    public function testFormRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->pause(1000)
                ->assertSee("Email")
                ->assertSee("Mot de passe")
                ->assertSee("Créer un compte")
                ->assertSee("Réinitialiser mdp")
                ->assertSee("CONNEXION");  
        });
    }

    public function testLoginFalse(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password', 'password')
                    ->press('login')
                    ->pause(2000)
                    ->assertSee("These credentials do not match our records.");
        });
    }

    public function testLoginTrue(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password', 'Demopass1!')
                    ->press('login')
                    ->pause(4000)
                    ->visit('/')
                    ->assertSee("Actualités de Paris 2024");
        });
    }
}
