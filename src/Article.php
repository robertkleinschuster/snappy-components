<?php

declare(strict_types=1);

namespace SnappyComponents;

use SnappyRenderer\Renderable;

class Article implements Renderable
{
    private $element;

    /**
     * @param $element
     */
    public function __construct($element)
    {
        $this->element = $element;
    }

    public function render(object $model): iterable
    {
        yield '<article>';
        yield $this->element;
        yield '</article>';
    }
}