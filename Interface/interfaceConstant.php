<?php
interface a
{
    const b = 'Interface constante';
}

// Imprime: Interface constant
echo a::b;

// Não é permitido sobreescrever constantes.
// Por isso o código de baixo não irá funcionar

/*
class b implements a
{
    const b = 'Class constant';
}
*/
?>