<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HomePageButtonsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/');

            $searchBedLink = $browser->attribute('#rechercher-lit', 'href');
            $updateBedsLink = $browser->attribute('#mettre-a-jour-lits', 'href');
            
            $this->assertEquals($searchBedLink, route('home'));
            $this->assertEquals($updateBedsLink, route('login'));

            $browser
                ->click('#rechercher-lit')
                ->assertRouteIs('login')
            ;

            $browser->visit('/')
                ->click('#mettre-a-jour-lits')
                ->assertRouteIs('login')
            ;



        });
    }
}
