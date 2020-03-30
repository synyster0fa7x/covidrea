<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginPageTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Connexion')
                ->assertPresent('button[type="submit"]')
                ->assertPresent('#email')
                ->assertPresent('#password')
                ->assertSeeLink('Vous avez oublié votre mot de passe ?')
            ;
        });
    }
}
