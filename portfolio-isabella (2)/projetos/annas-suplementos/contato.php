<?php
include 'header.php';

$msg_ok = false;
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome  = trim($_POST['nome'] ?? '');
  $email = trim($_POST['email'] ?? '');
  $assunto = trim($_POST['assunto'] ?? '');
  $mensagem = trim($_POST['mensagem'] ?? '');

  if (empty($nome))     $errors[] = 'Nome é obrigatório.';
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'E-mail inválido.';
  if (empty($mensagem)) $errors[] = 'Mensagem é obrigatória.';

  if (empty($errors)) {
    // Aqui enviaria e-mail / salvaria no banco
    $msg_ok = true;
  }
}
?>

<style>
  .page-hero {
    background: linear-gradient(135deg, var(--plum), #6B2CB8);
    padding: 4rem 5vw 3rem;
    text-align: center;
  }
  .page-hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.2rem);
    color: #fff; font-weight: 900; margin-bottom: .8rem;
  }
  .page-hero p { color: var(--lilac); }

  .contact-layout {
    display: grid;
    grid-template-columns: 1fr 1.6fr;
    gap: 3rem;
    padding: 4rem 5vw;
    max-width: 1100px;
    margin: 0 auto;
  }
  @media(max-width:700px){ .contact-layout { grid-template-columns: 1fr; } }

  /* INFO COLUMN */
  .info-col h2 {
    font-family: 'Playfair Display', serif;
    font-size: 1.7rem;
    color: var(--plum);
    margin-bottom: 1rem;
  }
  .info-col p { color: #6B5B8A; line-height: 1.7; margin-bottom: 1.5rem; font-size: .95rem; }
  .info-item {
    display: flex; align-items: flex-start; gap: 1rem;
    margin-bottom: 1.4rem;
    padding: 1rem 1.2rem;
    border-radius: 14px;
    background: var(--blush);
    border-left: 3px solid var(--lavender);
  }
  .info-item .ico { font-size: 1.4rem; flex-shrink: 0; }
  .info-item strong { display: block; color: var(--plum); font-size: .85rem; font-weight: 600; margin-bottom: .2rem; }
  .info-item span { color: #7B6B9A; font-size: .9rem; }
  .social-row { display: flex; gap: .8rem; margin-top: 1.5rem; }
  .social-btn {
    width: 44px; height: 44px;
    border-radius: 50%;
    background: var(--violet);
    color: #fff;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.1rem;
    text-decoration: none;
    transition: transform .2s, background .2s;
  }
  .social-btn:hover { background: var(--plum); transform: scale(1.1); }

  /* FORM COLUMN */
  .form-card {
    background: #fff;
    border-radius: 24px;
    padding: 2.5rem;
    box-shadow: 0 8px 40px rgba(91,31,168,.12);
    border: 1px solid #EDE0FF;
  }
  .form-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    color: var(--plum);
    margin-bottom: 1.6rem;
  }
  .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
  @media(max-width:500px){ .form-row { grid-template-columns: 1fr; } }

  .field { margin-bottom: 1.2rem; }
  .field label {
    display: block;
    font-size: .82rem;
    font-weight: 600;
    color: var(--plum);
    letter-spacing: .04em;
    text-transform: uppercase;
    margin-bottom: .45rem;
  }
  .field input,
  .field select,
  .field textarea {
    width: 100%;
    padding: .75rem 1rem;
    border: 2px solid #EDE0FF;
    border-radius: 10px;
    font-family: 'DM Sans', sans-serif;
    font-size: .95rem;
    color: var(--text);
    background: #FAF8FF;
    transition: border-color .2s, box-shadow .2s;
    outline: none;
    resize: vertical;
  }
  .field input:focus,
  .field select:focus,
  .field textarea:focus {
    border-color: var(--lavender);
    box-shadow: 0 0 0 4px rgba(155,89,212,.12);
    background: #fff;
  }
  .field textarea { min-height: 130px; }

  .alert {
    padding: 1rem 1.2rem;
    border-radius: 10px;
    margin-bottom: 1.2rem;
    font-size: .9rem;
    font-weight: 500;
  }
  .alert-success { background: #EDFAF3; color: #1A7A44; border-left: 4px solid #2ECC71; }
  .alert-error   { background: #FFF0F0; color: #C0392B; border-left: 4px solid #E74C3C; }
</style>

<div class="page-hero">
  <div class="tag" style="background:rgba(200,155,238,.18);color:var(--lilac);">Fale com a gente</div>
  <h1>Entre em Contato</h1>
  <p>Estamos aqui para ajudar com dúvidas, pedidos e consultoria.</p>
</div>

<div class="contact-layout">

  <!-- INFO -->
  <div class="info-col">
    <h2>Anna's Suplementos</h2>
    <p>Atendimento especializado de segunda a sábado. Nossa equipe está pronta para te orientar na escolha ideal dos suplementos.</p>

    <div class="info-item">
      <span class="ico">📍</span>
      <div>
        <strong>Endereço</strong>
        <span>Av. Paulista, 1500 – Bela Vista<br>São Paulo – SP, 01310-200</span>
      </div>
    </div>
    <div class="info-item">
      <span class="ico">📞</span>
      <div>
        <strong>Telefone / WhatsApp</strong>
        <span>(11) 9 9876-5432</span>
      </div>
    </div>
    <div class="info-item">
      <span class="ico">✉️</span>
      <div>
        <strong>E-mail</strong>
        <span>contato@annassuplementos.com.br</span>
      </div>
    </div>
    <div class="info-item">
      <span class="ico">🕐</span>
      <div>
        <strong>Horário de Atendimento</strong>
        <span>Seg – Sex: 8h às 18h<br>Sábado: 9h às 14h</span>
      </div>
    </div>

    <div class="social-row">
      <a class="social-btn" href="#" title="Instagram">📸</a>
      <a class="social-btn" href="#" title="WhatsApp">💬</a>
      <a class="social-btn" href="#" title="Facebook">👤</a>
    </div>
  </div>

  <!-- FORM -->
  <div class="form-card">
    <h3>Envie sua mensagem</h3>

    <?php if($msg_ok): ?>
      <div class="alert alert-success">✅ Mensagem enviada com sucesso! Em breve entraremos em contato.</div>
    <?php endif; ?>

    <?php if(!empty($errors)): ?>
      <div class="alert alert-error">
        <?php foreach($errors as $e): ?>⚠️ <?= htmlspecialchars($e) ?><br><?php endforeach; ?>
      </div>
    <?php endif; ?>

    <?php if(!$msg_ok): ?>
    <form method="POST" action="contato.php">
      <div class="form-row">
        <div class="field">
          <label>Nome *</label>
          <input type="text" name="nome" placeholder="Seu nome" value="<?= htmlspecialchars($_POST['nome']??'') ?>">
        </div>
        <div class="field">
          <label>E-mail *</label>
          <input type="email" name="email" placeholder="seu@email.com" value="<?= htmlspecialchars($_POST['email']??'') ?>">
        </div>
      </div>
      <div class="field">
        <label>Assunto</label>
        <select name="assunto">
          <option>Dúvida sobre produto</option>
          <option>Pedido / Compra</option>
          <option>Consultoria nutricional</option>
          <option>Parceria / Revendedor</option>
          <option>Outro</option>
        </select>
      </div>
      <div class="field">
        <label>Mensagem *</label>
        <textarea name="mensagem" placeholder="Como podemos te ajudar?"><?= htmlspecialchars($_POST['mensagem']??'') ?></textarea>
      </div>
      <button type="submit" class="btn btn-primary" style="width:100%;padding:.9rem;font-size:1rem;">
        Enviar Mensagem →
      </button>
    </form>
    <?php endif; ?>
  </div>

</div>

<?php include 'footer.php'; ?>
