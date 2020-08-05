<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Testimonials
        <small>Lista das testemunhas</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Testimonials</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">     
      <!-- Default box -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista de depoimentos</h3>              
              <button type="submit" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#modalTestimonialCreate"> <i class="fa fa-plus" aria-hidden="true"></i> Add novo depoimento </button>                            
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Profissão</th>
                    <th>Depoimento</th>                    
                    <th>Ação</th>    
                  </tr>
                  <?php $counter1=-1;  if( isset($testimonials) && ( is_array($testimonials) || $testimonials instanceof Traversable ) && sizeof($testimonials) ) foreach( $testimonials as $key1 => $value1 ){ $counter1++; ?>
                  <tr>
                    <td><?php echo $value1["id_testimonials"]; ?></td>
                    <td><img src="/res/assets/img/testimonials/testimonials-1.jpg" alt="User Image" class="img-circle img-sm"></td>
                    <td><?php echo $value1["name_testimonials"]; ?></td>
                    <td><?php echo $value1["profession_testimonials"]; ?></td>
                    <td><?php echo $value1["testimonials"]; ?></td>
                    <td>
                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalTestimonialUpdate" data-id_testimonials="<?php echo $value1["id_testimonials"]; ?>" data-name_testimonials="<?php echo $value1["name_testimonials"]; ?>" data-profession_testimonials="<?php echo $value1["profession_testimonials"]; ?>" data-testimonials="<?php echo $value1["testimonials"]; ?>"><i class="fa fa-edit"></i> Editar</button>                      
                      <a href="/admin/testimonials/<?php echo $value1["id_testimonials"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>        
      </div>
      <!-- /.box -->
     
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

   <!-- Modal Testimonilas Create -->
   <div class="modal fade" id="modalTestimonialCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Adicionar Depoimento</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/testimonials" enctype="multipart/form-data">                                
            <!-- checkbox -->
            <div class="box-body">
              <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" name="name_testimonials" placeholder="Informe o nome ">
              </div>
              <div class="form-group">
                <label>Profissão:</label>
                <input type="text" class="form-control" name="profession_testimonials" placeholder="Informe a profissão">
              </div>   
              <div class="form-group">
                <label>Depoimento:</label>
                <textarea class="form-control" id="testimonials" name="testimonials" rows="3"></textarea>
              </div>                   
              <div class="form-group">
                <label for="file">Foto:</label>                    
                <input type="file" class="form-control" id="file" name="file">          
                  <div class="box-body">
                    <img class="img-responsive" id="image-preview" src="/res/assets/img/default.jpg" alt="Photos">
                  </div>              
              </div>      
            </div>
            <!-- /.box-body -->                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Adicionar</button>
            </div>             
          </form>
        </div>
      </div>
    </div>
  </div>

   <!-- Modal Testimonilas Update -->
   <div class="modal fade" id="modalTestimonialUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Editar depoimento</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/testimonials-update" enctype="multipart/form-data">                                
            <!-- checkbox -->
            <div class="box-body">
              <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" id="name_testimonials" name="name_testimonials" placeholder="Informe o nome ">
              </div>
              <div class="form-group">
                <label>Profissão:</label>
                <input type="text" class="form-control" id="profession_testimonials" name="profession_testimonials" placeholder="Informe a profissão">
              </div>   
              <div class="form-group">
                <label>Depoimento:</label>
                <textarea class="form-control" id="testimonials" name="testimonials" rows="3"></textarea>
              </div>                   
              <div class="form-group">
                <label for="file">Foto:</label>                    
                <input type="file" class="form-control" id="file" name="file">          
                  <div class="box-body">
                    <img class="img-responsive" id="image-preview" src="/res/assets/img/default.jpg" alt="Photos">
                  </div>              
              </div>      
            </div>
            <!-- /.box-body -->                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Atualizar</button>
            </div>             
            <input type="hidden" id="id_testimonials" name="id_testimonials" >
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>

    scripts.push(function(){
  
      // Função para prencher os campos do modalTestimonialUpdate 
      $('#modalTestimonialUpdate').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var idTestimonials = button.data('id_testimonials');// Extract info from data-* attributes
        var nameTestimonials = button.data('name_testimonials');
        var professionTestimonials = button.data('profession_testimonials');
        var testimonials = button.data('testimonials');
  
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('#id_testimonials').val(idTestimonials);
        modal.find('#name_testimonials').val(nameTestimonials);
        modal.find('#profession_testimonials').val(professionTestimonials);
        modal.find('#testimonials').val(testimonials);;
      });
  
    
      document.querySelector('#file').addEventListener('change', function(){
  
        var file = new FileReader();
  
        file.onload = function() {
          
          document.querySelector('#image-preview').src = file.result;
  
        }
  
        file.readAsDataURL(this.files[0]);
  
      });    
    });
  
    
  </script>