<?php

declare(strict_types=1);

namespace App\Design\Struct\Coherent;


class Sql
{
    protected $fields = [];
    protected $from = [];
    protected $where = [];

    public function select(array $fields) :Sql
    {
        $this->fields = $fields;
        return $this;
    }

    public function where(string $where) :Sql
    {
        $this->where[] = $where;
        return $this;
    }

    public function from(string $table, string $alias) :Sql
    {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }

    public function __toString():string
    {
        //对象转字符串
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}