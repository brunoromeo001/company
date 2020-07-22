<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sobre nós
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Sobre nós</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="callout callout-info">
        <h4>Tip!</h4>

        <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
          is bigger than your content because it prevents extra unwanted scrolling.</p>
      </div>
      <div class="row">
        <div class="col-md-12">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Sobre nós</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
             <div class="col-md-6">
              <h2>
                Eum ipsam laborum deleniti velitena
                Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave
              </h2>
              <h3>
                Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave
              </h3>
              
             </div>             
             <div class="col-md-6">
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
              </p>
              
             </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalEditAbout">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Editar
              </button>
            </div>
            <!-- /.box-footer-->
          </div>

        </div>        
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Texto nossas habilidades</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <p>
                <?php $counter1=-1;  if( isset($textSkill) && ( is_array($textSkill) || $textSkill instanceof Traversable ) && sizeof($textSkill) ) foreach( $textSkill as $key1 => $value1 ){ $counter1++; ?> 
                  <?php echo $value1["text_skill"]; ?>
                <?php } ?>
              </p>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalEditSkill">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Editar
              </button>
            </div>
            <!-- /.box-footer-->
          </div>
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Nossas habilidades</h3>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalSkillCreate"> 
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  Add nova habilidade
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Habilidade</th>
                    <th>Porcentagem</th>                     
                  </tr>
                  <?php $counter1=-1;  if( isset($skills) && ( is_array($skills) || $skills instanceof Traversable ) && sizeof($skills) ) foreach( $skills as $key1 => $value1 ){ $counter1++; ?>
                  <tr>                  
                    <td><?php echo $value1["id_skill"]; ?></td>         
                    <td><?php echo $value1["name_skill"]; ?></td>                    
                    <td><?php echo $value1["value_skill"]; ?>%</td>                    
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/skills/<?php echo $value1["id_skill"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>
         
        </div>
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Nossos Clientes</h3>
    
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalClientCreate">
                  <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                  Add novo cliente
                </button> 
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Cliente</th>                     
                  </tr>
                  <?php $counter1=-1;  if( isset($clients) && ( is_array($clients) || $clients instanceof Traversable ) && sizeof($clients) ) foreach( $clients as $key1 => $value1 ){ $counter1++; ?>
                  <tr>                  
                    <td><?php echo $value1["id_client"]; ?></td>         
                    <td><img src="/res/assets/img/clients/client-1.png" alt="User Image" class="img-circle img-sm"></td>             
                    <td><?php echo $value1["name_client"]; ?></td>                    
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="/admin/client/<?php echo $value1["id_client"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr> 
                  <?php } ?>               
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              Footer
            </div>
            <!-- /.box-footer-->
          </div>
        </div>
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <div class="modal fade" id="modalEditSkill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Editar texto nossas habilidades</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/text-skill">                                  
            <div class="box-body">
              <div class="form-group">
                <label>Texto:</label>
                <textarea class="form-control" id="text_skill" name="text_skill" rows="3">                 

                </textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Adicionar</button>
            </div>             
          </form>
        </div>
      </div>
    </div>
  </div>
  
  <!-- MODAL nossas habiliadades-->
  <div class="modal fade" id="modalSkillCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="exampleModalLabel">Adcionar nova habilidade</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/skill/create">                                  
            <div class="box-body">
              <div class="form-group">
                <label>Nome da habilidade:</label>
                <input type="text" class="form-control" name="name_skill" placeholder="Informe o nome da habilidade">
              </div>
              <div class="form-group">
                <label>Nível em porcentagem:</label>
                <input type="text" class="form-control" name="value_skill" placeholder="Informe o nível">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              <button type="submit" class="btn btn-success">Adicionar</button>
            </div>             
          </form>
        </div>
      </div>
    </div>
  </div>

    <!-- MODAL nossos clientes -->
    <div class="modal fade" id="modalClientCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Adcionar novo cliente </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/admin/client/create" enctype="multipart/form-data">                                  
              <div class="box-body">
                <div class="form-group">
                  <label>Nome do cliente:</label>
                  <input type="text" class="form-control" name="name_client" placeholder="Informe o nome da habilidade">
                </div>
                <div class="form-group">
                  <label>Site:</label>
                  <input type="text" class="form-control" name="site_client" placeholder="Informe o nível">
                </div>
                <div class="form-group">
                  <label for="file">Logo:</label>                    
                  <input type="file" class="form-control" id="file" name="file">          
                    <div class="box-body">
                      <img class="img-responsive" id="image-preview" src="/res/assets/img/default.jpg" alt="Photos">
                    </div>              
                </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Adicionar</button>
              </div>             
            </form>
          </div>
        </div>
      </div>
    </div>

    <script>
      document.querySelector('#file').addEventListener('change', function(){
        
        var file = new FileReader();
      
        file.onload = function() {
          
          document.querySelector('#image-preview').src = file.result;
      
        }
      
        file.readAsDataURL(this.files[0]);
      
      });
      </script>