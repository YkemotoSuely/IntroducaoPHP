

<?php
$estados = [
    ["uf" => "AC", "nome" => "Acre"],
    ["uf" => "AL", "nome" => "Alagoas"],
    // ... (demais estados)
    ["uf" => "TO", "nome" => "Tocantins"],
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Estados do Brasil</title>
</head>
<body>
  <h1>UF e Estados</h1>
  <table border="1" cellpadding="6">
    <thead>
      <tr><th>UF</th><th>Estado</th></tr>
    </thead>
    <tbody>
      <?php foreach ($estados as $estado): ?>
        <tr>
          <td><?= htmlspecialchars($estado["uf"]) ?></td>
          <td><?= htmlspecialchars($estado["nome"]) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

