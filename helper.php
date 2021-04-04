<?php
namespace Modules\MyFileManager;

use Hubzero\Module\Module;
use Lang;

class Helper extends Module
{
	/**
	 * Display module contents
	 *
	 * @return  void
	 */
	public function display()
	{
		$hello = Lang::txt('MOD_MYFILEMANAGER');

		require $this->getLayoutPath();
	}
}