<?php 

namespace Ninjaparade\Installer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
use Ninjaparade\Installer\ModuleInstaller;

class InstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new ModuleInstaller($io, $composer);
        
        $composer->getInstallationManager()->addInstaller($installer);
    }
}
