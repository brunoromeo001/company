<?php if(!class_exists('Rain\Tpl')){exit;}?>  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Pricing
        <small>Lista de planos</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>        
        <li class="active">Pricing</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">     
      <!-- Default box -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista planos</h3>
              <div class="box-tools pull-right">
                <button type="submit" class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalPricingCreate"> 
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Add nova plano
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
         
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Plano</th>
                    <th>Valor</th>
                    <th>Detalhes</th>
                    <th>Avançado</th> 
                    <th>Ação</th> 
                  </tr>
                  <?php $counter1=-1;  if( isset($pricings) && ( is_array($pricings) || $pricings instanceof Traversable ) && sizeof($pricings) ) foreach( $pricings as $key1 => $value1 ){ $counter1++; ?> 
                  <tr>
                    <td><?php echo $value1["id_pricing"]; ?></td>
                    <td><?php echo $value1["plan"]; ?></td>
                    <td>R$ <?php echo $value1["pricing"]; ?> / Mês</td>
                    <td><?php echo $value1["deteils"]; ?> </td>
                    <td><?php echo $value1["advanced"]; ?></td>
                    <td>
                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalPricingUpdate"><i class="fa fa-edit"></i> Editar</button>
                      <a href="/admin/pricing/<?php echo $value1["id_pricing"]; ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Lista perguntas e respostas</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modalAskedCreate"> 
                  <i class="fa fa-plus" aria-hidden="true"></i> 
                  Add nova pergunta
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <tr>
                    <th>ID</th>
                    <th>Pergunta</th>
                    <th>Resposta</th>                    
                    <th>Ação</th> 
                  </tr>
                  <?php $counter1=-1;  if( isset($askeds) && ( is_array($askeds) || $askeds instanceof Traversable ) && sizeof($askeds) ) foreach( $askeds as $key1 => $value1 ){ $counter1++; ?> 
                  <tr>
                    <td><?php echo $value1["id_asked"]; ?></td>
                    <td><?php echo $value1["asked"]; ?></td>                                      
                    <td><?php echo $value1["answer"]; ?></td>
                    <td>
                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalAskedUpdate"><i class="fa fa-edit"></i> Editar</button>
                      <a href="#" onclick="return confirm('Deseja realmente excluir este registro?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
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
  
  <!-- Modal Pricing Create -->
  <div class="modal fade" id="modalPricingCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Adicionar Plano</h4>
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

  <!-- Modal Pricing Update -->
  <div class="modal fade" id="modalPricingUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Editar Plano</h4>
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

  <!-- Modal Asked Create -->
  <div class="modal fade" id="modalAskedCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Adicionar pergunta e resposta</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/asked-create">
            <div class="box-body">
              <div class="form-group">
                <label>Pergunta:</label>
                <input type="text" class="form-control" name="asked" placeholder="Informe o nome do plano">
              </div>
              <div class="form-group">
                <label>Resposta:</label>
                <textarea class="form-control" name="answer" cols="10" rows="3"></textarea>
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

  <!-- Modal Asked Update -->
  <div class="modal fade" id="modalAskedUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
          <h4 class="modal-title" id="exampleModalLabel">Editar pergunta e resposta</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="/admin/asked-update">
            <div class="box-body">
              <div class="form-group">
                <label>Pergunta:</label>
                <input type="text" class="form-control" id="asked" name="asked" placeholder="Informe o nome do plano">
              </div>
              <div class="form-group">
                <label>Resposta:</label>
                <textarea class="form-control" id="answer" name="answer" cols="10" rows="3"></textarea>
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

