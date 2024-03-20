<?php
namespace GDO\DogTwitter;

use GDO\Core\GDO_Module;
use GDO\Core\GDT_Secret;
use GDO\Util\FileUtil;

final class Module_DogTwitter extends GDO_Module
{

    public function getConfig(): array
    {
        $path = $this->filePath('secret.php');
        $secret = FileUtil::isFile($path) ? require $path : [];
        return [
            GDT_Secret::make()
        ];
    }

}
