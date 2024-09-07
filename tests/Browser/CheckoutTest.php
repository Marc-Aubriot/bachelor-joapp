<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CheckoutTest extends DuskTestCase
{
    public function testCancel(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/checkout/cancel')
                    ->assertSee("Paiement annulé");
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
