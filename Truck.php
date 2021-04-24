<?php
require_once 'Vehicle.php';
class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setStorageCapacity($storageCapacity);
    }

    /**
     * @return int
     */
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    /**
     * @param int $storageCapacity
     */
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    /**
     * @return int
     */
    public function getLoading(): int
    {
        return $this->loading;
    }

    /**
     * @param int $loading
     */
    public function setLoading(int $loading): void
    {
        if($loading <= $this -> storageCapacity) {
            $this->loading = $loading;
        }
    }
    public function isFull(): string
    {
        return $this -> storageCapacity === $this -> loading ? "full" : "in filling";
    }
}