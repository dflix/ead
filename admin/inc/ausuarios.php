<div class="container"> 

    <header class="col-md-12 border-bottom"> <h3><i class="fas fa-user"></i> Usuários</h3> </header>
    
    <div class="container"> 
        
        <div class="col-md-12"> 
        <?php 
            $cad = new \Source\Action\Users();
            $cad->update();
            
            $exibe = new \Source\Models\Read();
            $exibe->ExeRead("df_users", "WHERE id = :a", "a={$_GET["up"]}");
            $exibe->getResult();
        ?>
        </div>
    
        <form action="" method="post" > 
            <div class="row">
            <div class="col-md-6"> 
                <label>Nome </label>
                <input type="text" class="form-control" name="first_name" value="<?= $exibe->getResult()[0]['first_name'] ?>" />
            </div>
        
            <div class="col-md-6"> 
                <label>Sobrenome </label>
                <input type="text" class="form-control" name="last_name" value="<?= $exibe->getResult()[0]['last_name'] ?>" />
            </div>
                
                <div class="col-md-4"> 
                    <label> Nivel </label>
                    <select name="level" class="form-control">
                        <option value="<?= $exibe->getResult()[0]['level'] ?>"> <?php 
                        if($exibe->getResult()[0]['level'] == "1"){
                            echo "Aluno";
                        }
                        if($exibe->getResult()[0]['level'] == "2"){
                            echo "Afiliado";
                        }
                        if($exibe->getResult()[0]['level'] == "3"){
                            echo "Produtor";
                        }
                        if($exibe->getResult()[0]['level'] == "4"){
                            echo "Master";
                        }
                        ?> </option>
                        <option value="1"> Aluno </option>
                        <option value="2"> Afiliado </option>
                        <option value="3"> Produtor </option>
                        <option value="4"> Master </option>
                    </select>
                </div>  
                
                <div class="col-md-4"> 
                    <label> E-mail</label>
                    <input type="text" name="email" value="<?= $exibe->getResult()[0]['email'] ?>" class="form-control" />
                </div>
                
                <div class="col-md-4"> 
                    <label> Senha</label>
                    <input type="password" name="password" value="<?= $exibe->getResult()[0]['password'] ?>" class="form-control" />
                </div>
                
                <div class="col-md-12">
                    </br>
                    <input type="hidden" value="<?= $exibe->getResult()[0]['id'] ?>" name="id"/>
                    <input type="submit" class="btn btn-outline-success" value="CADASTRAR" />
                </div>
                
                
            </div>
        
        
        </form>
    
    </div>
    
</div>
