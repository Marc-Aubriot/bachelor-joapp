<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EWelcomeTest extends DuskTestCase
{
    public function testHeroBannerLoading(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                    ->assertSee('Actualités de Paris 2024')
                    ->assertSourceHas('arrow-left-2.svg')
                    ->assertSourceHas('arrow-right-2.svg')
                    ->assertSourceHas('little-arrow-left.svg')
                    ->assertSourceHas('little-arrow-right.svg');
        });
    }

    public function testHeroGalleryWorking(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                    ->assertVisible('#galleryPhoto-2')
                    ->press('galleryNavRightButton')
                    ->pause(300)
                    ->assertVisible('#galleryPhoto-3')
                    ->press('galleryNavRightButton')
                    ->pause(300)
                    ->assertVisible('#galleryPhoto-4');

        });
    }

    public function testArticleNavigationWorking(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->pause(1000)
                    ->press('articleLeftArrowNav')
                    ->pause(300)
                    ->assertSourceHas('basket.jpg')
                    ->press('articleRightArrowNav')
                    ->pause(300)
                    ->assertSourceHas('jo-map.png');
        });
    }

    public function testArticleLink(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->press('articleLeftArrowNav')
                    ->pause(300)
                    ->click('a[href="/article/1"]')
                    ->pause(2000)
                    ->assertPathIs('/article/1');
        });
    }
}
