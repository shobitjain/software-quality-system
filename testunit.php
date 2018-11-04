<?php
use PHPUnit\Framework\TestCase;

class testunit extends PHPUnit_Framework_TestCase
{
// First test case : Access to student historical data
    public function control_student()
    {
		$pages = new software_quality_system\module\student()
		$expected = "student";
        $this->assertEquals($expected,$pages->render());
    }
// second test case : Parents Account
    public function control_parent()
    {
        $pages = new software_quality_system\module\parent()
		$expected = "st-125-1";
        $this->assertEquals($expected,$pages->render());
    }
// Third test case : Complete online access with multiple views for Admin
    public function admin()
    {
		$pages = new software_quality_system\module\admin()
		$expected = "admin";
        $this->assertEquals($expected,$pages->render());
    }
}
?>
