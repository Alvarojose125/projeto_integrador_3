<?php
// Criar uma consulta SQL
$sql = "SELECT * FROM produtos";

// Executar a consulta SQL e armazenar o resultado em uma variável
$result = $conn->query($sql);

// Verificar se há resultados
if ($result->num_rows > 0) {
  // Exibir os resultados em uma tabela HTML
  echo "<table>";
  echo "<tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]."</td><td>".$row["preco"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "Não foram encontrados resultados";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
