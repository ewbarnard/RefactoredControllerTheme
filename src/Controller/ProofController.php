<?php

namespace RefactoredControllerTheme\Controller;

use App\Controller\AppController as BaseController;

class ProofController extends AppController
{
	protected $allowedViews = array(
		'index', 'proof',
	);

	public function index() {
		pr(array(__FILE__,__FUNCTION__,__LINE__));
		exit;
	}
	public function proof() {
		pr(array(__FILE__,__FUNCTION__,__LINE__));
		exit;
	}

}
