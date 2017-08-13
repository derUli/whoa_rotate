<?php
class WhoaRotate extends Controller {
	private $moduleName = "whoa_rotate";
	public function render() {
		return Template::executeModuleTemplate ( $this->moduleName, "whoa.php" );
	}
}