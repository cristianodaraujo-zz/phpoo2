<!--
    Informações do Cliente
-->
<h1>Informações do Cliente</h1>

<div class="table">
    <?php if(isset($_GET)): $codigos = array_keys($_GET); ?>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <!--<th>Sobrenome</th>-->
                    <th>CPF</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Cliente</th>
                    <th>Telefone</th>
                    <?php foreach ($codigos as $codigo): $valor = $codigo - 1; ?>
                        <?php if(method_exists($clientes[$valor], 'getCelular')): ?>
                            <th>Celular</th>
                        <?php else: ?>
                            <th>Fax</th>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <th>Rua</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cep</th>
                    <th>Municipio</th>
                    <th>UF</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($codigos as $codigo): $valor = $codigo - 1; ?>
                <?php //print_r($clientes[$valor]); ?>
                <tr>
                    <td><?php echo $clientes[$valor]->getId();?></td>
                    <td><?php echo $clientes[$valor]->getNome();?></td>
                    <!--<td><?php //echo $clientes[$valor]->getSobrenome();?></td>-->
                    <td><?php echo $clientes[$valor]->getCnpj_Cpf();?></td>
                    <td><?php echo $clientes[$valor]->getEmail();?></td>
                    <td><?php echo $clientes[$valor]->getTipo();?></td>
                    <td><?php echo $clientes[$valor]->getGrauImportance() . ' Estrelas';?></td>
                    <td><?php echo $clientes[$valor]->getTelefone();?></td>
                    <?php if(method_exists($clientes[$valor], 'getCelular')): ?>
                        <td><?php echo $clientes[$valor]->getCelular();?></td>
                    <?php else: ?>
                        <td><?php echo $clientes[$valor]->getFax();?></td>
                    <?php endif; ?>
                    <td><?php echo $clientes[$valor]->getRua();?></td>
                    <td><?php echo $clientes[$valor]->getNumero();?></td>
                    <td><?php echo $clientes[$valor]->getComplemento();?></td>
                    <td><?php echo $clientes[$valor]->getBairro();?></td>
                    <td><?php echo $clientes[$valor]->getCep();?></td>
                    <td><?php echo $clientes[$valor]->getMunicipio();?></td>
                    <td><?php echo $clientes[$valor]->getUf();?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <!-- Endereço de cobrança -->
            <thead>
                <tr>
                    <th>Telefone</th>
                    <th>Rua</th>
                    <th>Numero</th>
                    <th>Complemento</th>
                    <th>Bairro</th>
                    <th>Cep</th>
                    <th>Municipio</th>
                    <th>UF</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($codigos as $codigo): $valor = $codigo - 1; ?>
                <tr>
                    <td><?php echo $clientes[$valor]->getTelCobr();?></td>
                    <td><?php echo $clientes[$valor]->getRuaCobr();?></td>
                    <td><?php echo $clientes[$valor]->getNumeroCobr();?></td>
                    <td><?php echo $clientes[$valor]->getComplementoCobr();?></td>
                    <td><?php echo $clientes[$valor]->getBairroCobr();?></td>
                    <td><?php echo $clientes[$valor]->getCepCobr();?></td>
                    <td><?php echo $clientes[$valor]->getMunicipioCobr();?></td>
                    <td><?php echo $clientes[$valor]->getUfCobr();?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="index.php"><button class="btn btn-info " >Retornar</button></a>
</div>




