<?php $render('header'); ?>

<h2>Adicionar usuário</h2>

<form action="<?php echo $base?>/novo" method="post">
  <label for="">
    Nome:
    <input type="text" name="name">
  </label>

  <label for="">
    Email:
    <input type="email" name="email">
  </label>

  <input type="submit" value="Adicionar">


</form>

<?php $render('footer'); ?>
