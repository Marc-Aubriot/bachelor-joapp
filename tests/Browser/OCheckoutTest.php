<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;
use App\Models\Cart;

class OCheckoutTest extends DuskTestCase
{   
    public function testLoginForCheckout(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
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

    public function testCheckoutLinkRendering(): void
    {
        $user = User::where('email', 'marc.aubriot@outlook.fr')->first();

        $this->browse(function (Browser $browser) use($user) {
            $browser->click('a[href="/cart/'.$user->id.'"]')
                    ->pause(3000)
                    ->assertPathIs('/cart/'.$user->id.'')
                    ->assertSee('Payer ma commande');
        });
    }

    public function testCheckoutLinkWorking(): void
    {
        $user = User::where('email', 'marc.aubriot@outlook.fr')->first();
        $cart = Cart::whereUserId($user->id)->where('is_active', true)->first();
        
        $this->browse(function (Browser $browser) use($user, $cart) {
            $browser->click('a[href="/cart/'.$user->id.'/checkout/'.$cart->id.'"]')
                    ->pause(2000)
                    ->assertPathIs('/cart/'.$user->id.'/checkout/'.$cart->id);
        });
    }

    public function testSuccess(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/checkout/success')
                    ->assertSee("Paiement réussi");
        });
    }
}
