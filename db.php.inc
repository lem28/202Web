#!usr/bin/php
<?php
class userDB
{
	private $db;
	public function __construct()
		{	
		$this->db = new mysqli("localhost","root","herecomesthesnow45","it202");

		if ($this->db->connect_errno > 0)
		{
			echo __file__.__line__."Failed to connect to database".$this->db->connect_error.PHP_EOL;
			exit(0);
		}
		echo "Connected to db".PHP_EOL;
	}
	public function __destruct()
	{
		$this->db->close();
		echo "Closed connection to db".PPH_EOL;
	}

	public function get_login_name($login_name)
	{
		$get_query = "select login_name from users where login_name='$login_name';";
		$get_results = $this->db->query($query);
		if(!$get_results)
		{
			echo "error with results: ".$this->db->error.PPH_EOL;
			return 0;
		}
		$user = $get_results->fetch_assoc();
		if (isset($user["login_name"]))
		{	
			return $user["login_name"];
		}
		return 0;
	}
	public function validate_user($login_name,$password)
	{
		if ($this->get_login_name($login_name) == 0)
		{
			echo "user $login_name doesn't exist".PHP_EOL;
			return false;
		}
		$validate_query = "select login_name from users where user_name='$name';";
		$validate_results = $this->db->query($add_query);
		if(!$validate_results)
		{
			echo "error with results: ".$this->db->error.PPH_EOL;
			return 0;
		}
	}
	}
	public function add_new_user($login_name,$password,$first_name,$last_name,$email)
	{
		if ($this->get_login_name($login_name) != 0)
		{
			echo "user $login_name already exists".PHP_EOL;
			return false;
		}
		$add_query = "
			INSERT INTO users
			(
				user_login,
				user_pw,
				user_first_name,
				user_last_name,
				user_email,
			)
			VALUES
			(
				'JD',
				'scrubs',
				'John',
				'Dorian',
				'jdorian@gmail.com',
			);";
		$add_results = $this->db->query($add_query);
		if(!$results)
		{
			echo "error with results: ".$this->db->error.PPH_EOL;
		}
		else
		{
			echo "Added $login_name";
		}
		return 0;
	}
}
?>
