<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MTicketsTest extends DuskTestCase
{
    public function testTicketPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/billets')
                ->pause(1000)
                ->assertSee("Nos offres d'entrées")
                ->assertSee("Voir toutes nos offres")
                ->assertSee("Offre Duo")
                ->assertSee("Offre Solo")
                ->assertSee("Offre Familiale")
                ->assertSee("Billet pour 2 entrées")
                ->assertSee("400€")
                ->assertSee("Réserver ce billet")
                ->assertSourceHas('stade-de-france.jpg');
                   
        });
    }

    public function testAddTicketToCartWhenNotAuthentified(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/billets')
                    ->pause(1000)
                    ->press('ticket-button-0')
                    ->pause(1000)
                    ->assertSee("Vous devez vous connecter pour ajouter un billet au panier.");
                   
        });
    }

    public function testLoginFromTicketsPage(): void
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

    public function testAddTicketDuoToCart(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/billets')
                    ->pause(1000)
                    ->press('ticket-button-0')
                    ->pause(1000)
                    ->assertSee("Billet ajouté à votre panier.");
                   
        });
    }

    public function testAddTicketSoloToCart(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->pause(1000)
                    ->press('ticket-button-1')
                    ->pause(1000)
                    ->assertSee("Billet ajouté à votre panier.");
                   
        });
    }

    public function testAddTicketFamillyToCart(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->pause(1000)
                    ->press('ticket-button-2')
                    ->pause(1000)
                    ->assertSee("Billet ajouté à votre panier.");
                   
        });
    }
}
