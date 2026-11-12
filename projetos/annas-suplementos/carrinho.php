<?php
session_start();
include 'header.php';

$carrinho = $_SESSION['carrinho'] ?? [];
$total = 0;
?>

<style>
.cart-container{
  max-width:1000px;
  margin:3rem auto;
  padding:0 5vw;
}
.cart-item{
  background:#fff;
  border:1px solid #EDE0FF;
  border-radius:18px;
  padding:1.2rem;
  margin-bottom:1rem;
  display:flex;
  justify-content:space-between;
  align-items:center;
}
.total-box{
  background:var(--plum);
  color:#fff;
  padding:2rem;
  border-radius:20px;
  margin-top:2rem;
}
</style>

<div class="cart-container">
<h1 class="section-title">🛒 Meu Carrinho</h1>

<?php if(empty($carrinho)): ?>
<p style="margin-top:2rem;">Seu carrinho está vazio.</p>
<?php else: ?>

<?php foreach($carrinho as $item): 
$total += $item['preco'];
?>
<div class="cart-item">
<div>
<h3><?= $item['nome'] ?></h3>
<p>R$ <?= number_format($item['preco'],2,',','.') ?></p>
</div>
</div>
<?php endforeach; ?>

<div class="total-box">
<h2>Total: R$ <?= number_format($total,2,',','.') ?></h2>
<br>
<a href="finalizar.php" class="btn btn-gold">Finalizar Pedido</a>
</div>

<?php endif; ?>
</div>

<?php include 'footer.php'; ?>
