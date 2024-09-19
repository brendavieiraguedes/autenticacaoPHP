<?php
// Configurações de conexão com o banco de dados
$host = 'www.thyagoquintas.com.br'; // Host do banco de dados
$db = 'engenharia_15'; // Nome do banco de dados
$user = 'engenharia_15'; // Usuário do banco de dados
$pass = 'formigaleao'; // Senha do banco de dados
$charset = 'utf8mb4';

// Configuração do DSN
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

try {
    // Conexão com o banco de dados
    $pdo = new PDO($dsn, $user, $pass, $options);
    
    echo "Conexão bem-sucedida!"; // Mensagem de sucesso

} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage(); // Mensagem de erro
    exit;
}
?>
