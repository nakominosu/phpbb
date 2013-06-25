<?php
/**
*
* @package testing
* @copyright (c) 2011 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

require_once dirname(__FILE__) . '/template_test_case_with_tree.php';

class phpbb_template_template_includejs_test extends phpbb_template_template_test_case_with_tree
{
	public function test_includejs_compilation()
	{
		// Reset the engine state
		$this->setup_engine(array('assets_version' => 1));

		// Prepare correct result
		$scripts = array(
			'<script type="text/javascript" src="parent_and_child.js?assets_version=1"></script>',
			'<script type="text/javascript" src="parent_only.js?assets_version=1"></script>',
			'<script type="text/javascript" src="child_only.js?assets_version=1"></script>',
			'<script type="text/javascript" src="subdir/parent_only.js?assets_version=1"></script>',
			'<script type="text/javascript" src="subdir/subsubdir/parent_only.js?assets_version=1"></script>',
			'<script type="text/javascript" src="subdir/parent_only.js?assets_version=1"></script>',
		);

		// Run test
		$this->run_template('includejs.html', array('PARENT' => 'parent_only.js', 'SUBDIR' => 'subdir', 'EXT' => 'js'), array(), array(), implode('', $scripts));
	}
}
