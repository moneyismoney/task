<?php

class Order_items {
	public static function getTotalRevenue() {
		require __DIR__ . '/../core/Db.php';
		$sql =
			"SELECT sum(order_items.price)          
        FROM order_items";

		$q = $conn->query($sql);

		$row = $q->fetch(PDO::FETCH_NUM);
		return $row[0];
	}

}