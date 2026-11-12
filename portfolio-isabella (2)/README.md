# Portfólio · Isabella Ana Dutra de Sousa

Site pessoal feito com **HTML, CSS e JavaScript** puro, com visual inspirado no
[Hannah-Personal-Portfolio](https://github.com/codegenweb/Hannah-Personal-Portfolio)
(tema escuro, fonte Inter, destaque azul `#3FA2F6`, foto que se mistura ao fundo e animações de entrada).

🔗 **Acesse:** https://isabellana20.github.io

## Funcionalidades
- Layout responsivo (celular, tablet e computador) com menu lateral no celular
- Animações de entrada no topo e ao rolar a página
- Efeito de digitação com as áreas de atuação
- Projetos em destaque com galeria de telas (Anna's Suplementos e Dia das Crianças)
- Site do Dia das Crianças rodando ao vivo dentro do portfólio
- Outros repositórios carregados automaticamente da API do GitHub
- Botão para copiar o e-mail

## Estrutura
```
├── index.html
├── style.css
├── script.js
├── assets/
│   ├── isabella.jpg
│   └── projetos/            (capturas de tela dos projetos)
└── projetos/
    ├── annas-suplementos/   (código PHP da loja)
    └── dia-das-criancas/    (site completo, abre em /projetos/dia-das-criancas/)
```

## Como publicar no GitHub Pages
1. Crie um repositório chamado **`isabellana20.github.io`** (público).
2. Envie **todos** os arquivos desta pasta, com `index.html` na raiz (não dentro de outra pasta).
3. Vá em **Settings → Pages**, em *Source* escolha **Deploy from a branch**, branch **main**, pasta **/ (root)** e salve.
4. Em 1–2 minutos o site estará no ar em `https://isabellana20.github.io`.

Pelo terminal:
```bash
git init
git add .
git commit -m "Portfólio"
git branch -M main
git remote add origin https://github.com/isabellana20/isabellana20.github.io.git
git push -u origin main
```

> **Obs.:** o GitHub Pages não executa PHP. Por isso, o projeto Anna's Suplementos aparece no portfólio
> com as telas e o código. Para rodá-lo localmente: `cd projetos/annas-suplementos && php -S localhost:8000`.
