<?php

namespace StringCollect;

class StringCollect
{
    private string $string = '';

    public function __construct(string $string = '')
    {
        $this->string = $string;
    }

    public function get($key = null): string
    {
        return $this->string[$key] ?? $this->string;
    }

    public function first()
    {
        return $this->string[0];
    }

    public function count(): int
    {
        return strlen($this->string);
    }

    public function toArray(): string
    {
        return $this->string;
    }

    public function map(callable $callback): StringCollect
    {
        return new self(str_replace($this->string, '', $this->string));
    }

    public function each(callable $callback, ...$args): StringCollect
    {
        foreach (str_split($this->string) as $char) {
            $callback($char, ...$args);
        }
        return $this;
    }

    public function push($value, $key = null): StringCollect
    {
        if ($key) {
            $this->string[$key] = $value;
        } else {
            $this->string .= $value;
        }
        return $this;
    }

    public function unshift($value): StringCollect
    {
        $this->string = $value . $this->string;
        return $this;
    }

    public function shift(): StringCollect
    {
        $this->string = substr($this->string, 1);
        return $this;
    }

    public function pop(): StringCollect
    {
        $this->string = substr($this->string, 0, -1);
        return $this;
    }

    public function splice($idx, $length = 1): StringCollect
    {
        $this->string = substr_replace($this->string, '', $idx, $length);
        return $this;
    }
}

?>