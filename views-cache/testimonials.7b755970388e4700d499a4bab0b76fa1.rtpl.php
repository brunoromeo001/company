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
            <div class="box-header">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreate">Adcionar Depoimento</button>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
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
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
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
      <!-- Modal -->
      <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Depoimento</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

