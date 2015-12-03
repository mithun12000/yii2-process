<?php
/**
 * 
 */
namespace mithun\process\components;

use Yii;
use yii\base\Component;
use Arara\Process\Control;


/**
 * Base Process
 *
 * @author Mithun Mandal <mithun12000@gmail.com>
 */
abstract class BaseProcess extends Component
{	
	/**
	 *
	 * @var Control $control
	 */
	public $control;
	
	/**
	 * Create Process
	 */
	abstract public function create();
	
	/**
	 * Create Control
	 */
	public function createControl() {
		$this->control = new Control();
	}
	
	/**
	 * Flash Control
	 * @param number $seconds
	 */
	public function flush($seconds = 0){
		$this->control->flush($seconds);
	}
	
	/**
	 * Create Pid file for process
	 * @param string $appName
	 * @param string $path
	 */
	public function createPidfile($appName, $path='/var/run'){
		if(!$this->control){
			$this->createControl();
		}
		return new Pidfile($this->control, $appName, $path);
	}
}