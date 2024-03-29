<?php


namespace Laminas\DevelopmentMode;

class Status
{
    const DEVEL_CONFIG = 'config/development.config.php';

    /**
     * @param string
     */
    private $develConfigFile;

    /**
     * @param string $projectDir Location to resolve project from.
     */
    public function __construct($projectDir = '')
    {
        if ('' === $projectDir) {
            $this->develConfigFile = self::DEVEL_CONFIG;
            return;
        }

        $this->develConfigFile = sprintf('%s/%s', $projectDir, self::DEVEL_CONFIG);
    }

    /**
     * Indicate whether or not development mode is enabled.
     *
     * @return int
     */
    public function __invoke()
    {
        if (file_exists($this->develConfigFile)) {
            // nothing to do
            echo 'Development mode is ENABLED', PHP_EOL;
            return 0;
        }

        echo 'Development mode is DISABLED', PHP_EOL;
        return 0;
    }
}
