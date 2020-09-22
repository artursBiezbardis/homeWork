<?php declare(strict_types=1);

namespace SpicesCollection;


class SpicesCollection
{
    private array $spices = [];
    public function add($spices): void
    {
        $this->spices[] = $spices;
    }
    public function all(): array
    {
        return $this->spices;
    }
}
