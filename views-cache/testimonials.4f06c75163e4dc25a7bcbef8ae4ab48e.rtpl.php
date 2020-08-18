<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Depoimentos        
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
                    <td><?php echo $value1["id_testimonial"]; ?></td>
                    <td><img src="/res/assets/img/testimonials/testimonial-<?php echo $value1["id_testimonial"]; ?>.jpg" alt="User Image" class="img-circle img-sm"></td>
                    <td><?php echo $value1["name_testimonial"]; ?></td>
                    <td><?php echo $value1["profession_testimonial"]; ?></td>
                    <td><?php echo $value1["testimonial"]; ?></td>
                    <td>
                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalTestimonialUpdate" data-id_testimonial="<?php echo $value1["id_testimonial"]; ?>" data-name_testimonial="<?php echo $value1["name_testimonial"]; ?>" data-profession_testimonial="<?php echo $value1["profession_testimonial"]; ?>" data-testimonial="<?php echo $value1["testimonial"]; ?>"><i class="fa fa-edit"></i> Editar</button>                      
                      <a href="/admin/testimonials/<?php echo $value1["id_testimonial"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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
                <input type="text" class="form-control" name="name_testimonial" placeholder="Informe o nome ">
              </div>
              <div class="form-group">
                <label>Profissão:</label>
                <input type="text" class="form-control" name="profession_testimonial" placeholder="Informe a profissão">
              </div>   
              <div class="form-group">
                <label>Depoimento:</label>
                <textarea class="form-control" name="testimonial" rows="3"></textarea>
              </div>                   
              <div class="form-group">
                <label for="file">Foto:</label>                    
                <input type="file" class="form-control" id="file-create" name="file">          
                  <div class="box-body">
                    <img class="img-responsive" id="image-preview-create" src="/res/assets/img/default.jpg" alt="Foto">
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
                <input type="text" class="form-control" id="name_testimonial" name="name_testimonial" placeholder="Informe o nome ">
              </div>
              <div class="form-group">
                <label>Profissão:</label>
                <input type="text" class="form-control" id="profession_testimonial" name="profession_testimonial" placeholder="Informe a profissão">
              </div>   
              <div class="form-group">
                <label>Depoimento:</label>
                <textarea class="form-control" id="testimonial" name="testimonial" rows="3"></textarea>
              </div>                   
              <div class="form-group">
                <label for="file">Foto:</label>                    
                <input type="file" class="form-control" id="file-update" name="file">          
                  <div class="box-body">
                    <img class="img-responsive" id="image-preview-update" alt="Photos">
                  </div>              
              </div>      
            </div>
            <!-- /.box-body -->                
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Atualizar</button>
            </div>             
            <input type="hidden" id="id_testimonial" name="id_testimonial" >
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
        var idTestimonial = button.data('id_testimonial');// Extract info from data-* attributes
        var nameTestimonial = button.data('name_testimonial');
        var professionTestimonial = button.data('profession_testimonial');
        var testimonial = button.data('testimonial');
  
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        modal.find('#id_testimonial').val(idTestimonial);
        modal.find('#name_testimonial').val(nameTestimonial);
        modal.find('#profession_testimonial').val(professionTestimonial);
        modal.find('#testimonial').val(testimonial);
        modal.find('#image-preview-update').attr('src', "/res/assets/img/testimonials/testimonial-"+idTestimonial);
      });
  
    
      document.querySelector('#file-create').addEventListener('change', function(){
  
        var file = new FileReader();
  
        file.onload = function() {
          
          document.querySelector('#image-preview-create').src = file.result;
  
        }
  
        file.readAsDataURL(this.files[0]);
  
      });    

      document.querySelector('#file-update').addEventListener('change', function(){
  
        var file = new FileReader();
  
        file.onload = function() {
          
          document.querySelector('#image-preview-update').src = file.result;
  
        }
  
        file.readAsDataURL(this.files[0]);
  
      }); 
    });
  
    
  </script>