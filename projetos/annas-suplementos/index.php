<?php include 'header.php'; ?>

<style>
  /* HERO */
  .hero {
    min-height: 88vh;
    background: linear-gradient(135deg, var(--plum) 0%, #4A1280 55%, var(--violet) 100%);
    display: flex; align-items: center;
    padding: 4rem 5vw;
    position: relative;
    overflow: hidden;
  }
  .hero::before {
    content: '';
    position: absolute; inset: 0;
    background: radial-gradient(ellipse 60% 70% at 80% 50%, rgba(155,89,212,.25) 0%, transparent 70%);
  }
  .hero-orb {
    position: absolute;
    right: 8vw; top: 50%;
    transform: translateY(-50%);
    width: clamp(260px, 38vw, 500px);
    aspect-ratio: 1;
    background: radial-gradient(circle, rgba(200,155,238,.18) 0%, rgba(91,31,168,.12) 60%, transparent 100%);
    border: 1px solid rgba(200,155,238,.2);
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    animation: pulse 4s ease-in-out infinite;
  }
  .hero-orb::after {
    content: '💜';
    font-size: clamp(4rem, 10vw, 8rem);
    filter: drop-shadow(0 0 40px rgba(155,89,212,.7));
  }
  @keyframes pulse {
    0%,100% { transform: translateY(-50%) scale(1); opacity:.9; }
    50%      { transform: translateY(-52%) scale(1.04); opacity:1; }
  }
  .hero-content {
    max-width: 560px;
    position: relative; z-index: 1;
  }
  .hero-tag {
    display: inline-block;
    background: rgba(200,155,238,.18);
    color: var(--lilac);
    border: 1px solid rgba(200,155,238,.3);
    font-size: .75rem;
    font-weight: 600;
    letter-spacing: .12em;
    text-transform: uppercase;
    padding: .35rem 1rem;
    border-radius: 50px;
    margin-bottom: 1.4rem;
  }
  .hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.4rem, 6vw, 4.2rem);
    font-weight: 900;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 1.2rem;
  }
  .hero h1 em { color: var(--gold); font-style: normal; }
  .hero p {
    color: var(--lilac);
    font-size: 1.05rem;
    line-height: 1.7;
    margin-bottom: 2rem;
    max-width: 440px;
  }
  .hero-ctas { display: flex; gap: 1rem; flex-wrap: wrap; }

  /* BENEFÍCIOS */
  .benefits {
    padding: 5rem 5vw;
    background: var(--blush);
  }
  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 2rem;
    margin-top: 3rem;
  }
  .benefit-card {
    background: #fff;
    border-radius: 16px;
    padding: 2rem 1.5rem;
    border-left: 4px solid var(--lavender);
    box-shadow: 0 4px 20px rgba(91,31,168,.08);
    transition: transform .2s, box-shadow .2s;
  }
  .benefit-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 30px rgba(91,31,168,.15);
  }
  .benefit-icon { font-size: 2.2rem; margin-bottom: 1rem; }
  .benefit-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.15rem;
    color: var(--plum);
    margin-bottom: .5rem;
  }
  .benefit-card p { font-size: .9rem; color: #6B5B8A; line-height: 1.6; }

  /* DESTAQUES */
  .featured {
    padding: 5rem 5vw;
  }
  .featured-header {
    display: flex; align-items: flex-end; justify-content: space-between;
    margin-bottom: 2.5rem;
    flex-wrap: wrap; gap: 1rem;
  }
  .products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 1.5rem;
  }
  .product-card {
    border-radius: 18px;
    overflow: hidden;
    border: 1px solid var(--blush);
    transition: transform .2s, box-shadow .2s;
    background: #fff;
  }
  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 16px 40px rgba(91,31,168,.15);
  }
  .product-img {
    height: 180px;
    display: flex; align-items: center; justify-content: center;
    font-size: 4rem;
  }
  .product-img.p1 { background: linear-gradient(135deg, #3D0F6B, #7B35C8); }
  .product-img.p2 { background: linear-gradient(135deg, #1A0A4E, #5B1FA8); }
  .product-img.p3 { background: linear-gradient(135deg, #4A0E7A, #9B3DD4); }
  .product-body { padding: 1.2rem 1.4rem 1.5rem; }
  .product-body h4 {
    font-family: 'Playfair Display', serif;
    font-size: 1.05rem;
    color: var(--plum);
    margin-bottom: .3rem;
  }
  .product-body .desc { font-size: .85rem; color: #7B6B9A; margin-bottom: .9rem; }
  .product-body .price {
    font-size: 1.3rem;
    font-weight: 700;
    color: var(--violet);
    margin-bottom: .8rem;
  }
  .product-body .price small { font-size: .75rem; color: #999; font-weight: 400; }

  /* BANNER CTA */
  .cta-banner {
    margin: 0 5vw;
    background: linear-gradient(120deg, var(--plum), var(--violet));
    border-radius: 24px;
    padding: 3.5rem 4vw;
    display: flex; align-items: center; justify-content: space-between;
    gap: 2rem; flex-wrap: wrap;
    position: relative; overflow: hidden;
  }
  .cta-banner::after {
    content: '✨';
    position: absolute; right: 4rem; top: 50%;
    transform: translateY(-50%);
    font-size: 6rem; opacity: .1;
  }
  .cta-banner h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(1.5rem, 3vw, 2rem);
    color: #fff;
    max-width: 500px;
  }
  .cta-banner h2 span { color: var(--gold); }
</style>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-tag">✦ Suplementação Premium</div>
    <h1>Potencialize seu <em>desempenho</em> com Anna's</h1>
    <p>Produtos selecionados com rigor científico para quem leva a sério saúde, estética e performance. Da prateleira ao seu treino.</p>
    <div class="hero-ctas">
      <a href="produtos.php" class="btn btn-gold">Ver Produtos</a>
      <a href="contato.php" class="btn btn-outline" style="color:var(--lilac);border-color:var(--lilac);">Fale Conosco</a>
    </div>
  </div>
  <div class="hero-orb"></div>
</section>

<!-- BENEFÍCIOS -->
<section class="benefits">
  <div style="text-align:center;max-width:600px;margin:0 auto;">
    <div class="tag">Por que escolher a Anna's?</div>
    <h2 class="section-title">Qualidade que você <br>sente na diferença</h2>
  </div>
  <div class="benefits-grid">
    <div class="benefit-card">
      <div class="benefit-icon">🧬</div>
      <h3>Fórmulas Certificadas</h3>
      <p>Todos os produtos com laudos laboratoriais e certificação de qualidade nacional e importada.</p>
    </div>
    <div class="benefit-card">
      <div class="benefit-icon">🚚</div>
      <h3>Entrega Rápida</h3>
      <p>Enviamos para todo o Brasil com rastreamento em tempo real e embalagem especial.</p>
    </div>
    <div class="benefit-card">
      <div class="benefit-icon">💬</div>
      <h3>Consultoria Grátis</h3>
      <p>Nossa equipe especializada orienta você na escolha ideal para seus objetivos.</p>
    </div>
    <div class="benefit-card">
      <div class="benefit-icon">🔄</div>
      <h3>Troca Garantida</h3>
      <p>Não ficou satisfeito? Troca sem burocracia em até 30 dias após a compra.</p>
    </div>
  </div>
</section>

<!-- DESTAQUES -->
<section class="featured">
  <div class="featured-header">
    <div>
      <div class="tag">Mais Vendidos</div>
      <h2 class="section-title">Produtos em Destaque</h2>
    </div>
    <a href="produtos.php" class="btn btn-outline">Ver todos →</a>
  </div>
  <div class="products-grid">
    <div class="product-card">
      <div class="product-img p1">🥛</div>
      <div class="product-body">
        <h4>Whey Protein Gold</h4>
        <p class="desc">Concentrado 80% • 900g • Baunilha</p>
        <div class="price">R$ 149,90 <small>à vista</small></div>
        <a href="produtos.php" class="btn btn-primary" style="width:100%;text-align:center;padding:.6rem">Comprar</a>
      </div>
    </div>
    <div class="product-card">
      <div class="product-img p2">⚡</div>
      <div class="product-body">
        <h4>Creatina Monohidratada</h4>
        <p class="desc">300g • Sem sabor • Importada</p>
        <div class="price">R$ 89,90 <small>à vista</small></div>
        <a href="produtos.php" class="btn btn-primary" style="width:100%;text-align:center;padding:.6rem">Comprar</a>
      </div>
    </div>
    <div class="product-card">
      <div class="product-img p3">🌿</div>
      <div class="product-body">
        <h4>Colágeno + Vitamina C</h4>
        <p class="desc">60 cápsulas • Pele e articulações</p>
        <div class="price">R$ 59,90 <small>à vista</small></div>
        <a href="produtos.php" class="btn btn-primary" style="width:100%;text-align:center;padding:.6rem">Comprar</a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<div class="cta-banner">
  <h2>Primeira compra com <span>10% de desconto</span> — use o cupom ANNA10</h2>
  <a href="contato.php" class="btn btn-gold">Quero desconto</a>
</div>

<?php include 'footer.php'; ?>
