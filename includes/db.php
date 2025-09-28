<?php
class Database
{
    private static ?Database $instance = null;
    private PDO $connection;

    private function __construct()
    {
        // Detect localhost
        $isLocal = $this->isLocalhost();

        // Pick correct env file
        $envPath = __DIR__ . '/../' . ($isLocal ? '.env-local' : '.env');

        if (!file_exists($envPath)) {
            die("Environment file not found: $envPath");
        }

        // Load .env file
        $lines = file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            if (strpos(trim($line), '#') === 0) continue;
            [$name, $value] = explode('=', $line, 2);
            putenv(trim($name) . '=' . trim($value));
        }

        $host = getenv('DB_HOST');
        $dbname = getenv('DB_NAME');
        $user = getenv('DB_USER');
        $pass = getenv('DB_PASS');

        try {
            $this->connection = new PDO(
                "mysql:host=$host;dbname=$dbname;charset=utf8",
                $user,
                $pass
            );
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    // ✅ Detect if page is running on localhost
    private function isLocalhost(): bool
    {
        $host = $_SERVER['HTTP_HOST'] ?? 'cli'; // handle CLI usage too
        return in_array($host, ['localhost', '127.0.0.1', '::1'], true);
    }

    // Singleton instance
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    // Get PDO connection
    public function getConnection(): PDO
    {
        return $this->connection;
    }
}
