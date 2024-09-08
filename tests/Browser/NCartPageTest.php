<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class NCartPageTest extends DuskTestCase
{
    public function testEmptyCartPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/cart/test')
                    ->pause(4000)
                    ->assertPathIs('/cart/test')
                    ->assertSee('Votre panier est vide')
                    ->assertSee('Aucune facture');
        });
    }

    public function testLoginFromCartPage(): void
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

    public function testCartRenderWithItems(): void
    {
        $user = User::where('email', 'marc.aubriot@outlook.fr')->first();

        $this->browse(function (Browser $browser) use ($user) {
            $browser->click('a[href="/cart/'.$user->id.'"]')
                    ->pause(3000)
                    ->assertPathIs('/cart/'.$user->id.'')
                    ->assertSee('Mon panier (3 billet)')
                    ->assertSee('Offre Duo')
                    ->assertSee('Offre Solo')
                    ->assertSee('Offre Familiale')
                    ->assertSee('Ma facture')
                    ->assertSee('Payer ma commande');
        });
    }

    public function testIncrementTicketDuo(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->pause(1000)
                    ->press('incrementTicket-0')
                    ->pause(2000)
                    ->assertSee('Quantité modifiée.')
                    ->press('incrementTicket-0')
                    ->pause(2000)
                    ->assertSee('Quantité modifiée.');
        });
    }

    public function testDecrementTicketDuo(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->pause(2000)
                    ->press('decrementTicket-0')
                    ->pause(2000)
                    ->assertSee('Quantité modifiée.');;
        });
    }

    public function testDeleteTicketFamily(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->pause(1000)
                    ->press('deleteTicket-2')
                    ->pause(1000)
                    ->assertSee('Billet supprimé.')
                    ->assertDontSee('Offre Familiale');
        });
    }

}
