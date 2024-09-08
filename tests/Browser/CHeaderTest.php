<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class CHeaderTest extends DuskTestCase
{

    public function testNavlinks(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')->pause(1000)->assertSee('Accueil')->assertSee('Billets');
        });
    }

    public function testLogoRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->pause(1000)->assertSourceHas('logo-2.svg');
        });
    }

    public function testLoginButtonAndConnection(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/login"]')
                    ->pause(2000)
                    ->assertPathIs('/login')
                    ->type('email', 'marc.aubriot@outlook.fr')
                    ->type('password', "Demopass1!")
                    ->check('remember')
                    ->press('login')
                    ->pause(4000)
                    ->assertPathIs('/');
        });
    }

    public function testCartRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')->pause(1000)->assertSourceHas('shopping-basket.svg');
        });
    }

    public function testProfileIconRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')->pause(1000)->assertSourceHas('account-circle.svg');
        });
    }

    public function testCartbutton(): void
    {
        $user = User::where('email', 'marc.aubriot@outlook.fr')->first();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->click('a[href="/cart/'.$user->id.'"]')
                    ->pause(4000)
                    ->assertPathIs('/cart/'.$user->id.'');
        });
    }

    public function testProfileDashboardButton(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/dashboard"]')
                    ->pause(4000)
                    ->assertPathIs('/dashboard');;
        });
    }
}
