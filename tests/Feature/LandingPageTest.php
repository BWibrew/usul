<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LandingPageTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_login_page_for_guest()
    {
        $this->withExceptionHandling();

        $this->get('/')->assertRedirect('/login');
    }

    /** @test */
    public function it_shows_sites_index_for_user()
    {
        $this->logIn();

        $this->get('/')->assertRedirect('/sites');
    }
}
