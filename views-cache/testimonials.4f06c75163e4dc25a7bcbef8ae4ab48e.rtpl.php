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
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCreate">Adcionar Contato</button>

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
                    <th>Empresa</th>
                    <th>Depoimento</th>                    
                    <th>Ação</th>    
                  </tr>
                  <tr>
                    <td>1</td>
                    <td><img src="/res/assets/img/testimonials/testimonials-2.jpg" alt="User Image" class="img-circle img-sm"></td>
                    <td>Renata Gomes</td>
                    <td>Registrada</td>
                    <td> Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</td>
                    <td>
                      <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Editar</a>
                      <a href="#" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                    </td>
                  </tr>
                  
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
              <h5 class="modal-title" id="exampleModalLabel">Adicionar Plano</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="/admin/pricing">
                <div class="box-body">
                  <div class="form-group">
                    <label>Plano:</label>
                    <input type="text" class="form-control" id="plan" name="plan" placeholder="Informe o nome do plano">
                  </div>
                  <div class="form-group">
                    <label>Valor:</label>
                    <input type="text" class="form-control" id="pricing" name="pricing" placeholder="Informe o valor">
                  </div>
                  <div class="form-group">
                    <label>Multiple</label>
                    <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                            style="width: 100%;">
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>              
                  </div>
                  <div class="form-group">
                    <label>Avançado:</label>
                    <select class="form-control" name="advanced">
                      <option value="">Selecione...</option>
                      <option value="Sim">Sim</option>
                      <option value="Não">Não</option>
                    </select>
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

