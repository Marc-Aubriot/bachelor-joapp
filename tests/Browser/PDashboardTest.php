<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class PDashboardTest extends DuskTestCase
{
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
