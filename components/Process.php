<?php
/**
 * 
 */
namespace mithun\process\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use Arara\Process\Action\Action;
use Arara\Process\Action\Callback;
use Arara\Process\Control;
use Arara\Process\Context;
use Arara\Process\Child;


/**
 * Process
 *
 * @author Mithun Mandal <mithun12000@gmail.com>
 */
class Process extends Component
{
	
	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
	}
}