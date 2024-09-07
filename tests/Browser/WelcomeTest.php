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
                    ->assertSee('Actualités de Paris 2024')
                    ->assertSourceHas('arrow-left-2.svg')
                    ->assertSourceHas('arrow-right-2.svg')
                    ->assertSourceHas('little-arrow-left.svg')
                    ->assertSourceHas('little-arrow-right.svg');
        });
    }
}
