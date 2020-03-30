<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageInterestTest extends DuskTestCase
{
    /**
     * Add interest with a unknow user
     *
     * @return void
     */
    public function testValidAddress()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', 'test@covid-moi-un-lit.com')
                ->select("region[]", 'bfc')
                ->pause(2000)
                ->press("S'inscrire")
                ->pause(1000)
                ->assertSee('Merci de votre intérêt, nous ne manquerons pas de vous tenir informés');
        });
    }
    
    /**
     * Add interest with a allready know user
     *
     * @return void
     */
    public function testKnownAddress()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->type('email', 'legerrom@gmail.com')
                ->select("region[]", 'bfc')
                ->pause(2000)
                ->press("S'inscrire")
                ->pause(1000)
                ->assertSee('Merci de votre intérêt, nous ne manquerons pas de vous tenir informés');
        });
    }
}
