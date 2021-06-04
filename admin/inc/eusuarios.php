<div class="container"> 

    <header class="col-md-12 border-bottom"> <h3><i class="fas fa-user"></i> Editar Usuários</h3> </header>
    
    <div class="container"> 
        <div class="col-md-12"> 
        <?php 
        if(!empty($_GET["del"])){
            $user = new Source\Action\Users();
            $user->delete();
        }
        ?>
        </div>
    
        <table class="table table-condensed"> 
            <thead> 
                <tr> 
                    <th>Nome </th>
                    <th>Sobrenome </th>
                    <th>E-mail </th>
                    <th>Nivel </th>
                    <th>Editar </th>
                    <th>Excluir </th>
                </tr>
            </thead>
            
            <tbody>
                <?php 
                
                $atual = filter_input(INPUT_GET, "atual" , FILTER_VALIDATE_INT);
                $pager = new Source\Action\Pager("?p=eusuarios&atual=", 'Primeira', 'Ultima', '1');
                $pager->ExePager($atual, 5);
                
                $ler = new \Source\Models\Read();
                $ler->ExeRead("df_users", "ORDER BY id DESC LIMIT :limit OFFSET :offset" , "limit={$pager->getLimit()}&offset={$pager->getOffset()}");
                $ler->getResult();
                foreach ($ler->getResult() as $value) {

                ?>
                <tr>
                    <td> <?= $value["first_name"] ?> </td>
                    <td> <?= $value["last_name"] ?> </td>
                    <td> <?= $value["email"] ?> </td>
                    <td> <?php
                    if($value["level"] == "1"){
                        echo "<span class='bg-primary'> Aluno </span>";
                    }
                    if($value["level"] == "2"){
                        echo "<span class='bg-info'> Afiliado </span>";
                    }
                    if($value["level"] == "3"){
                        echo "<span class='bg-success'> Produtor </span>";
                    }
                    if($value["level"] == "4"){
                        echo "<span class='bg-warning'> Master </span>";
                    }
                    ?> </td>
                    <td> <a href="./?p=ausuarios&up=<?= $value["id"] ?>"><i class="fas fa-edit" style="font-size: 1.5em;"></i> </a></td>
                    <td> <a href="./?p=eusuarios&del=<?= $value["id"] ?>"><i class="fas fa-trash-alt" style="font-size: 1.5em; color:red;"></i> </a> </td>
                </tr>
                <?php } ?>
                
            </tbody>
        
        
        </table>
        
        <?php 
        $pager->ExePaginator("df_users", "ORDER BY id DESC");
        
       echo $pager->getPaginator();
        ?>
    
    </div>
    
</div>

