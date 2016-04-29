<?php
	use alen\Database;

	class UserTest extends PHPUnit_Framework_TestCase {
		
		public function testDBSuccess() {
			$database = new Database();
			
			$checkAdmin = $database->checkPassword("admin", "admin1");
			
			$this->assertEquals("Correct", $checkAdmin);
		}
		
	}
?>