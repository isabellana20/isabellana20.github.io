<?php
session_start();
include 'header.php';

$pedido = false;

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['carrinho'] = [];
    $pedido = true;
}
?>

<style>
.checkout{
max-width:700px;
margin:3rem auto;
padding:0 5vw;
}
.form-box{
background:#fff;
padding:2rem;
border-radius:20px;
border:1px solid #EDE0FF;
}
.field{
margin-bottom:1rem;
}
.field input, .field select{
width:100%;
padding:.8rem;
border-radius:10px;
border:1px solid #ccc;
}
</style>

<div class="checkout">
<h1 class="section-title">📦 Finalizar Pedido</h1>

<?php if($pedido): ?>
<div class="form-box">
<h2>✅ Pedido realizado com sucesso!</h2>
<p>Seu pedido será entregue em até 3 dias úteis.</p>
</div>
<?php else: ?>

<form method="POST" class="form-box">
<div class="field">
<label>Nome</label>
<input type="text" name="nome" required>
</div>

<div class="field">
<label>Endereço de Entrega</label>
<input type="text" name="endereco" required>
</div>

<div class="field">
<label>Cidade</label>
<input type="text" name="cidade" required>
</div>

<div class="field">
<label>Forma de Entrega</label>
<select name="entrega">
<option>Entrega Rápida</option>
<option>Retirada na Loja</option>
</select>
</div>

<button class="btn btn-primary">Confirmar Pedido</button>
</form>

<?php endif; ?>
</div>

<?php include 'footer.php'; ?>
