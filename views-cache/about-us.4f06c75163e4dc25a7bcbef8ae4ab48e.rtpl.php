<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        About us
        <small>Blank example to the fixed layout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">About us</li>
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
        <div class="col-md-6">
          <!-- Default box -->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Nossas habilidades</h3>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalTeamCreate"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add nova habilidade</button>                            

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
                  <tr>                  
                    <td>1</td>         
                    <td>HTML 5</td>                    
                    <td>100%</td>                    
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="#" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                
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
                <button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalTeamCreate"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Add novo cliente</button> 
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
                  <tr>                  
                    <td>1</td>         
                    <td><img src="/res/assets/img/clients/client-1.png" alt="User Image" class="img-circle img-sm"></td>             
                    <td>Myob</td>                    
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="#" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                
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