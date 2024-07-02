<?php ## Стандарт PSR-1
namespace Vendor\Storage;
class Storage
{
    const VERSION = '1.0';
    public function getVersion()
    {
        return Storage::VERSION;
    }
}
?>
