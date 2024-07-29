<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Inertia\Inertia;

class WelcomeTest extends DuskTestCase
{
    public function testImgs(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSourceHas('bercy.jpg');
        });
    }
}
