<?php
/**  You are working on a project to create an online shopping cart system. As part of the project, you need to implement a Product class that represents a product in the system. The Product class should have the following properties:
 */
class Product
{
    private int $id;
    private string $name;
    private float $price;

    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }
    public function showDetails()
    {
        echo "Product Details: \n";
        echo "- ID : {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price:\${$this->getFormattedPrice()}\n";
    }

}
$product = new Product(1, 'T-Shirt', 19.99);
$product->showDetails();








?>