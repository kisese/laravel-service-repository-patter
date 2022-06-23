<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Interfaces\OrderRepositoryInterface;

class OrderService
{
    private OrderRepositoryInterface $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        return $this->orderRepository->getAllOrders();
    }

    public function store($orderDetails)
    {
        return $this->orderRepository->createOrder($orderDetails);
    }

    public function show($orderId)
    {
        return $this->orderRepository->getOrderById($orderId);
    }

    public function update($orderId, $orderDetails)
    {
        return $this->orderRepository->updateOrder($orderId, $orderDetails);
    }

    public function destroy($orderId)
    {
        $this->orderRepository->deleteOrder($orderId);
    }
}
