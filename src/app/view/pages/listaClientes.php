<!--
    Listagem de Clientes
-->
<h1>Listagem de Clientes</h1>
    <div class="jumbotron">
        <?php
        if(isset($_POST['cres'])){
            ksort($clientes);
        }elseif(isset($_POST['dec'])){
            krsort($clientes);
        }else{
            ksort($clientes);
        }
        ?>
        <form method="post">
            <button class="btn btn-block btn-success" type="submit" value="dec" name="dec">Ordem Decrescente</button>
            <button class="btn btn-block btn-success" type="submit" value="cres" name="cres">Ordem Crescente</button>
        </form>
        <table class="table table-responsive">
            <thead>
                <tr>

                    <th>ID</th>
                    <th>NOME</th>
                    <!--<th>SOBRENOME</th>-->
                    <th>E-MAILL</th>
                    <th>TELEFONE</th>
                    <th>TIPO</th>
                    <th>GRAU IMPORTANCIA</th>
                    <th>VISUALIZAR</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente): ?>
                    <?php //print_r($cliente); ?>
                <tr>
                    <td><?php echo $cliente->getId();?></td>
                    <td><?php echo $cliente->getNome();?></td>
                    <!--<td><?php //echo $cliente->getSobrenome();?></td>-->
                    <td><?php echo $cliente->getEmail();?></td>
                    <td><?php echo $cliente->getTelefone();?></td>
                    <td><?php echo $cliente->getTipo();?></td>
                    <td><?php echo $cliente->getGrauImportance() . ' Estrelas';?></td>
                    <td><a href="visualizarCliente?<?php echo $cliente->getId();?>"><button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
