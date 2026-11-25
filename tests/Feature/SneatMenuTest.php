<?php

namespace Tests\Feature;

use Tests\TestCase;

class SneatMenuTest extends TestCase
{
    /**
     * Test various Sneat PRO pages rendered via .html extension.
     */
    public function test_sneat_pages_render_successfully_with_html_extension(): void
    {
        $pages = [
            'dashboards-crm.html',
            'app-chat.html',
            'app-kanban.html',
            'pages-faq.html',
            'tables-datatables-basic.html',
            'charts-apex.html',
            'app-ecommerce-product-add.html',
            'app-academy-dashboard.html',
        ];

        foreach ($pages as $page) {
            $response = $this->get('/'.$page);
            $response->assertStatus(200);
        }
    }

    /**
     * Test subpath relative navigation like ecommerce/app-ecommerce-product-add.html.
     */
    public function test_subpath_html_navigation_resolves_successfully(): void
    {
        $response = $this->get('/ecommerce/app-ecommerce-product-add.html');
        $response->assertStatus(200);
    }

    /**
     * Test various Sneat PRO pages rendered with clean slug without .html extension.
     */
    public function test_sneat_pages_render_successfully_with_clean_slug(): void
    {
        $pages = [
            'dashboards-crm',
            'app-chat',
            'app-kanban',
            'pages-faq',
            'app-academy-dashboard',
        ];

        foreach ($pages as $page) {
            $response = $this->get('/'.$page);
            $response->assertStatus(200);
        }
    }

    /**
     * Test that sidebar does not hardcode active or open on Dashboards parent menu item.
     */
    public function test_sidebar_dashboards_does_not_hardcode_active_class(): void
    {
        $response = $this->get('/app-academy-dashboard.html');
        $response->assertStatus(200);

        // Ensure Dashboards menu item starts without hardcoded 'active' or 'open'
        $response->assertDontSee('<li class="menu-item active open">', false);
        $response->assertDontSee('<li class="menu-item open">', false);
    }

    /**
     * Test authentication and misc pages render with content and blank layout.
     */
    public function test_authentication_pages_render_content_successfully(): void
    {
        $authPages = [
            'auth-login-basic.html',
            'auth-register-multisteps.html',
            'auth-forgot-password-basic.html',
            'pages-misc-error.html',
        ];

        foreach ($authPages as $page) {
            $response = $this->get('/'.$page);
            $response->assertStatus(200);
            $response->assertSee('customizer-hide', false);
        }

        $regResponse = $this->get('/auth-register-multisteps.html');
        $regResponse->assertSee('authentication-wrapper', false);
        $regResponse->assertSee('bs-stepper', false);
    }

    /**
     * Test non-existent page returns 404.
     */
    public function test_non_existent_page_returns_404(): void
    {
        $response = $this->get('/definitely-not-a-valid-page-12345');
        $response->assertStatus(404);
    }
}
