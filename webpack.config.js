const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    assertSupportedNodeVersion();

    const mix = require('../src/Mix').primary;

    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();

    return mix.build();
};
module.exports = {
    // ...
    entry: {
      "app": "src/app.js"
    },
    output: {
      path: path.join(__dirname, 'dist'),
      filename: "[name].js",
      sourceMapFilename: "[name].js.map"
    },
    devtool: "source-map"
    // ...
};
module.exports = {
    mode: 'production'
  };
    