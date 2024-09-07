<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class DashboardTest extends DuskTestCase
{
    public function testLoginFalse(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/dashboard')
                    ->type('email', 'marc.aubriot@outlook.fr')
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
                    ->type('password', 'password')
                    ->press('login')
                    ->pause(4000)
                    ->visit('/')
                    ->assertSee("Actualités de Paris 2024");
        });
    }
}
