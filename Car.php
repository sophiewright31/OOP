<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';

final class Car extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'oil',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct( $color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function start(): string
    {
        if ($this->HasParkBrake() === true){
            throw new Exception('Something is activate, you cannot start');
        } else {
            return 'Start';
        }
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

//Part 4 OOP Exceptions
    public function HasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    public function setHasParkBrake(): Car
    {
        $this->hasParkBrake = !$this->HasParkBrake();
        return $this;
    }
    public function switchOn(bool $true): bool
    {
        return true;
    }
    public function switchOff(bool $false): bool
    {
        return false;
    }
}