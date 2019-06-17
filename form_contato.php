<div class="row">

  <form class="form-horizontal" name="agenda" action="dao/cad_contato.php" method="post" >
    <div class="form-group">
      <label>Nome</label>
      <input type="text" class="form-control" name="nome" placeholder="Nome" autofocus required>
    </div>
    <div class="form-group">
      <label>E-mail</label>
      <input type="email" class="form-control" name="email" placeholder="exemplo@exemplo.com.br" required>
    </div>
    <div class="form-group">
      <label>Telefone</label>
      <input type="tel" class="form-control" name="telefone" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}$" placeholder="(00) 0000-0000">
    </div>
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="reset" class="btn btn-primary">Limpar</button>

  </form>
</div>