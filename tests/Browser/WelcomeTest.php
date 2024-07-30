<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class WelcomeTest extends DuskTestCase
{
    public function testImgs(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSourceHas('bercy.jpg')
                    ->assertSourceHas('versailles.jpg')
                    ->assertSourceHas('vaires.jpg')
                    ->assertSourceHas('st-denis.jpg')
                    ->assertSourceHas('grand-palais.jpg')
                    ->assertSourceHas('arrow-left-2.svg')
                    ->assertSourceHas('arrow-right-2.svg')
                    ->assertSourceHas('circle.svg');
        });
    }
}
