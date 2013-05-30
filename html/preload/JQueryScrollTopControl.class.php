<?php
/**
 * @package	JQueryScrollTopControl
 * @author	Nobuyuki Tominaga aka Pianoman <http://www.gate-it.net>
 * @version $Id:JQueryScrollTopControl.class.php ver0.01 2012/03/31  00:00:00 pianoman  $
 * @copyright	2012 Nobuyuki Tominaga
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU GPL v2
 */

if (!defined('XOOPS_ROOT_PATH')) exit();

class JQueryScrollTopControl extends XCube_ActionFilter
{
	public function preBlockFilter()
	{
		$this->mRoot->mDelegateManager->add('Site.JQuery.AddFunction',array(&$this, 'addScript'));
	}

	public function addScript(&$jQuery)
	{

		$ImgIcon = "up.png";	//画像ファイルの名前
		$ImgWidth = "50";	//画像ファイルの横幅（単位：px）
		$ImgHeight = "50";	//画像ファイルの高さ（単位：px）

		//画像のURL
		$ControlIcon = XOOPS_URL . "/images/" . $ImgIcon;

		$JQueryScrollTopControlScript = "/common/js/scrolltopcontrol.js?" . "url=" . $ControlIcon . "&width=" . $ImgWidth . "&height=" . $ImgHeight;

		$jQuery->addLibrary($JQueryScrollTopControlScript, true);
//		$jQuery->addaddScript('');

	}
//class END
}
?>
