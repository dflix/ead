<div class="container"> 
    <header class="col-md-12 border-bottom"> <h3><i class="fas fa-blog"></i>Editar :: Post</h3> </header>

    <div class="container"> 

        <table class="table"> 

            <thead> 
                <tr> 
                    <th>Imagem </th>
                    <th>Titulo</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>

                <?php
                $atual = filter_input(INPUT_GET, "atual", FILTER_VALIDATE_INT);
                $pager = new Source\Action\Pager("?p=epost&atual=", 'Primeira', 'Ultima', '1');
                $pager->ExePager($atual, 5);
                
                $ver = new \Source\Models\Read();
                $ver->ExeRead("df_post", "ORDER BY id DESC LIMIT :limit OFFSET :offset", "limit={$pager->getLimit()}&offset={$pager->getOffset()}");
                $ver->getResult();
                foreach ($ver->getResult() as $value) {

                ?>

                <tr> 
                    <td><img src="<?= CONF_URL_BASE ?>/uploads/<?= $value["image"]?>" width="350" /> </td>
                    <td><?= $value["title"]?> </td>
                    <td><?= $value["description"]?> </td>
                    <td><a href="#"><i class="fas fa-edit" style="font-size: 1.5em;"></i></a>  </td>
                    <td><a href="#"><i class="fas fa-trash-alt" style="font-size: 1.5em; color:red;"></i></a>  </td>
                </tr>
                <?php } ?>

            </thead>


        </table>


             <?php 
        $pager->ExePaginator("df_post", "ORDER BY id DESC ");
        
       echo $pager->getPaginator();
        ?>

    </div>
</div>

