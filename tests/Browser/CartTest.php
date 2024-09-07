<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CartTest extends DuskTestCase
{
    public function testRendering(): void
    {
        
        $this->browse(function (Browser $browser) {
            $browser->visit('/cart/9cf49a6b-5081-47cb-9932-7bd585006f10')
                    ->assertSee("Aucune facture");
        });
    }
}
