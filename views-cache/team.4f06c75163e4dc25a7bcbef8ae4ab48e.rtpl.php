<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Equipe
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Team</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">          
            <div class="box box-solid">
              <div class="box-header with-border">
                <i class="fa fa-text-width"></i>  
                <h3 class="box-title">Texto de descrição </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <p>
                  <?php echo $aboutTeam["text_about"]; ?>
                </p>                
              </div>
              <div class="box-footer">                
                <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalTextCreate"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar </button>                
              </div>              
            </div>
                     
          </div>
         
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Lista equipe</h3>              
              <button type="submit" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#modalTeamCreate"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add nova equipe </button>                            
            </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Função</th>
                    <th>Mídias Sociais </th>                  
                    <th>Ação</th>  
                  </tr>
                  <tr>
                  <?php $counter1=-1;  if( isset($teams) && ( is_array($teams) || $teams instanceof Traversable ) && sizeof($teams) ) foreach( $teams as $key1 => $value1 ){ $counter1++; ?>  
                    <td><?php echo $value1["id_team"]; ?></td>
                    <td><img src="/res/assets/img/team/team-<?php echo $value1["id_team"]; ?>.jpg" alt="User Image" class="img-circle img-sm"></td>
                    <td><?php echo $value1["name_team"]; ?></td>
                    <td><?php echo $value1["function_team"]; ?></td>
                    <td>
                    <?php if( ($value1["facebook_team"])=='' ){ ?>
                    <?php }else{ ?>
                      <a href="<?php echo $value1["facebook_team"]; ?>" target="_blank" class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                    <?php } ?>
                    <?php if( ($value1["twitter_team"])=='' ){ ?>
                    <?php }else{ ?>
                      <a href="<?php echo $value1["twitter_team"]; ?>" target="_blank" class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    <?php } ?>
                    <?php if( ($value1["instagram_team"])=='' ){ ?>
                    <?php }else{ ?>
                      <a href="<?php echo $value1["instagram_team"]; ?>" target="_blank" class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                    <?php } ?>
                    <?php if( ($value1["linkedin_team"])=='' ){ ?>
                    <?php }else{ ?>
                      <a href="<?php echo $value1["linkedin_team"]; ?>" target="_blank" class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                    <?php } ?>
                    <?php if( ($value1["facebook_team"])=='' && ($value1["twitter_team"])=='' && ($value1["instagram_team"])=='' && ($value1["linkedin_team"])=='' ){ ?>
                      Sem mídias sociais
                    <?php } ?>
                    </td>                  
                    <td>
                      <button type="button" class="btn btn-primary btn-xs view_data" data-toggle="modal" data-target="#modalTeamUpdate" data-id_team="<?php echo $value1["id_team"]; ?>" data-name_team="<?php echo $value1["name_team"]; ?>" data-function_team="<?php echo $value1["function_team"]; ?>" data-facebook_team="<?php echo $value1["facebook_team"]; ?>" data-twitter_team="<?php echo $value1["twitter_team"]; ?>" data-instagram_team="<?php echo $value1["instagram_team"]; ?>" data-linkedin_team="<?php echo $value1["linkedin_team"]; ?>">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Editar 
                      </button> 
                      <a href="/admin/team/<?php echo $value1["id_team"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box -->
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- Modal -->
      <div class="modal fade" id="modalTextCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Editar texto de descrição </h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/about-team">
                <div class="box-body">
                  <div class="form-group">
                    <label>Texto:</label>
                    <textarea class="form-control" id="text" name="text_about" rows="3"><?php echo $aboutTeam["text_about"]; ?></textarea>
                  </div>
                </div>
                <!-- /.box-body -->                  
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                  <button type="submit" class="btn btn-success">Atualizar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- 
        * Modal 
        ? Team Create
      -->
      <div class="modal fade" id="modalTeamCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"> <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="modal-title" id="exampleModalLabel">Nova equipe </h4>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/team-create" enctype="multipart/form-data">
                <div class="box-body">
                  <!-- Minimal style -->             
                  <!-- checkbox -->
                  <div class="box-body">
                    <div class="form-group">
                      <label>Nome:</label>
                      <input type="text" class="form-control" name="name_team" placeholder="Informe o nome ">
                    </div>
                    <div class="form-group">
                      <label>Função:</label>
                      <input type="text" class="form-control" name="function_team" placeholder="Informe a função">
                    </div>   
                  <div class="form-group">                
                    <label>
                      <input type="checkbox" id="check-facebook" data-toggle="collapse" data-target="#collapse-facebook" >
                      Deseja adcionar o link do Facebook? 
                    </label>
                    <div id="collapse-facebook" class="panel-collapse collapse">
                      <input type="text" class="form-control" id="link_facebook" name="link_facebook" placeholder="Informe o link da página">                
                    </div>
                  </div>
    
                  <div class="form-group">                
                    <label>
                      <input type="checkbox" class="minimals" id="check-twitter" data-toggle="collapse" data-target="#collapse-twitter">
                      Deseja adcionar o link do Twitter? 
                    </label>
                    <div id="collapse-twitter" class="panel-collapse collapse">
                      <input type="text" class="form-control" id="link_twitter" name="link_twitter" placeholder="Informe o link da página">
                    </div>
                  </div>  
    
                  <div class="form-group">                
                    <label>
                      <input type="checkbox" class="minimal-old" id="check-instagram" data-toggle="collapse" data-target="#collapse-instagram">
                      Deseja adcionar o link do Instagram? 
                    </label>
                    <div id="collapse-instagram" class="panel-collapse collapse">
                      <input type="text" class="form-control" id="link_instagram" name="link_instagram" placeholder="Informe o link da página">
                    </div>
                  </div>  
                  <div class="form-group">                
                    <label>
                      <input type="checkbox" class="minimal-old" id="check-linkedin" data-toggle="collapse" data-target="#collapse-linkedin">
                      Deseja adcionar o link do Linkedin? 
                    </label>
                    <div id="collapse-linkedin" class="panel-collapse collapse">
                      <input type="text" class="form-control" id="link_linkedin" name="link_linkedin" placeholder="Informe o link da página">
                    </div>
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

      <!-- 
        * Modal 
        ? Team Update
      -->
      <div class="modal fade" id="modalTeamUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">            
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="exampleModalLabel">Editar equipe </h4>
          </div>
          <div class="modal-body">
            <form method="post" action="/admin/team-update" enctype="multipart/form-data">
              <div class="box-body">
                <!-- Minimal style -->             
                <!-- checkbox -->
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="name_team" id="name_team" placeholder="Informe o nome ">
                  </div>
                  <div class="form-group">
                    <label>Função:</label>
                    <input type="text" class="form-control" name="function_team" id="function_team" placeholder="Informe a função">
                  </div>   
                <div class="form-group">                
                  <label>Link do Facebook:</label>                  
                  <input type="text" class="form-control" id="facebook_team" name="link_facebook" placeholder="Informe o link da página">
                </div>
  
                <div class="form-group">                
                  <label>Link do Twitter: </label>                  
                  <input type="text" class="form-control" id="twitter_team" name="link_twitter" placeholder="Informe o link da página">                  
                </div>  
  
                <div class="form-group">                
                  <label>Link do Instagram: </label>                  
                  <input type="text" class="form-control" id="instagram_team" name="link_instagram" placeholder="Informe o link da página">
                </div>  
                <div class="form-group">                
                  <label>Link do Linkedin: </label>                  
                  <input type="text" class="form-control" id="linkedin_team" name="link_linkedin" placeholder="Informe o link da página">                  
                </div>    
                <div class="form-group">
                  <label for="file">Foto:</label>                    
                  <input type="file" class="form-control" id="file-update" name="file">          
                    <div class="box-body">
                      <!-- <img class="img-responsive" id="image-preview" src="/res/assets/img/default.jpg" alt="Foto"> -->
                      <img class="img-responsive" id="image-preview-update" alt="Foto">
                    </div>              
                </div>      
              </div>
              <!-- /.box-body -->            
              </div>              
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Atualizar</button>
              </div>  
              <input type="hidden" id="id_team" name="id_team" >
            </form>
        </div>
      </div>
    </div>
      </div>
    </section>
    <!-- /.content -->
</div>

<script>

  scripts.push(function(){

    // Função para prencher os campos do modalTeamUpdate 
    $('#modalTeamUpdate').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget); // Button that triggered the modal
      var idTeam = button.data('id_team');// Extract info from data-* attributes
      var nameTeam = button.data('name_team');
      var functionTeam = button.data('function_team');
      var facebookTeam = button.data('facebook_team');
      var twitterTeam = button.data('twitter_team');
      var instagramTeam = button.data('instagram_team');
      var linkedinTeam = button.data('linkedin_team');

      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this);
      modal.find('#id_team').val(idTeam);      
      modal.find('#name_team').val(nameTeam);
      modal.find('#function_team').val(functionTeam);
      modal.find('#facebook_team').val(facebookTeam);
      modal.find('#twitter_team').val(twitterTeam);
      modal.find('#instagram_team').val(instagramTeam);
      modal.find('#linkedin_team').val(linkedinTeam);
      modal.find('#image-preview-update').attr('src', "/res/assets/img/team/team-"+idTeam);      
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