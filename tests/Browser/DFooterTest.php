<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DFooterTest extends DuskTestCase
{
    public function testFooterNavlinksRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                    ->assertSee('CGV')
                    ->assertSee('CGU')
                    ->assertSee('Politique de confidentialité')
                    ->assertSee('Mentions légales')
                    ->assertSee('Copyrights 2024 MarcAu');
        });
    }

    public function testCgvLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/cgv"]')
                    ->pause(2000)
                    ->assertPathIs('/cgv');
        });
    }
    
    public function testRgpdLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/rgpd"]')
                    ->pause(2000)
                    ->assertPathIs('/rgpd');
        });
    }

    public function testLegalsLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/legals"]')
                    ->pause(2000)
                    ->assertPathIs('/legals');
        });
    }

    public function testContactLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->click('a[href="/contact"]')
                    ->pause(2000)
                    ->assertPathIs('/contact');
        });
    }

    public function testSocialsMediaIconRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                    ->assertSourceHas('facebook-logo.svg')
                    ->assertSourceHas('youtube-logo.svg')
                    ->assertSourceHas('x-logo.svg')
                    ->assertSourceHas('instagram-logo.svg');
        });
    }
}
