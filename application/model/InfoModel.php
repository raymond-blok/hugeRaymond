<?php

class InfoModel
{
	public static function getProfileInfo()
	{
		$database = DatabaseFactory::getFactory()->getConnection();

		$sql = "SELECT * FROM profiles WHERE user_id = :user_id";
		$query = $database->prepare($sql);
		$query->execute(array(':user_id' => Session::get('user_id')));

		return $query->fetch();
	}

	public static function updateProfileInfo($name, $surname, $occupation, $gender, $address, $email, $mobile, $interest)
	{
		$database = DatabaseFactory::getFactory()->getConnection();

		$sql = "UPDATE profiles
				SET name = :name, surname = :surname, occupation = :occupation, gender = :gender, address = :address, email = :email, mobile = :mobile, interest = :interest 
				WHERE user_id = :user_id";
		$query = $database ->prepare($sql);
		$query->execute(array(':name' => $name, ':surname' => $surname, ':occupation' => $occupation, ':gender' => $gender, 
				':address' => $address, ':email' => $email, ':mobile' => $mobile, ':interest' => $interest, 
				':user_id' => Session::get('user_id')));
		if ($query->rowCount() == 1) {
			return true;
		}

		Session::add('feedback_negative', Text::get('FEEDBACK_NOTE_EDITING_FAILED'));
		return false;
	}
}