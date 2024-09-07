<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ArticleTest extends DuskTestCase
{
    public function testRendering(): void
    {

        $this->browse(function (Browser $browser) {
            $browser->visit('/article/1')
                    ->assertSee("Contenu généré par chat-gpt");
        });
    }
}
