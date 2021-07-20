<?php

class Orders {
	public static function getTotalOrders() {
		require __DIR__ . '/../core/Db.php';
		$sql =
			"SELECT count(orders.id)          
        FROM orders";

		$q = $conn->query($sql);

		$row = $q->fetch(PDO::FETCH_NUM);
		return $row[0];
	}

}