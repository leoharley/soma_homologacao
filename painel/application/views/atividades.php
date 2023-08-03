<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-users"></i> Cadastro de Atividades
      <small>Todas as tarefas em nosso painel</small>
    </h1>
  </section>
  <section class="content" style="height:800px">
    <div class="col-xs-12">
      <div class="text-right">
        <a class="btn btn-primary" href="<?php echo base_url(); ?>addNewTask">
          <i class="fa fa-plus"></i> Adicionar atividade</a>
      </div>
      <div class="box">
        <div class="box-header">
          <div class="box-tools">
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
            <div class="alert alert-danger alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('error'); ?>
            </div>
            <?php } ?>
            <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <?php echo $this->session->flashdata('success'); ?>
            </div>
            <?php } ?>
            <div class="panel-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th> ID </th>              
                    <th> Modalidade </th>
                    <Th> Localidade </th>
                    <Th> Data </th>
                    <th> Horário </th>
                    <th> Criado por</th>
                    <th style="width:150px"> Status </th>
                    <th> Data da criação </th>
                    <th> Ações </th> 
                  </tr>
                </thead>
                <tbody>
                  <?php
                      if(!empty($atividadesDados))
                      {
                          foreach($atividadesDados as $record)
                          {
                      ?>
                    <tr>
                      <td>
                        <?php echo $record->co_seq_cadastro_atividade ?>
                      </td>
                      <td>
                        <?php echo $record->ds_titulo ?>
                      </td>
                      <td>
                        <?php echo $record->ds_localidade ?>
                      </td>
                      <td>
                        <?php echo $record->dt_inicio ?>
                      </td>
                      <td>
                        <?php echo $record->nu_horario ?>
                      </td>

                      <td>
                        <?php echo $record->ds_nome ?>
                      </td>
                      <td>
                        <?php echo $record->ds_status ?>
                      </td>
                      <td>
                        <?php echo $record->dt_criacao ?>
                      </td>
                      <td class="text-center">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOldTask/'.$record->co_seq_cadastro_atividade; ?>" title="Editar">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <a class="btn btn-sm btn-danger deleteUser" href="<?php echo base_url().'deleteTask/'.$record->co_seq_cadastro_atividade; ?>" data-userid="<?php echo $record->co_seq_cadastro_atividade; ?>"
                          title="Deletar">
                          <i class="fa fa-trash"></i>
                        </a>
                        <a class="btn btn-sm btn-primary" href="<?= base_url().'endTask/'.$record->co_seq_cadastro_atividade; ?>" title="Finalizar tarefa">
                          <i class="fa fa-check-circle"></i>
                        </a>
                      </td>
                    </tr>
                    <?php
                          }
                      }
                      ?>
                </tbody>
              </table>
            </div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
</div>
</section>
</div>