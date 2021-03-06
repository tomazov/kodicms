<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * @package		KodiCMS/Dashboard
 * @category	Widget
 * @author		butschster <butschster@gmail.com>
 * @link		http://kodicms.ru
 * @copyright	(c) 2012-2014 butschster
 * @license		http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt
 */
class Model_Widget_Dashboard_Skeleton_Template extends Model_Widget_Decorator_Dashboard {

	/**
	 * Если виджет может иметь несколько копий, то необходимо установить в TRUE
	 * 
	 * @var boolean
	 */
	protected $_multiple = FALSE;
	
	/**
	 * 
	 * @return array [$param, $param1] 
	 * В скобках указывается список переменных, которые доступны в шаблоне виджета,
	 * для отображения подсказки во вкладке "шаблон" в настройках виджета
	 * 
	 */
	public function fetch_data()
	{
		return array(
			// Переменные, которые попадают в шаблон виджета через класс View
			// и доступны в шаблоне в виде $param, $param2
			'param' => '...',
			'param1'
		);
	}
}