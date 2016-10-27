<?php

class WPSEO_Admin_Banner_Spot_Renderer_Test extends WPSEO_UnitTestCase {


	/**
	 * Tests if the banner is rendered correctly.
	 *
	 * @covers WPSEO_Admin_Banner_Spot_Renderer::render
	 */
	public function test_render() {

		$banner_spot = new WPSEO_Admin_Banner_Spot( 'Test spot', 'This is a test spot' );
		$banner_spot->add_banner( new WPSEO_Admin_Banner( 'url', 'image', 'alt', 100, 100 ) );

		$admin_banner_spot_renderer = new WPSEO_Admin_Banner_Spot_Renderer;

		$expected_output = '<div class="sidebar-spot"><strong>Test spot</strong><p>This is a test spot</p>';
		$actual_output   = $admin_banner_spot_renderer->render( $banner_spot, new WPSEO_Admin_Banner_Renderer() );

		$this->assertStringStartsWith( $expected_output, $actual_output );
	}


}