<?php

class Customer {
	public static function getTotalCustomers() {
		require __DIR__ . '/../core/Db.php';
		$sql =
			"SELECT count(customer.id)          
        FROM customer";

		$q = $conn->query($sql);

		$row = $q->fetch(PDO::FETCH_NUM);
		return $row[0];
	}

}