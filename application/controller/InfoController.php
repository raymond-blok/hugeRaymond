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
		$this->View->render('info/index', array(
			'info' => InfoModel::getProfileInfo()
			));
	}

	public function edit()
	{

	}

	public function editSave()
	{
		
	}
}