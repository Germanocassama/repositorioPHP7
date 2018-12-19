<?php
abstract class ClasseAbstrata
{
    // Esse método abstrato apenas define os argumentos requeridos
    abstract protected function prefixName($name);

}

class ClasseConcreta extends ClasseAbstrata
{

    // O método filho pode definir argumentos opcionais não presentes na assitura abstrata
    public function prefixName($name, $separator = ".") {
        if ($name == "Andre") {
            $prefix = "Sr";
        } elseif ($name == "Maria") {
            $prefix = "Sra";
        } else {
            $prefix = "";
        }
        return "{$prefix}{$separator} {$name}";
    }
}

$class = new ClasseConcreta;
echo $class->prefixName("Andre"), "<br>";
echo $class->prefixName("Maria"), "<br>";
?>