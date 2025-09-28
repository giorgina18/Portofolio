<?php
class Utils
{
    /**
     * Retourneert de base URL van de project root (waar index.php is)
     */
    public static function baseUrl(string $path = ''): string
    {
        // protocol detectie
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];

        // Bepaal de root folder (waar index.php is)
        $projectFolder = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'])), '/');
        if ($projectFolder === '/') {
            $projectFolder = '';
        }

        // Basis URL opbouwen
        $url = $protocol . '://' . $host . $projectFolder;

        // Optioneel pad toevoegen
        if ($path) {
            $path = ltrim($path, '/');
            $url .= '/' . $path;
        }

        return $url;
    }

    public static function asset(string $path): string
    {
        return self::baseUrl($path);
    }

    public static function redirect(string $path): void
    {
        header('Location: ' . self::baseUrl($path));
        exit;
    }
}
