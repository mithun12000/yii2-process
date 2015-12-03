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
use Arara\Process\Pool;


/**
 * Process
 *
 * @author Mithun Mandal <mithun12000@gmail.com>
 */
class ProcessPool extends BaseProcess
{
	/**
	 * using ProcessTrait
	 */
	use ProcessTrait;
	
	/**
	 * Create a New Pool
	 * @param unknown $processLimit
	 * @param string $autoStart
	 */
	public function create($processLimit, $autoStart = false){
		$this->process = new Pool($processLimit, $autoStart);
	}
	
	/**
	 * process count in a pool
	 * @return integer
	 */
	public function count(){
		return $this->process->count();
	}
	
	/**
	 * Attach Process to this Pool
	 * @param BaseProcess $action
	 */
	public function attach(BaseProcess $action){
		$this->process->attach($action->process);
	}
	
	/**
	 * Attach Process to this Pool
	 * @param BaseProcess $action
	 */
	public function detach(BaseProcess $action){
		$this->process->detach($action->process);
	}
}