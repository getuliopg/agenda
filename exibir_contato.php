<?php
$inicial= $_REQUEST['contato'];

$busca = mysqli_query($con, "select * from agenda where cod_contato = '$inicial'" ) or trigger_error('Erro ao executar consutla. Detalhes = ' . mysqli_error());
$dados = mysqli_fetch_array($busca);

?>


<div class="row" >

  <form class="form-horizontal"  >

    <div class="form-group">
      <label>Código</label>
      <input type="text" class="form-control" id="disabledInput" name="cod_contato" value="<?php echo $dados['cod_contato']; ?>" autofocus required disabled>
    </div>
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" id="disabledInput" name="nome" placeholder="Nome" value="<?php echo $dados['nome']; ?>" autofocus required disabled>
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" id="disabledInput" name="email" placeholder="exemplo@exemplo.com.br" value="<?php echo $dados['email']; ?>" required disabled>
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="tel" class="form-control" id="disabledInput" name="telefone" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$" placeholder="(00) 0000-0000" value="<?php echo $dados['telefone']; ?>" disabled>
    </div>
    
                    </form>
                  </div>