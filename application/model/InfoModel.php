<?php

class InfoModel
{
	public static function getProfileInfo()
	{
		$database = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM profiles WHERE user_id = :user_id";
		$query = $database->prepare($sql);
		$query->execute(array(':user_id' => Session::get('user_id')));

		return $query->fetchAll();
	}
}