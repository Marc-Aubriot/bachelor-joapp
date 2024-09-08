<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ILegalsTest extends DuskTestCase
{
    public function testLegalsPageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/legals')
                    ->assertSee("Mentions légales");
        });
    }
}
