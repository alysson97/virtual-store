<?php

namespace App\Model\Cart;

interface Cart {
  public function add(CartItem $item);
  public function update(CartItem $item);
  public function delete($id);
  //public function has($id);
  public function getTotal();
  public function getCartItems();
}

class CartSession implements Cart {
  private $items = [];

  public function add(CartItem $item) {
    $this->items[$item->getId()] = $item;
    $_SESSION['cart'] = $this->items;
  }

  public function update(CartItem $item) {

    if (isset($this->items[$item->getId()])) {
      $this->items[$item->getId()]->setQuantity($item->getQuantity());
      $_SESSION['cart'] = $this->items;
    }
  }

  public function delete($id) {
    unset($this->items[$id]);
    $_SESSION['cart'] = $this->items; 
  }

  public function getTotal() {
    $total = 0;
    foreach ($this->items as $item) {
      $total += $item->getPrice() * $item->getQuantity();
    }
    return $total;
  }

  public function getCartItems() {
    return $this->items;
  }
}

class CartItem {
  private $id;
  private $description;
  private $price;
  private $quantity;

  public function __construct($id, $description, $price, $quantity) {
    $this->id = $id;
    $this->description = $description;
    $this->price = $price;
    $this->quantity = $quantity;
  }

  public function getId() {
    return $this->id;
  }

  public function getDescription() {
    return $this->description;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getQuantity() {
    return $this->quantity;
  }

  public function setQuantity($quantity) {
    $this->quantity = $quantity;
  }
}