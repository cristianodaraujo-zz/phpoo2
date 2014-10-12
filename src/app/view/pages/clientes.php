
<pre>
<?php

//use \src\app\classes\Types\ClientesPessoaFisica as Clientes;


use \src\app\classes\Config\Connect;
use \src\app\classes\Config\Crud;


$clientes = new Crud(Connect::getDb());
$dados =  $clientes->read();
/*
$clientes[0] = new Clientes(1, "Angelina Archibald", "angelina@email.com.br", "PF", 88888888888, 44435549, "Piauí", 777, "Centro", 15500000, "casa", 5, "Votuporanga", "SP");
$clientes[0]
    ->setCelular(17977777777)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
$clientes[1] = new Clientes(2, "Claudia Bertolin", "claudia@email.com.br", "PJ", 12345678912,  32435549, "Amazona", 1, "São Paulo",  "15500-000", "casa", 3, "São Paulo", "sp" );
$clientes[1]
    ->setCelular(5115151400)
    ->setTelCobr(32435339)
    ->setRuaCobr("João")
    ->setNumeroCobr(1515)
    ->setComplementoCobr("casa")
    ->setBairroCobr("Magalhães")
    ->setCepCobr(15500000)
    ->setMunicipioCobr("Passos")
    ->setUfCobr("DF")
;


$clientes[2] = new Clientes(3, "Felipe Marcio de Souza", "felipe@email.com.br", "PF", "12345678912", 32435549, "Pernanbuco", 100,  "São Paulo",  "15500-000", "casa", 2, "São Paulo", "sp" );
$clientes[2]
    ->setCelular(1888848488)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
$clientes[3] = new Clientes(4, "Maria Helena", "maria@email.com.br", "PJ", "12345678912", 32435549, "São Paulo", 481, "São Paulo", "15500-000", "Bloco 01 Sala 02", 5, "São Paulo", "sp" );
$clientes[3]
    ->setCelular(5115151400)
    ->setTelCobr(32435339)
    ->setRuaCobr("Marcio")
    ->setNumeroCobr(878)
    ->setComplementoCobr("casa")
    ->setBairroCobr("Magalhães")
    ->setCepCobr(15500000)
    ->setMunicipioCobr("Passos")
    ->setUfCobr("DF")
;
$clientes[4] = new Clientes(5, "Luciana Helena", "luci@email.com.br", "PF", "12345678912", 32435549, "Alagoas", 1, "São Paulo", "15500-000", "casa", 1, "São Paulo", "sp" );
$clientes[4]
    ->setCelular(1748484845)
    ->setTelCobr(null)
    ->setRuaCobr(null)
    ->setNumeroCobr(null)
    ->setComplementoCobr(null)
    ->setBairroCobr(null)
    ->setCepCobr(null)
    ->setMunicipioCobr(null)
    ->setUfCobr(null)
;
//$clientes[5] = new Clientes(6, "Marcia Souza", "12345678912", "marcia@email.com.br", 32435549, "Paraná", 1, "casa", "São Paulo", "15500-000", "São Paulo", "sp" );
//$clientes[6] = new Clientes(7, "Ailton Moraes", "12345678912", "ailton@email.com.br", 32435549, "Minas", 1, "casa", "São Paulo", "15500-000", "São Paulo", "sp" );
//$clientes[7] = new Clientes(8, "Jenifer Souza", "12345678912", "jenifer@email.com.br", 32435549, "Bahia", 1, "Apto 07", "São Paulo", "15500-000", "São Paulo", "sp" );
//$clientes[8] = new Clientes(9, "Carlos Jaspel", "12345678912", "carlos@email.com.br", 32435549, "Sergipe", 1, "casa", "São Paulo", "15500-000", "São Paulo", "sp" );
//$clientes[9] = new Clientes(10, "Helena Goulart", "12345678912", "vitor@email.com.br", 32435549, "Av. Brasil", 1, null, "São Paulo", "15500-000", "São Paulo", "sp" );

*/


?>
</pre>

