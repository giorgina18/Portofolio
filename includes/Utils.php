<?php
class Utils
{
    // Define your project folder names here
    const LOCAL_PROJECT_FOLDER = 'portofolio';  // Change this to your local project folder name
    const LIVE_PROJECT_FOLDER = ''; // Live server folder name
    
    /**
     * Retourneert de base URL van de project root
     */
    public static function baseUrl(string $path = ''): string
    {
        // Protocol detectie
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
        $host = $_SERVER['HTTP_HOST'];

        // Base URL samenstellen
        $url = $protocol . '://' . $host;
        
        // Check if we're on localhost/development environment
        if (self::isLocalhost()) {
            // Local development - include project folder
            $url .= '/' . self::LOCAL_PROJECT_FOLDER;
        } else {
            // Live/production - include public_html folder
            $url .= '/' . self::LIVE_PROJECT_FOLDER;
        }

        // Optioneel pad toevoegen
        if ($path) {
            $url .= '/' . ltrim($path, '/');
        }

        return $url;
    }

    /**
     * Detecteert of we op localhost draaien
     */
    private static function isLocalhost(): bool
    {
        $host = $_SERVER['HTTP_HOST'] ?? '';
        
        return in_array($host, [
            'localhost',
            '127.0.0.1',
            '::1'
        ]) || 
        // Check for localhost with port
        preg_match('/^localhost(:\d+)?$/', $host) ||
        // Check for 127.x.x.x addresses
        preg_match('/^127\.\d{1,3}\.\d{1,3}\.\d{1,3}(:\d+)?$/', $host) ||
        // Check for local .test or .local domains
        preg_match('/\.(test|local)(:\d+)?$/', $host);
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

    /**
     * Check if we're in development environment
     */
    public static function isDevelopment(): bool
    {
        return self::isLocalhost();
    }

    /**
     * Check if we're in production environment
     */
    public static function isProduction(): bool
    {
        return !self::isLocalhost();
    }
}