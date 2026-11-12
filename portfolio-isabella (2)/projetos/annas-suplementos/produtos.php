<?php
session_start();

if(isset($_GET['add'])){
$produtos_lista = [
1 => ['nome'=>'Whey Protein Gold','preco'=>149.90],
2 => ['nome'=>'Whey Isolado Premium','preco'=>219.90],
3 => ['nome'=>'Creatina Monohidratada','preco'=>89.90],
4 => ['nome'=>'Pré-Treino Explosive','preco'=>99.90],
5 => ['nome'=>'Colágeno + Vitamina C','preco'=>59.90],
6 => ['nome'=>'ZMA Noturno','preco'=>49.90],
];

$id = (int)$_GET['add'];

if(isset($produtos_lista[$id])){
$_SESSION['carrinho'][] = $produtos_lista[$id];
}
}
?>

<?php include 'header.php'; ?>

<?php
$produtos = [
  ['emoji'=>'🥛','nome'=>'Whey Protein Gold','cat'=>'Proteínas','desc'=>'Concentrado 80% de proteína, ideal pós-treino. 25g de proteína por dose.','preco'=>'149,90','peso'=>'900g','sabores'=>['Baunilha','Chocolate','Morango'],'destaque'=>true],
  ['emoji'=>'🥩','nome'=>'Whey Isolado Premium','cat'=>'Proteínas','desc'=>'Proteína isolada de altíssima pureza. Zero lactose, zero gordura.','preco'=>'219,90','peso'=>'900g','sabores'=>['Natural','Chocolate'],'destaque'=>false],
  ['emoji'=>'⚡','nome'=>'Creatina Monohidratada','cat'=>'Performance','desc'=>'Creatina importada com grau farmacêutico. Aumenta força e massa.','preco'=>'89,90','peso'=>'300g','sabores'=>['Sem sabor'],'destaque'=>true],
  ['emoji'=>'🔥','nome'=>'Pré-Treino Explosive','cat'=>'Performance','desc'=>'Fórmula com cafeína, beta-alanina e citrulina para máximo foco.','preco'=>'99,90','peso'=>'300g','sabores'=>['Frutas Vermelhas','Limão'],'destaque'=>false],
  ['emoji'=>'🌿','nome'=>'Colágeno + Vitamina C','cat'=>'Saúde & Bem-estar','desc'=>'Colágeno hidrolisado com vitamina C para pele, cabelos e articulações.','preco'=>'59,90','peso'=>'60 cáps','sabores'=>['—'],'destaque'=>false],
  ['emoji'=>'🌙','nome'=>'ZMA Noturno','cat'=>'Saúde & Bem-estar','desc'=>'Zinco, magnésio e vitamina B6 para recuperação muscular noturna.','preco'=>'49,90','peso'=>'60 cáps','sabores'=>['—'],'destaque'=>false],
];
$categorias = ['Todos','Proteínas','Performance','Saúde & Bem-estar'];
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
    color: #fff;
    font-weight: 900;
    margin-bottom: .8rem;
  }
  .page-hero p { color: var(--lilac); font-size: 1rem; }

  .filters {
    display: flex; gap: .75rem; flex-wrap: wrap;
    justify-content: center;
    padding: 2.5rem 5vw 1rem;
  }
  .filter-btn {
    padding: .5rem 1.4rem;
    border-radius: 50px;
    border: 2px solid var(--lavender);
    background: transparent;
    color: var(--violet);
    font-weight: 600;
    font-size: .85rem;
    cursor: pointer;
    transition: all .2s;
    font-family: 'DM Sans', sans-serif;
  }
  .filter-btn.active, .filter-btn:hover {
    background: var(--violet);
    color: #fff;
    border-color: var(--violet);
  }

  .products-container {
    padding: 2rem 5vw 4rem;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 1.8rem;
  }

  .card {
    border-radius: 20px;
    overflow: hidden;
    background: #fff;
    border: 1px solid #EDE0FF;
    box-shadow: 0 2px 12px rgba(91,31,168,.07);
    transition: transform .25s, box-shadow .25s;
    display: flex; flex-direction: column;
  }
  .card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(91,31,168,.18);
  }
  .card-img {
    height: 170px;
    display: flex; align-items: center; justify-content: center;
    font-size: 4.5rem;
    background: linear-gradient(135deg, var(--plum), var(--violet));
    position: relative;
  }
  .badge-destaque {
    position: absolute; top: .8rem; right: .8rem;
    background: var(--gold);
    color: var(--plum);
    font-size: .65rem;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: .25rem .7rem;
    border-radius: 50px;
  }
  .card-body {
    padding: 1.4rem;
    flex: 1;
    display: flex; flex-direction: column;
  }
  .card-cat {
    font-size: .72rem;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--lavender);
    margin-bottom: .4rem;
  }
  .card-body h3 {
    font-family: 'Playfair Display', serif;
    font-size: 1.1rem;
    color: var(--plum);
    margin-bottom: .5rem;
  }
  .card-body p { font-size: .875rem; color: #7B6B9A; line-height: 1.55; flex: 1; }
  .card-meta {
    display: flex; gap: .6rem; flex-wrap: wrap;
    margin: .9rem 0;
  }
  .meta-pill {
    background: var(--blush);
    color: var(--violet);
    font-size: .75rem;
    padding: .2rem .7rem;
    border-radius: 50px;
  }
  .card-footer {
    display: flex; align-items: center; justify-content: space-between;
    margin-top: auto; padding-top: 1rem;
    border-top: 1px solid #F0E6FF;
  }
  .price { font-size: 1.4rem; font-weight: 700; color: var(--violet); }
  .price small { font-size: .8rem; font-weight: 400; color: #aaa; }
</style>

<!-- HERO -->
<div class="page-hero">
  <div class="tag" style="background:rgba(200,155,238,.18);color:var(--lilac);">Catálogo Completo</div>
  <h1>Nossos Produtos</h1>
  <p>Suplementos selecionados para cada objetivo — do ganho muscular à saúde diária.</p>
</div>

<!-- FILTROS -->
<div class="filters">
  <?php foreach($categorias as $i => $cat): ?>
    <button class="filter-btn <?= $i===0?'active':'' ?>" onclick="filtrar(this,'<?= $cat ?>')"><?= $cat ?></button>
  <?php endforeach; ?>
</div>

<!-- PRODUTOS -->
<div class="products-container" id="grid">
  <?php foreach($produtos as $p): ?>
    <div class="card" data-cat="<?= $p['cat'] ?>">
      <div class="card-img">
        <?= $p['emoji'] ?>
        <?php if($p['destaque']): ?><span class="badge-destaque">⭐ Destaque</span><?php endif; ?>
      </div>
      <div class="card-body">
        <div class="card-cat"><?= $p['cat'] ?></div>
        <h3><?= $p['nome'] ?></h3>
        <p><?= $p['desc'] ?></p>
        <div class="card-meta">
          <span class="meta-pill">📦 <?= $p['peso'] ?></span>
          <?php foreach($p['sabores'] as $s): if($s!=='—'): ?>
            <span class="meta-pill">🍫 <?= $s ?></span>
          <?php endif; endforeach; ?>
        </div>
        <div class="card-footer">
          <div class="price">R$ <?= $p['preco'] ?><br><small>à vista</small></div>
          <a href="produtos.php?add=1" class="btn btn-primary">Adicionar</a>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<script>
function filtrar(btn, cat) {
  document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.card').forEach(c => {
    c.style.display = (cat === 'Todos' || c.dataset.cat === cat) ? '' : 'none';
  });
}
</script>

<?php include 'footer.php'; ?>
