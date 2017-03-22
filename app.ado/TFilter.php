<?php
class TFilter extends TExpression
{
    private $variable;
    private $operator;
    private $value;

    public function __construct($variable,$operator,$value)
    {
        $this->variable = $variable;
        $this->operator = $operator;
        $this->value    = $this->transform($value);

    }

    private function transform($value)
    {
        //se for array
        if (is_array($value))
        {
            foreach($value as $val){
                if(is_integer($val)){$foo[] = $val;}
                if(is_string($val)){$foo[] = "'$val'";}
            }
           return '('.implode(',',$foo).')';
        }
        //se for string
        if(is_string($value)){return "'$value'";}

        //se for nulo
         if(is_null($value)){return 'NULL';}

        //se for booleano
        if(is_bool($value)){return $value ? 'TRUE' : 'FALSE';}
        return $value;
    }

    public function dump()
    {
        //concatena a expressão
        return "{$this->variable} {$this->operator} {$this->value}";
    }
}
