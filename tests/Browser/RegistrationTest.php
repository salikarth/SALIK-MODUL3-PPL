<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrationTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group registration
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(url: '/')
                    ->assertSee(text: 'Modul 3')
                    ->clickLink(link: 'Register')
                    ->assertPathIs(path: '/register')
                    ->type(field: 'name', value: 'salik')
                    ->type(field: 'email', value: 'salik@gmail.com')
                    ->type(field: 'password', value: 'password')
                    ->type(field: 'password_confirmation', value: 'password')
                    ->press(button: 'REGISTER')
                    ->assertPathIs(path: '/dashboard');
        });
    }
}
