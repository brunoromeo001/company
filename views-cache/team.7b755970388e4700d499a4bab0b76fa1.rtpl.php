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
                  Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.
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
                <tbody><tr>
                  <th>ID</th>
                  <th>Photo</th>
                  <th>Name</th>
                  <th>Function</th>
                  <th>Social midia</th>                  
                  <th>Action</th>  
                </tr>
                <tr>
                  <td>1</td>
                  <td><img src="/res/assets/img/team/team-1.jpg" alt="User Image" class="img-circle img-sm"></td>
                  <td>John Doe</td>
                  <td>Chief Executive Officer</td>
                  <td>
                    <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                    <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                  </td>                  
                  <td>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                    <a href="#" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                  </td>
                </tr>
                
              </tbody></table>
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
              <form method="post" action="#">
                <div class="box-body">
                  <div class="form-group">
                    <label>Text:</label>
                    <textarea class="form-control" id="text" namee="text" rows="3"></textarea>
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
              <form method="post" action="#">
                <div class="box-body">
                  <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" id="plan" name="plan" placeholder="Informe o nome do plano">
                  </div>
                  <div class="form-group">
                    <label>Função:</label>
                    <input type="text" class="form-control" id="pricing" name="pricing" placeholder="Informe o valor">
                  </div>   
                  <div class="form-group">
                    <label>Social midia:</label>
                    <div class="form-group">
                      <label class="">
                        <div class="icheckbox_minimal-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" class="minimal" checked="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                      </label>
                      <label class="">
                        <div class="icheckbox_minimal-blue" style="position: relative;" aria-checked="false" aria-disabled="false"><input type="checkbox" class="minimal" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                      </label>
                      <label>
                        <div class="icheckbox_minimal-blue disabled" style="position: relative;" aria-checked="false" aria-disabled="true"><input type="checkbox" class="minimal" disabled="" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div>
                        Minimal skin checkbox
                      </label>
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
    </section>
    <!-- /.content -->
</div>
