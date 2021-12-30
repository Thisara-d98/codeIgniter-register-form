<?php

	class RegModel extends CI_Model {
		function SaveRecords($name,$phonenumber,$email,$password){
			$query="INSERT INTO users VALUES('','$name','$phonenumber','$email','$password')";
			$this->db->query($query);
		}
	}
?>
