<?php
class HelloWorldTest extends \PHPUnit\Framework\TestCase {
	public function testRender() {
		$controller = ModuleHelper::getMainController ( "pi" );
		$this->assertEquals ( "Hello World!", $controller->render () );
	}
}