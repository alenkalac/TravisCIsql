<?php
	
	use alen\Database;

	class UserTest extends PHPUnit_Framework_TestCase {
		public function testUserAdminEqualsAdmin() {
			$db = new Database();
			
			$result = $db->checkPassword("admin", "admin");
			
			$this->assertEquals("Correct", $result);
		}
	}
?>