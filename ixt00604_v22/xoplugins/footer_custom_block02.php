<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt00604
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt00604
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block02.php 1778 2009-12-13 18:15:01Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1002',
	'title'     => 'Custom Footer',
	'content'   => '
	<div>
	Hello!
	<br/>
	Here the custom footer block 02.
	<br /><br />
	<div align="center">
	<img style="border:solid; border-color:#fff;border-width:3px;" alt="Best FREE Themes for XOOPS" src="http://ixthemes.sourceforge.net/demo/uploads/dimg01_120_105.jpg" />
	</div>
	</div>
	',
);
$this->assign('fblock', $block);
?>
