<?php

namespace StringCollect;

function stringCollection(string $string = ''): StringCollect
{
    return new StringCollect($string);
}

function stringGet(StringCollect $stringCollect, $key = null): string
{
    return $stringCollect->get($key);
}

function stringFirst(StringCollect $stringCollect): string
{
    return $stringCollect->first();
}

function stringCount(StringCollect $stringCollect): int
{
    return $stringCollect->count();
}

function stringToArray(StringCollect $stringCollect): string
{
    return $stringCollect->toArray();
}

function stringMap(StringCollect $stringCollect, callable $callback): StringCollect
{
    return $stringCollect->map($callback);
}

function stringEach(StringCollect $stringCollect, callable $callback, ...$args): StringCollect
{
    return $stringCollect->each($callback, ...$args);
}

function stringPush(StringCollect $stringCollect, $value, $key = null): StringCollect
{
    return $stringCollect->push($value, $key);
}

function stringUnshift(StringCollect $stringCollect, $value): StringCollect
{
    return $stringCollect->unshift($value);
}

function stringShift(StringCollect $stringCollect): StringCollect
{
    return $stringCollect->shift();
}

function stringPop(StringCollect $stringCollect): StringCollect
{
    return $stringCollect->pop();
}

function stringSplice(StringCollect $stringCollect, int $idx, int $length = 1): StringCollect
{
    return $stringCollect->splice($idx, $length);
}

?>