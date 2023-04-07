const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    // @ts-ignore
    process.noDeprecation = true;

    assertSupportedNodeVersion();

    const mix = require('../src/Mix').primary;

    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();

    let mix = require('laravel-mix');

    mix.js('js/app.js', 'dist')
   .sass('resource/sass/app.scss', 'dist')
   .setPublicPath('dist');
   
    

    return mix.build();
};
