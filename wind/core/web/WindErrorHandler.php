<?php
/**
 * @author Qiong Wu <papa0924@gmail.com> 2010-12-1
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */

class WindErrorHandler extends WindAction {

	protected $error = array();

	protected $urlReferer = '';

	/* (non-PHPdoc)
	 * @see WindAction::beforeAction()
	 */
	public function beforeAction($handlerAdapter) {
		$this->error = $this->getInput('error');
		if ($this->request->getUrlReferer())
			$this->urlReferer = $this->request->getUrlReferer();
		else
			$this->urlReferer = $this->request->getBaseUrl();
		
		return true;
	}

	/* (non-PHPdoc)
	 * @see WindAction::run()
	 */
	public function run() {
		echo array_pop($this->error);
		echo $this->urlReferer;
		exit();
	}

	/**
	 * @param string $errno
	 * @param string $errstr
	 * @param string $errfile
	 * @param string $errline
	 */
	public function errorHandle($errno, $errstr, $errfile, $errline) {

	}

}