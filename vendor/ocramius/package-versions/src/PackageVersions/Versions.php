<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'pocketmine/pocketmine-mp';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'adhocore/json-comment' => '0.1.0@8448076039389f558f39ad0553aab87db3f81614',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'pocketmine/binaryutils' => '0.1.12@566fa87829e007eda0bd96e39fe20b9b0d638132',
  'pocketmine/callback-validator' => '1.0.2@8321aa3ccfe63639b0d08f0cbf270755cfc99fe2',
  'pocketmine/classloader' => '0.1.1@7c0363491d1ce8f914fe96d41a4338c982adedff',
  'pocketmine/log' => '0.2.0@e59bedb5d4bbeb9a26647cb7c367cb2fa72addfa',
  'pocketmine/log-pthreads' => '0.1.1@9bbcef398b01487ab47c234a6a7054722abbe067',
  'pocketmine/math' => '0.2.5@8c46cfa95351fb0b2b30739a381310941934b55f',
  'pocketmine/nbt' => '0.2.15@f8a81d37d24eb79fb77d985a52549d68955bc6a1',
  'pocketmine/raklib' => '0.12.9@5f2a02009f486ca4d90892814570fa13ebdc078d',
  'pocketmine/snooze' => '0.1.3@849510fa62e57512b8467e3694e9b3add97038fd',
  'pocketmine/spl' => '0.4.1@ff0579a0be41bbe65d3637607715c0f87728a838',
  'doctrine/instantiator' => '1.3.1@f350df0268e904597e3bd9c4685c53e0e333feea',
  'myclabs/deep-copy' => '1.10.1@969b211f9a51aa1f6c01d1d2aef56d3bd91598e5',
  'nikic/php-parser' => 'v4.10.2@658f1be311a230e0907f5dfe0213742aff0596de',
  'phar-io/manifest' => '2.0.1@85265efd3af7ba3ca4b2a2c34dbfc5788dd29133',
  'phar-io/version' => '3.0.2@c6bb6825def89e0a32220f88337f8ceaf1975fa0',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.2.2@069a785b2141f5bcf49f3e353548dc1cce6df556',
  'phpdocumentor/type-resolver' => '1.4.0@6a467b8989322d92aa1c8bf2bebcc6e5c2ba55c0',
  'phpspec/prophecy' => '1.12.1@8ce87516be71aae9b956f81906aaf0338e0d8a2d',
  'phpstan/phpstan' => '0.12.48@d364cfbac9ffd869570cdfea7eaa6541c3dac666',
  'phpstan/phpstan-phpunit' => '0.12.16@1dd916d181b0539dea5cd37e91546afb8b107e17',
  'phpstan/phpstan-strict-rules' => '0.12.5@334898a32217e4605e0f9cfa3d3fc3101bda26be',
  'phpunit/php-code-coverage' => '9.2.0@53a4b737e83be724efd2bc4e7b929b9a30c48972',
  'phpunit/php-file-iterator' => '3.0.5@aa4be8575f26070b100fccb67faabb28f21f66f8',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.3@18c887016e60e52477e54534956d7b47bc52cd84',
  'phpunit/php-timer' => '5.0.2@c9ff14f493699e2f6adee9fd06a0245b276643b7',
  'phpunit/phpunit' => '9.4.0@ef533467a7974c4b6c354f3eff42a115910bd4e5',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.7@59236be62b1bb9919e6d7f60b0b832dc05cef9ab',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.5@7a8ff306445707539c1a6397372a982a1ec55120',
  'sebastian/complexity' => '2.0.1@ba8cc2da0c0bfbc813d03b56406734030c7f1eff',
  'sebastian/diff' => '4.0.3@ffc949a1a2aae270ea064453d7535b82e4c32092',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.3@d89cc98761b8cb5a1a235a6b703ae50d34080e65',
  'sebastian/global-state' => '5.0.1@ea779cb749a478b22a2564ac41cd7bda79c78dc7',
  'sebastian/lines-of-code' => '1.0.1@6514b8f21906b8b46f520d1fbd17a4523fa59a54',
  'sebastian/object-enumerator' => '4.0.3@f6f5957013d84725427d361507e13513702888a4',
  'sebastian/object-reflector' => '2.0.3@d9d0ab3b12acb1768bc1e0a89b23c90d2043cbe5',
  'sebastian/recursion-context' => '4.0.3@ed8c9cd355089134bc9cba421b5cfdd58f0eaef7',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.0@fa592377f3923946cb90bf1f6a71ba2e5f229909',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/polyfill-ctype' => 'v1.18.1@1c302646f6efc070cd46856e600e5e0684d6b454',
  'theseer/tokenizer' => '1.2.0@75a63c33a8577608444246075ea0af0d052e452a',
  'webmozart/assert' => '1.9.1@bafc69caeb4d49c39fd0779086c03a3738cbb389',
  'pocketmine/pocketmine-mp' => '3.15.2@d7a66ad7559f23d24ffe95813421a720203109b1',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
