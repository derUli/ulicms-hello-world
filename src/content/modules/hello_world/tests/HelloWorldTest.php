<?php
class HelloWorldTest extends \PHPUnit\Framework\TestCase {
	public function testRender() {
		$controller = ModuleHelper::getMainController ( "hello_world" );
		$this->assertEquals ( "Hello World!", $controller->render () );
	}
}