# CONSULTA [RENIEC]
Obten los Nombres y apellidos de una Persona a partir de su Nro de DNI o CUI de cuidados Peruanos. puedes ver una demo [aqui].
### Metodo de Uso
```sh
<?php
    require ("./src/autoload.php");

    $persona = new \Reniec\Reniec();
	$dni="00000000";
    var_dump( $persona->search($dni) );
?>
```
como resultado obtenemos el array
```sh
array(2) {
  ["success"]=>
  bool(true)
  ["result"]=>
  array(5) {
    ["Nombre"]=>
    string(5) "Nombres"
    ["Paterno"]=>
    string(5) "Ap. Paterno"
    ["Materno"]=>
    string(4) "AP. Materno"
    ["DNI"]=>
    string(8) "00000000"
    ["CodVerificacion"]=>
    string(1) "0"
  }
}

```
en caso de error
```sh
array(2) {
  ["success"]=>
  bool(false)
  ["msg"]=>
  string(21) "Nro de DNI no valido."
}
```
### Instalacion mediante composer
```sh
	composer require -o "jossmp/reniec"
```

```sh
<?php
    require ("./vendor/autoload.php");
    ...
?>
```

[RENIEC]: <https://cel.reniec.gob.pe/valreg/valreg.do>
[aqui]: <https://demos.geekdev.ml/reniec/>
