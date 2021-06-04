<div class="container"> 

         <header class="col-md-12 border-bottom"> <h3><i class="fas fa-blog"></i> Post</h3> </header>
         
         <div class="col-md-12"> 
         <?php 
         $post = new \Source\Action\Post();
         $post->cadastra();

         ?>
         </div>
         
         <div class="container"> 
         
             <form  action="" method="post" enctype="multipart/form-data" > 
             
                   <div class="form-group"> 
                    <label> Imagem de Post</label>
                    <input type="file" name="image" class="form-control" />
                </div>
             
                 <div class="form-group"> 
                     <label>Titulo </label>
                     <input class="form-control" name="title" class="form-control" />
                 </div>
             
                 <div class="form-group"> 
                     <label>Descrição </label>
                     <input class="form-control" name="description" class="form-control" />
                 </div>
             
                 <div class="form-group"> 
                     <label>Conteudo </label>
                     <textarea id="summernote" name="content"> </textarea>
                 </div>
             
                 <div class="form-group"> 
                     </br>
                     <input type="submit" class="btn btn-outline-success" value="CADASTRAR" />
                 </div>
             
             </form>
         
         </div>

</div>

        <script>

            $(document).ready(function () {
                $('#summernote').summernote();
            });



        </script>