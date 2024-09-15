<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ARegisterTest extends DuskTestCase
{
    public function testFormRendering(): void
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

    public function testPasswordComplexityLowercase(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->type('firstname', 'test')
                    ->type('lastname', 'test')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password1', 'demopass1!')
                    ->type('password2', 'demopass1!')
                    ->check('terms')
                    ->press('register')
                    ->pause(2000)
                    ->assertSee("The password field must contain at least one uppercase and one lowercase letter.");
        });
    }

    public function testPasswordComplexityOneUppercase(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->type('firstname', 'test')
                    ->type('lastname', 'test')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password1', 'Demopass#')
                    ->type('password2', 'Demopass#')
                    ->check('terms')
                    ->press('register')
                    ->pause(2000)
                    ->assertSee("The password field must contain at least one number.");
        });
    }

    public function testPasswordComplexityOneNumber(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->type('firstname', 'test')
                    ->type('lastname', 'test')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password1', 'Demopass1')
                    ->type('password2', 'Demopass1')
                    ->check('terms')
                    ->press('register')
                    ->pause(2000)
                    ->assertSee("The password field must contain at least one symbol.");
        });
    }

    public function testPasswordComplexitySuccessAndRegister(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->type('firstname', 'marc')
                    ->type('lastname', 'aubriot')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password1', 'Demopass1!')
                    ->type('password2', 'Demopass1!')
                    ->check('terms')
                    ->press('register')
                    ->pause(2000)
                    ->assertPathIs('/');
        });
    }
}
