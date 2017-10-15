<?php

namespace Arryanggaputra;

final class ViewReactSource
{
    private $path;

    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function __toString()
    {
        return file_get_contents($this->path);
    }
}
