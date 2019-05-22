
<?php

/**
 * 
 */
class TestController extends Controller
{
	
	public function index()
	{
		$this->view('template/header');
		$this->view('test/test');
		$this->view('template/footer');
	}


}

 ?>