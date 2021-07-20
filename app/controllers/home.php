<?php

class Home extends Controller {
	public function index($name = '') {
		$user = $this->model('User');
		$user->name = $name;
		$view_data = [
			'name' => $user->name,
			'total_customer' => Customer::getTotalCustomers(),
			'total_orders' => Orders::getTotalOrders(),
			'total_revenue' => Order_items::getTotalRevenue(),
		];
		$this->view('home/index', $view_data);

	}
}
