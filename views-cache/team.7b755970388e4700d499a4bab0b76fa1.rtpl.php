<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Team
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
                <h3 class="box-title">Description Text </h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <p>
                  <?php $counter1=-1;  if( isset($about_team) && ( is_array($about_team) || $about_team instanceof Traversable ) && sizeof($about_team) ) foreach( $about_team as $key1 => $value1 ){ $counter1++; ?>
                    <?php echo $value1["text_about"]; ?>
                  <?php } ?>
                </p>                
              </div>
              <div class="box-footer">                
                <button type="submit" class="btn btn-info pull-right" data-toggle="modal" data-target="#modalTextCreate"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit </button>                
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
              <h3 class="box-title">Team list</h3>              
              <button type="submit" class="btn btn-success btn-xs pull-right" data-toggle="modal" data-target="#modalTeamCreate"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add new team </button>                            
            </div>
            
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Function</th>
                    <th>Social midia</th>                  
                    <th>Action</th>  
                  </tr>
                  <tr>
                  <?php $counter1=-1;  if( isset($teams) && ( is_array($teams) || $teams instanceof Traversable ) && sizeof($teams) ) foreach( $teams as $key1 => $value1 ){ $counter1++; ?>  
                    <td><?php echo $value1["id_team"]; ?></td>
                    <td><img src="/res/assets/img/team/team-1.jpg" alt="User Image" class="img-circle img-sm"></td>
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
                    <?php if( ($value1["facebook_team"] && $value1["twitter_team"] && $value1["instagram_team"] && $value1["linkedin_team"])=='' ){ ?>
                      No social midias
                    <?php } ?>
                    </td>                  
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
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
              <h4 class="modal-title" id="exampleModalLabel">Description Text </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/about-team">
                <div class="box-body">
                  <div class="form-group">
                    <label>Text:</label>
                    <textarea class="form-control" id="text" name="text_about" rows="3">
                 

                    </textarea>
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

      <div class="modal fade" id="modalTeamCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel">Team Create </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/team" enctype="multipart/form-data">
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
                    <input type="file" class="form-control" id="file" name="file">          
                      <div class="box-body">
                        <img class="img-responsive" id="image-preview" src="/res/assets/img/team/default.png" alt="Photos">
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
    </section>
    <!-- /.content -->
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