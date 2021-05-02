<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-master',
    'version' => 'dev-master',
    'aliases' => 
    array (
    ),
    'reference' => '7f412fcfc9973fc8d41c7f9b0a46ef6eb60f6889',
    'name' => 'laminas/laminas-mvc-skeleton',
  ),
  'versions' => 
  array (
    'brick/varexporter' => 
    array (
      'pretty_version' => '0.3.5',
      'version' => '0.3.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '05241f28dfcba2b51b11e2d750e296316ebbe518',
    ),
    'container-interop/container-interop' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '79cbf1341c22ec75643d841642dd5d6acd83bdb8',
    ),
    'container-interop/container-interop-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.2',
      ),
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f350df0268e904597e3bd9c4685c53e0e333feea',
    ),
    'laminas/laminas-authentication' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '53505e07858d243792b96be763456f786d953501',
    ),
    'laminas/laminas-cache' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd789161db92a25b065f35f8c915b37d94b496270',
    ),
    'laminas/laminas-cache-storage-adapter-apc' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8b375d994f6e67534f6ae6e995249e706faa30c1',
    ),
    'laminas/laminas-cache-storage-adapter-apcu' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fdd7585042c1a577f6e630535df1e86e23cf5dc',
    ),
    'laminas/laminas-cache-storage-adapter-blackhole' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4af1053efd81785a292c2a9442871c075700345a',
    ),
    'laminas/laminas-cache-storage-adapter-dba' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad968d3d8a0350af8e6717be58bb96e5a9e77f3b',
    ),
    'laminas/laminas-cache-storage-adapter-ext-mongodb' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '011ec5a8ca721ba012d232b1a01b50a55904b99f',
    ),
    'laminas/laminas-cache-storage-adapter-filesystem' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '76fc488c3fa0ad442e4e70f807305c940d1bdcbc',
    ),
    'laminas/laminas-cache-storage-adapter-memcache' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d2a74e300a0fd0b8d0e0cb4e379a173ccad0088',
    ),
    'laminas/laminas-cache-storage-adapter-memcached' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5d35cc2ef6264c76021bcc798569182103baa91',
    ),
    'laminas/laminas-cache-storage-adapter-memory' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '02c7a4a1118bbd47d1c0f0bfe1e8b140af79d2bd',
    ),
    'laminas/laminas-cache-storage-adapter-mongodb' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ef4aa396b55533b8eb3e1d4126c39a78a22e49a6',
    ),
    'laminas/laminas-cache-storage-adapter-redis' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f871faafa8706f662ff10bc6ac63271b463af2ff',
    ),
    'laminas/laminas-cache-storage-adapter-session' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '74a275056cfca2300eb9a67cd1d917f7066b4113',
    ),
    'laminas/laminas-cache-storage-adapter-wincache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f54599c5d9aff11b01adadd2742097f923170ba',
    ),
    'laminas/laminas-cache-storage-adapter-xcache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '24049557aa796ec7527bcc8032ed68346232b219',
    ),
    'laminas/laminas-cache-storage-adapter-zend-server' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8d0b0d219a048a92472d89a5e527990f3ea2decc',
    ),
    'laminas/laminas-cache-storage-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'laminas/laminas-code' => 
    array (
      'pretty_version' => '3.5.1',
      'version' => '3.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b549b70c0bb6e935d497f84f750c82653326ac77',
    ),
    'laminas/laminas-component-installer' => 
    array (
      'pretty_version' => '2.3.2',
      'version' => '2.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ea0c0d147f229ff78eeab52f4097e532ed7e2351',
    ),
    'laminas/laminas-config' => 
    array (
      'pretty_version' => '3.5.0',
      'version' => '3.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f91cd6fe79e82cbbcaa36485108a04e8ef1e679b',
    ),
    'laminas/laminas-console' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '478a6ceac3e31fb38d6314088abda8b239ee23a5',
    ),
    'laminas/laminas-db' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '80cbba4e749f9eb7d8036172acb9ad41e8b6923f',
    ),
    'laminas/laminas-developer-tools' => 
    array (
      'pretty_version' => '2.1.1',
      'version' => '2.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8d9e152e0791fe577e1d0fb63c6a973558f36013',
    ),
    'laminas/laminas-development-mode' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '203cf2f61dbea1489cb6e0c42ffdc987ebe4f796',
    ),
    'laminas/laminas-di' => 
    array (
      'pretty_version' => '3.2.2',
      'version' => '3.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ed38ab3b066c0a1f1b087e0a664caadf1d4f8f04',
    ),
    'laminas/laminas-diactoros' => 
    array (
      'pretty_version' => '2.5.1',
      'version' => '2.5.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '53df7b7cd66e0905e6133970a4b90392a7a08075',
    ),
    'laminas/laminas-dom' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '631fa74ae6f68e9019b73512f1b3b139d43f3572',
    ),
    'laminas/laminas-escaper' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e04bc5ae5990b17159d79d331055e2c645e5cc5',
    ),
    'laminas/laminas-eventmanager' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '966c859b67867b179fde1eff0cd38df51472ce4a',
    ),
    'laminas/laminas-filter' => 
    array (
      'pretty_version' => '2.11.0',
      'version' => '2.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd295a15f5c13d0c13d69ca0107190b1f2083d91',
    ),
    'laminas/laminas-form' => 
    array (
      'pretty_version' => '2.16.3',
      'version' => '2.16.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '76fe85b3f126183fe965d60e32e2bf6c7c108d61',
    ),
    'laminas/laminas-http' => 
    array (
      'pretty_version' => '2.14.3',
      'version' => '2.14.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bfaab8093e382274efed7fdc3ceb15f09ba352bb',
    ),
    'laminas/laminas-hydrator' => 
    array (
      'pretty_version' => '4.1.0',
      'version' => '4.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc201f29280a8308579e7fb4c1fbc2fb3dfdbd8f',
    ),
    'laminas/laminas-i18n' => 
    array (
      'pretty_version' => '2.11.1',
      'version' => '2.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5e85a8facc5534e856cc7f5b4326533eede84b8a',
    ),
    'laminas/laminas-inputfilter' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b6ab28b425e626b12488fec243e02d36d8dffeff',
    ),
    'laminas/laminas-json' => 
    array (
      'pretty_version' => '3.2.0',
      'version' => '3.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1e3b64d3b21dac0511e628ae8debc81002d14e3c',
    ),
    'laminas/laminas-loader' => 
    array (
      'pretty_version' => '2.7.0',
      'version' => '2.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bcf8a566cb9925a2e7cc41a16db09235ec9fb616',
    ),
    'laminas/laminas-log' => 
    array (
      'pretty_version' => '2.13.1',
      'version' => '2.13.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '6ac20830d4f324b4662fc454fcc1954436bfced3',
    ),
    'laminas/laminas-modulemanager' => 
    array (
      'pretty_version' => '2.10.2',
      'version' => '2.10.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2068e0b300e87e139112016a6025be341ceaaf33',
    ),
    'laminas/laminas-mvc' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ead09f8ab5ff0e562dbd0198c7f67523c2f61980',
    ),
    'laminas/laminas-mvc-console' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '90338c7b61a5fa8445c0a41925a4ae351459fa79',
    ),
    'laminas/laminas-mvc-form' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c027f5becb817736096d0967c5e42cd7f746d5e4',
    ),
    'laminas/laminas-mvc-i18n' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7ece491a02000a6c4ea2c4457fead3d12efc6eba',
    ),
    'laminas/laminas-mvc-plugin-fileprg' => 
    array (
      'pretty_version' => '1.1.0',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4a1a3729b3789a4d9e7cfe285ce84a636be87a67',
    ),
    'laminas/laminas-mvc-plugin-flashmessenger' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f5a522c3aab215a9b89a0630beb91582f4a3f202',
    ),
    'laminas/laminas-mvc-plugin-identity' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '0dc0c349be0faee67bbb4ae2a0206435a7a51516',
    ),
    'laminas/laminas-mvc-plugin-prg' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f9b094373795dd4250d3551a1fbd6d304762b621',
    ),
    'laminas/laminas-mvc-plugins' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '896104a57c3898c2ca932c1ec10c6a3afea2f815',
    ),
    'laminas/laminas-mvc-skeleton' => 
    array (
      'pretty_version' => 'dev-master',
      'version' => 'dev-master',
      'aliases' => 
      array (
      ),
      'reference' => '7f412fcfc9973fc8d41c7f9b0a46ef6eb60f6889',
    ),
    'laminas/laminas-paginator' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '14ce4a397e6329954389cc40aa635caa9573f695',
    ),
    'laminas/laminas-psr7bridge' => 
    array (
      'pretty_version' => '1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b1158f0574164039f698a261c01c26119cc6dbd6',
    ),
    'laminas/laminas-router' => 
    array (
      'pretty_version' => '3.4.4',
      'version' => '3.4.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '2a7068508af4de67d80ea292e0cc7c37563a33c6',
    ),
    'laminas/laminas-servicemanager' => 
    array (
      'pretty_version' => '3.6.4',
      'version' => '3.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b1445e1a7077c21b0fad0974a1b7a11b9dbe0828',
    ),
    'laminas/laminas-session' => 
    array (
      'pretty_version' => '2.10.0',
      'version' => '2.10.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '921e6a9f807ee243a9a4f8a8a297929d0c2b50cd',
    ),
    'laminas/laminas-stdlib' => 
    array (
      'pretty_version' => '3.3.1',
      'version' => '3.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd81c7ffe602ed0e6ecb18691019111c0f4bf1efe',
    ),
    'laminas/laminas-test' => 
    array (
      'pretty_version' => '3.4.2',
      'version' => '3.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'da508dd32bdedd8f2757887ad7dfed3cf5faea2d',
    ),
    'laminas/laminas-text' => 
    array (
      'pretty_version' => '2.8.0',
      'version' => '2.8.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '76fccc8f79a6fb61689e96ab300566c0065deaaa',
    ),
    'laminas/laminas-uri' => 
    array (
      'pretty_version' => '2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '79bd4c614c8cf9a6ba715a49fca8061e84933d87',
    ),
    'laminas/laminas-validator' => 
    array (
      'pretty_version' => '2.14.4',
      'version' => '2.14.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e370c4695db1c81e6dfad38d8c4dbdb37b23d776',
    ),
    'laminas/laminas-view' => 
    array (
      'pretty_version' => '2.12.0',
      'version' => '2.12.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3ef103da6887809f08ecf52f42c31a76c9bf08b1',
    ),
    'laminas/laminas-zendframework-bridge' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6cccbddfcfc742eb02158d6137ca5687d92cee32',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.10.1',
      'version' => '1.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
      'replaced' => 
      array (
        0 => '1.10.1',
      ),
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.10.4',
      'version' => '4.10.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6d052fc58cb876152f89f532b95a8d7907e7f0e',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6bb6825def89e0a32220f88337f8ceaf1975fa0',
    ),
    'phpdocumentor/reflection-common' => 
    array (
      'pretty_version' => '2.2.0',
      'version' => '2.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1d01c49d4ed62f25aa84a747ad35d5a16924662b',
    ),
    'phpdocumentor/reflection-docblock' => 
    array (
      'pretty_version' => '5.2.2',
      'version' => '5.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '069a785b2141f5bcf49f3e353548dc1cce6df556',
    ),
    'phpdocumentor/type-resolver' => 
    array (
      'pretty_version' => '1.4.0',
      'version' => '1.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
    ),
    'phpspec/prophecy' => 
    array (
      'pretty_version' => '1.12.1',
      'version' => '1.12.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ce87516be71aae9b956f81906aaf0338e0d8a2d',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.3',
      'version' => '9.2.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '6b20e2055f7c29b56cb3870b3de7cc463d7add41',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.5',
      'version' => '3.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa4be8575f26070b100fccb67faabb28f21f66f8',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.4.2',
      'version' => '9.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '3866b2eeeed21b1b099c4bc0b7a1690ac6fd5baa',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd11b50ad223250cf17b86e38383413f5a6764bf8',
    ),
    'psr/cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8622567409010282b7aeebe4bb841fe98b58dcaf',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '^1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f6561bf28d520154e4b0ec72be95418abe6d9363',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '1.1.3',
      'version' => '1.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f73288fd15629204f9d42b7055f72dacbe811fc',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.6',
      'version' => '4.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '55f4261989e546dc112258c7a75935a81a7ce382',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '3461e3fccc7cfdfc2720be910d3bd73c69be590d',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.3',
      'version' => '5.1.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '388b6ced16caa751030f6a69e588299fa09200ac',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.3',
      'version' => '4.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd89cc98761b8cb5a1a235a6b703ae50d34080e65',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.2',
      'version' => '5.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a90ccbddffa067b51f574dea6eb25d5680839455',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acf76492a65401babcf5283296fa510782783a7a',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd9d8cf3c5804de4341c283ed787f099f5506172',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '2.3.1',
      'version' => '2.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '81cd61ab7bbf2de744aba0ea61fae32f721df3d2',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.20.0',
      'version' => '1.20.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f4ba089a5b6366e453971d3aad5fe8e897b37f41',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5232de97ee3b75b0360528dae24e73db49566ab1',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.22.1',
      'version' => '1.22.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dc3063ba22c2a1fd2f45ed856374d79114998f91',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v5.2.6',
      'version' => '5.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '89412a68ea2e675b4e44f260a5666729f77f668e',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '75a63c33a8577608444246075ea0af0d052e452a',
    ),
    'webimpress/safe-writer' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cfafdec5873c389036f14bf832a5efc9390dcdd',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bafc69caeb4d49c39fd0779086c03a3738cbb389',
    ),
    'zendframework/zend-authentication' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.0',
      ),
    ),
    'zendframework/zend-cache' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.0',
      ),
    ),
    'zendframework/zend-code' => 
    array (
      'replaced' => 
      array (
        0 => '^3.4.1',
      ),
    ),
    'zendframework/zend-component-installer' => 
    array (
      'replaced' => 
      array (
        0 => '^2.1.2',
      ),
    ),
    'zendframework/zend-config' => 
    array (
      'replaced' => 
      array (
        0 => '^3.3.0',
      ),
    ),
    'zendframework/zend-console' => 
    array (
      'replaced' => 
      array (
        0 => '2.8.0',
      ),
    ),
    'zendframework/zend-db' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.0',
      ),
    ),
    'zendframework/zend-developer-tools' => 
    array (
      'replaced' => 
      array (
        0 => '^2.0.0',
      ),
    ),
    'zendframework/zend-di' => 
    array (
      'replaced' => 
      array (
        0 => '^3.1.2',
      ),
    ),
    'zendframework/zend-diactoros' => 
    array (
      'replaced' => 
      array (
        0 => '^2.2.1',
      ),
    ),
    'zendframework/zend-dom' => 
    array (
      'replaced' => 
      array (
        0 => '2.7.2',
      ),
    ),
    'zendframework/zend-escaper' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-eventmanager' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
    'zendframework/zend-filter' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.2',
      ),
    ),
    'zendframework/zend-form' => 
    array (
      'replaced' => 
      array (
        0 => '^2.14.3',
      ),
    ),
    'zendframework/zend-http' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.2',
      ),
    ),
    'zendframework/zend-hydrator' => 
    array (
      'replaced' => 
      array (
        0 => '^3.0.2',
      ),
    ),
    'zendframework/zend-i18n' => 
    array (
      'replaced' => 
      array (
        0 => '^2.10.1',
      ),
    ),
    'zendframework/zend-inputfilter' => 
    array (
      'replaced' => 
      array (
        0 => '^2.10.1',
      ),
    ),
    'zendframework/zend-json' => 
    array (
      'replaced' => 
      array (
        0 => '^3.1.2',
      ),
    ),
    'zendframework/zend-loader' => 
    array (
      'replaced' => 
      array (
        0 => '^2.6.1',
      ),
    ),
    'zendframework/zend-log' => 
    array (
      'replaced' => 
      array (
        0 => '^2.12.0',
      ),
    ),
    'zendframework/zend-modulemanager' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.4',
      ),
    ),
    'zendframework/zend-mvc' => 
    array (
      'replaced' => 
      array (
        0 => '3.1.1',
      ),
    ),
    'zendframework/zend-mvc-console' => 
    array (
      'replaced' => 
      array (
        0 => '^1.2.0',
      ),
    ),
    'zendframework/zend-mvc-form' => 
    array (
      'replaced' => 
      array (
        0 => '^1.0.0',
      ),
    ),
    'zendframework/zend-mvc-i18n' => 
    array (
      'replaced' => 
      array (
        0 => '^1.1.1',
      ),
    ),
    'zendframework/zend-mvc-plugin-fileprg' => 
    array (
      'replaced' => 
      array (
        0 => '1.1.0',
      ),
    ),
    'zendframework/zend-mvc-plugin-flashmessenger' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.0',
      ),
    ),
    'zendframework/zend-mvc-plugin-identity' => 
    array (
      'replaced' => 
      array (
        0 => '1.1.1',
      ),
    ),
    'zendframework/zend-mvc-plugin-prg' => 
    array (
      'replaced' => 
      array (
        0 => '1.2.0',
      ),
    ),
    'zendframework/zend-mvc-plugins' => 
    array (
      'replaced' => 
      array (
        0 => '1.0.1',
      ),
    ),
    'zendframework/zend-paginator' => 
    array (
      'replaced' => 
      array (
        0 => '^2.8.2',
      ),
    ),
    'zendframework/zend-psr7bridge' => 
    array (
      'replaced' => 
      array (
        0 => '^1.2.0',
      ),
    ),
    'zendframework/zend-router' => 
    array (
      'replaced' => 
      array (
        0 => '^3.3.0',
      ),
    ),
    'zendframework/zend-servicemanager' => 
    array (
      'replaced' => 
      array (
        0 => '^3.4.0',
      ),
    ),
    'zendframework/zend-session' => 
    array (
      'replaced' => 
      array (
        0 => '^2.9.1',
      ),
    ),
    'zendframework/zend-stdlib' => 
    array (
      'replaced' => 
      array (
        0 => '^3.2.1',
      ),
    ),
    'zendframework/zend-test' => 
    array (
      'replaced' => 
      array (
        0 => '^3.3.0',
      ),
    ),
    'zendframework/zend-text' => 
    array (
      'replaced' => 
      array (
        0 => '^2.7.1',
      ),
    ),
    'zendframework/zend-uri' => 
    array (
      'replaced' => 
      array (
        0 => '^2.7.1',
      ),
    ),
    'zendframework/zend-validator' => 
    array (
      'replaced' => 
      array (
        0 => '^2.13.0',
      ),
    ),
    'zendframework/zend-view' => 
    array (
      'replaced' => 
      array (
        0 => '^2.11.4',
      ),
    ),
    'zfcampus/zf-development-mode' => 
    array (
      'replaced' => 
      array (
        0 => '3.2.0',
      ),
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}


if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}




private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
