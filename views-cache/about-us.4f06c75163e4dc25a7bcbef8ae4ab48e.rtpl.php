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
                <?php echo $aboutUs["tittle_about"]; ?>                
              </h2>
              <h3>
                <?php echo $aboutUs["subtittle_about"]; ?>
              </h3>
              
             </div>             
             <div class="col-md-6">
              <p>
                <?php echo $aboutUs["text_about"]; ?>
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> <?php echo $aboutUs["list_one"]; ?></li>
                <li><i class="ri-check-double-line"></i> <?php echo $aboutUs["list_two"]; ?></li>
                <li><i class="ri-check-double-line"></i> <?php echo $aboutUs["list_tree"]; ?></li>
              </ul>
              <p>
                <?php echo $aboutUs["last_text"]; ?>
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
                  <?php echo $textSkill["text_skill"]; ?>                
              </p>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalEditTextSkill">
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
                    <th>Ação</th>
                  </tr>
                  <?php $counter1=-1;  if( isset($skills) && ( is_array($skills) || $skills instanceof Traversable ) && sizeof($skills) ) foreach( $skills as $key1 => $value1 ){ $counter1++; ?>
                  <tr>                  
                    <td><?php echo $value1["id_skill"]; ?></td>         
                    <td><?php echo $value1["name_skill"]; ?></td>                    
                    <td><?php echo $value1["value_skill"]; ?>%</td>                    
                    <td width="140px">
                      <button type="button" class="btn btn-primary btn-xs view_data" data-toggle="modal" data-target="#modalSkillUpdade" data-id_skill="<?php echo $value1["id_skill"]; ?>" data-name_skill="<?php echo $value1["name_skill"]; ?>" data-value_skill="<?php echo $value1["value_skill"]; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Editar 
                      </button> 
                                       
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
                    <th>Ação</th>
                  </tr>
                  <?php $counter1=-1;  if( isset($clients) && ( is_array($clients) || $clients instanceof Traversable ) && sizeof($clients) ) foreach( $clients as $key1 => $value1 ){ $counter1++; ?>
                  <tr>                  
                    <td><?php echo $value1["id_client"]; ?></td>
                    <?php if( $value1["site_client"] !== '' ){ ?>
                    <td><a href="<?php echo $value1["site_client"]; ?>" target="_blank"><img src="/res/assets/img/clients/client-<?php echo $value1["id_client"]; ?>.png" alt="Logo" width="60px" height="30px"></a></td>
                    <?php }else{ ?>
                    <td><img src="/res/assets/img/clients/client-<?php echo $value1["id_client"]; ?>.png" alt="Logo" width="60px" height="30px"></td>
                    <?php } ?>
                    <td><?php echo $value1["name_client"]; ?></td>                    
                    <td width="140px">
                      <button type="button" class="btn btn-primary btn-xs view_data" data-toggle="modal" data-target="#modalClientUpdate" data-id_client="<?php echo $value1["id_client"]; ?>" data-name_client="<?php echo $value1["name_client"]; ?>" data-site_client="<?php echo $value1["site_client"]; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Editar 
                      </button> 
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
      
      <!-- MODAL Edit Text nossa habiliadades -->
      <div class="modal fade" id="modalEditTextSkill" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Editar texto nossas habilidades</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/text-skill">                                  
                <div class="box-body">
                  <div class="form-group">
                    <label>Texto:</label>
                    <textarea class="form-control" id="text_skill" name="text_skill" cols="3" rows="3"><?php echo $textSkill["text_skill"]; ?></textarea>                    
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Atualizar</button>
                </div>             
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL Create Skill -->
      <div class="modal fade" id="modalSkillCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Adcionar nova habilidade</h4>
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

      <!-- MODAL Update Skill -->
      <div class="modal fade" id="modalSkillUpdade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Editar habilidade</h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/skill-update">                                  
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome da habilidades:</label>
                    <input type="text" class="form-control" name="name_skill" id="name_skill" placeholder="Informe o nome da habilidade">
                  </div>
                  <div class="form-group">
                    <label>Nível em porcentagem:</label>
                    <input type="text" class="form-control" name="value_skill" id="value_skill" placeholder="Informe o nível">
                  </div>              
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Atualizar</button>
                </div>             
                <input type="hidden" class="form-control" name="id_skill" id="id_skill" >
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- MODAL Create Client -->
      <div class="modal fade" id="modalClientCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Adcionar novo cliente </h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/client/create" enctype="multipart/form-data">                                  
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome do cliente:</label>
                    <input type="text" class="form-control" name="name_client" placeholder="Informe o nome do cliente">
                  </div>
                  <div class="form-group">
                    <label>Site:</label>
                    <input type="text" class="form-control" name="site_client" placeholder="Ex.: http://www.empresa.com.br">
                  </div>
                  <div class="form-group">0
                    <label for="file">Logo:</label>                    
                    <input type="file" class="form-control" id="file-create" name="file">          
                      <div class="box-body">
                        <img class="img-responsive" id="image-preview-create" src="/res/assets/img/clients/default.png" alt="Logo">
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
      
      <!-- MODAL Update Client -->  
      <div class="modal fade" id="modalClientUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Editar cliente </h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/client/update" enctype="multipart/form-data">                                  
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome do cliente:</label>
                    <input type="text" class="form-control" name="name_client" id="name_client" placeholder="Informe o nome do cliente">
                  </div>
                  <div class="form-group">
                    <label>Site:</label>
                    <input type="text" class="form-control" name="site_client" id="site_client" placeholder="Informe o site">
                  </div>
                  <div class="form-group">
                    <label for="file">Logo:</label>                    
                    <input type="file" class="form-control" id="file-update" name="file">          
                      <div class="box-body">
                        <img class="img-responsive" id="image-preview-update" alt="Logo">
                      </div>              
                  </div> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Atualizar</button>
                </div>   
                <input type="hidden" name="id_client" id="id_client" placeholder="Informe o nome do cliente">          
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>

  scripts.push(function(){

    // Função para prencher os campos do modalClientUpdate 
    $('#modalClientUpdate').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var idClient = button.data('id_client');// Extract info from data-* attributes
      var nameClient = button.data('name_client');
      var siteClient = button.data('site_client');
      
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('#id_client').val(idClient);
      modal.find('#name_client').val(nameClient);
      modal.find('#site_client').val(siteClient);
		  modal.find('#image-preview-update').attr('src', "/res/assets/img/clients/client-"+idClient+".png");
	  });

    // Função para prencher os campos do modalSkillUpdade  
    $('#modalSkillUpdade').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var idSkill = button.data('id_skill');// Extract info from data-* attributes
      var nameSkill = button.data('name_skill');
      var valueSkill = button.data('value_skill');
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('#id_skill').val(idSkill);
      modal.find('#name_skill').val(nameSkill);
      modal.find('#value_skill').val(valueSkill);      
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