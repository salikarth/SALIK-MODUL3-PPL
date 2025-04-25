<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group edit
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee(text: 'Modul 3')
                    ->clickLink(link: 'Log in')
                    ->assertPathIs(path: '/login')
                    ->type(field: 'email', value: 'salik@gmail.com')
                    ->type(field: 'password', value: 'password')
                    ->press(button: 'LOG IN')
                    ->clickLink(link: 'Notes')
                    ->assertPathIs(path: '/notes')
                    ->clickLink('Create Note')
                    ->type(field: 'Title', value: 'Perubahan Default')
                    ->type(field: 'Description', value: 'Perubahan ini adalah perubahan pertama')
                    ->press(button: 'CREATE');
        });
    }
}
