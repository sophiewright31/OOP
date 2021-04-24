<?php
interface LightableInterface
{
    public function switchOn(bool $true): bool;
    public function switchOff(bool $false): bool;
}