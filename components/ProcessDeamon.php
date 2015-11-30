<?php
/**
 * 
 */
namespace mithun\process\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use Arara\Process\Action\Daemon;
use Arara\Process\Control;
use Arara\Process\Context;
use Arara\Process\Child;


/**
 * Process
 *
 * @author Mithun Mandal <mithun12000@gmail.com>
 */
class ProcessDeamon extends Component
{
	
	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();
	}
}