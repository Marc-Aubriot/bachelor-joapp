<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class FArticleTest extends DuskTestCase
{
    public function testArticlePageRendering(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/article/1')
                    ->assertSee("Consultez la cartographie des JO!")
                    ->assertSee("Contenu généré par chat-gpt")
                    ->assertSourceHas('jo-map.png');
        });
    }
}
