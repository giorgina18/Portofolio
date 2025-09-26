<?php
class Utils
{
    /**   retourneert de base URL of de project root (waar index.php is)
     * @param string 
     * @return string
     */
    public static function baseUrl(string $path = ''): string
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];

        // Forceer de project root folder
        $projectFolder = '/portofolio';

        $url = $protocol . '://' . $host . $projectFolder;

        if ($path) {
            $path = ltrim($path, '/');
            $url .= '/' . $path;
        }
        return $url;
    }

    //   URL ophalen voor assets (CSS, JS, images)
     
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
