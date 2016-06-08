<?php

class InfoController extends Controller
{
	public function __construct()
	{
		parent::__construct();

		Auth::checkAuthentication();
	}

	public function index()
	{
		$this->view->render('info/index');
	}

	public function edit()
	{

	}

	public function editSave()
	{
		
	}
}