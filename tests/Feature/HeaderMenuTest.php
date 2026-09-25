<?php

namespace Tests\Feature;

use Tests\TestCase;

class HeaderMenuTest extends TestCase
{
    /**
     * Test that the splash page renders the header menu trigger.
     */
    public function test_header_renders_navigation_menu_trigger(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('id="header-nav-trigger"', false);
        $response->assertSee('Menu');
        $response->assertSee('id="header-nav-dropdown"', false);
    }

    /**
     * Test that all four required dropdown options are present in the menu.
     */
    public function test_header_menu_contains_all_four_required_options(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('About Us');
        $response->assertSee('Contact Information');
        $response->assertSee('Meet the Team');
        $response->assertSee('Pricing');
    }

    /**
     * Test that each option includes a synopsis for hover popups.
     */
    public function test_header_menu_options_include_synopsis_popups(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('Our story, mission, and how Domus brings clarity');
        $response->assertSee('Direct communication channels, customer support, and dedicated resolution assistance');
        $response->assertSee('Meet the passionate creators, engineers, and designers');
        $response->assertSee('Transparent plans tailored for individuals, shared flats, and busy families');
    }

    /**
     * Test that the menu contains responsive classes and minimum width constraints.
     */
    public function test_header_menu_has_responsive_and_minimum_width_styling(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('min-w-[240px]', false);
        $response->assertSee('max-w-[calc(100vw-2rem)]', false);
        $response->assertSee('w-64', false);
    }
}
