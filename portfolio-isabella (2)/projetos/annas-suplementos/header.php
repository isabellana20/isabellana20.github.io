<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anna's Suplementos</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    :root {
      --plum:       #2D0A4E;
      --violet:     #5B1FA8;
      --lavender:   #9B59D4;
      --lilac:      #C89BEE;
      --blush:      #F0E6FF;
      --gold:       #D4A843;
      --white:      #FAF8FF;
      --text:       #1A0A2E;
    }

    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--white);
      color: var(--text);
      overflow-x: hidden;
    }

    /* NAV */
    nav {
      position: sticky; top: 0; z-index: 100;
      background: var(--plum);
      padding: 0 5vw;
      display: flex; align-items: center; justify-content: space-between;
      height: 70px;
      box-shadow: 0 2px 24px rgba(91,31,168,0.35);
    }

    .logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.6rem; font-weight: 900;
      color: var(--lilac);
      letter-spacing: 1px;
      text-decoration: none;
    }
    .logo span { color: var(--gold); }

    nav ul {
      list-style: none;
      display: flex; gap: 2rem;
    }

    nav ul a {
      text-decoration: none;
      color: var(--lilac);
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      padding-bottom: 4px;
      border-bottom: 2px solid transparent;
      transition: color .2s, border-color .2s;
    }

    nav ul a:hover,
    nav ul a.active {
      color: var(--gold);
      border-bottom-color: var(--gold);
    }

    /* FOOTER */
    footer {
      background: var(--plum);
      color: var(--lilac);
      text-align: center;
      padding: 2.5rem 5vw;
      font-size: 0.85rem;
      margin-top: 5rem;
    }
    footer strong { color: var(--gold); }

    /* SHARED UTILITIES */
    .btn {
      display: inline-block;
      padding: .75rem 2rem;
      border-radius: 50px;
      font-weight: 600;
      font-size: .9rem;
      letter-spacing: .04em;
      cursor: pointer;
      border: none;
      transition: transform .15s, box-shadow .15s;
      text-decoration: none;
    }
    .btn:hover { transform: translateY(-2px); box-shadow: 0 8px 24px rgba(91,31,168,.4); }
    .btn-primary { background: var(--violet); color: #fff; }
    .btn-outline { background: transparent; color: var(--violet); border: 2px solid var(--violet); }
    .btn-gold { background: var(--gold); color: var(--plum); }

    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 4vw, 2.8rem);
      font-weight: 700;
      color: var(--plum);
      line-height: 1.2;
    }
    .tag {
      display: inline-block;
      background: var(--blush);
      color: var(--violet);
      font-size: .75rem;
      font-weight: 600;
      letter-spacing: .1em;
      text-transform: uppercase;
      padding: .3rem .9rem;
      border-radius: 50px;
      margin-bottom: .8rem;
    }
  </style>
</head>
<body>

<nav>
  <a class="logo" href="index.php">Anna's <span>Sup.</span></a>
  <ul>
    <li><a href="index.php" <?= $current_page=='index.php' ? 'class="active"' : '' ?>>Início</a></li>
    <li><a href="produtos.php" <?= $current_page=='produtos.php' ? 'class="active"' : '' ?>>Produtos</a></li>
    <li><a href="contato.php" <?= $current_page=='contato.php' ? 'class="active"' : '' ?>>Contato</a></li>
  <li><a href="carrinho.php">Carrinho</a></li></ul>
</nav>
