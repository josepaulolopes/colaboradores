<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title id="titulo-pagina">Colaborador</title>

  <!-- Open Graph (atualizado via JS) -->
  <meta property="og:locale" content="pt_BR" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="" id="og-title" />
  <meta property="og:description" content="" id="og-desc" />
  <meta property="og:url" content="" id="og-url" />
  <meta property="og:image" content="" id="og-img" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/jpeg" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <h1 id="titulo"></h1>
  <img id="foto" src="" alt="Foto do colaborador" style="max-width: 300px;" />
  <p id="descricao"></p>

  <script>
    const url = new URL(window.location.href);
    const id = url.searchParams.get("id") || "default";
    const imgUrl = `imagens/${id}.jpg`;
    const paginaUrl = window.location.href;

    const titulo = `Colaborador #${id}`;
    const descricao = `Informações e dados do colaborador número ${id}.`;

    // Preencher conteúdo da página
    document.getElementById("titulo-pagina").textContent = titulo;
    document.getElementById("titulo").textContent = titulo;
    document.getElementById("descricao").textContent = descricao;
    document.getElementById("foto").src = imgUrl;
    document.getElementById("foto").alt = `Foto do colaborador #${id}`;

    // Atualizar Open Graph dinamicamente (alguns bots não leem JS, mas funciona no GitHub Pages como fallback)
    document.getElementById("og-title").setAttribute("content", titulo);
    document.getElementById("og-desc").setAttribute("content", descricao);
    document.getElementById("og-url").setAttribute("content", paginaUrl);
    document.getElementById("og-img").setAttribute("content", imgUrl);
  </script>
</body>
</html>
