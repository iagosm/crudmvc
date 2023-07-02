<?php $render('header'); ?>

<h2>Editar usuário</h2>

<form action="<?php echo $base?>/usuario/<?php echo $usuario['id']?>/editar" method="post">
  <label for="">
    Nome:
    <input type="text" name="name" value="<?php echo $usuario['nome'] ?>">
  </label>

  <label for="">
    Email:
    <input type="email" name="email" value="<?php echo $usuario['email'] ?>">
  </label>

  <input type="submit" value="Salvar">


</form>

<?php $render('footer'); ?>
