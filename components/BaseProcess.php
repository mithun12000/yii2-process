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
abstract class Process extends Component
{	
	/**
	 *
	 * @var Control $control
	 */
	protected $control;
	
	/**
	 * Create Process
	 */
	public function create();
	
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
}