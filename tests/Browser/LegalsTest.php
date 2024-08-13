<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LegalsTest extends DuskTestCase
{
    public function rendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/legals')
                    ->assertSee("Mentions légales");
        });
    }
}
