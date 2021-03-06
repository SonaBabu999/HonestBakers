const { assertSupportedNodeVersion } = require('../src/Engine');

module.exports = async () => {
    assertSupportedNodeVersion();

    const mix = require('../src/Mix').primary;

    require(mix.paths.mix());

    await mix.installDependencies();
    await mix.init();

    return mix.build();
};
// // module.exports = {
// //     // ...
// //     entry: {
// //       "app": "src/app.js"
// //     },
// //     output: {
// //       path: path.join(__dirname, 'dist'),
// //       filename: "[name].js",
// //       sourceMapFilename: "[name].js.map"
// //     },
// //     devtool: "source-map"
// //     // ...
// // };
// // module.exports = {
// //     mode: 'production'
// //   };
//     // webpack.config.js
// const { VueLoaderPlugin } = require('vue-loader')

// module.exports = {
//   mode: 'development',
//   module: {
//     rules: [
//       {
//         test: /\.vue$/,
//         loader: 'vue-loader'
//       },
//       // this will apply to both plain `.js` files
//       // AND `<script>` blocks in `.vue` files
//       {
//         test: /\.js$/,
//         loader: 'babel-loader'
//       },
//       // this will apply to both plain `.css` files
//       // AND `<style>` blocks in `.vue` files
//       {
//         test: /\.css$/,
//         use: [
//           'vue-style-loader',
//           'css-loader'
//         ]
//       }
//     ]
//   },
//   plugins: [
//     // make sure to include the plugin for the magic
//     new VueLoaderPlugin()
//   ]
// }

// module.exports = {
//   mode: 'production'
// }
// var webpack = require('webpack')
// module.exports = {
//   // ...
//   plugins: [
//     // ...
//     new webpack.DefinePlugin({
//       'process.env.NODE_ENV': JSON.stringify('production')
//     })
//   ]
// }



define('WP_MEMORY_LIMIT', '256M');
define( 'WP_MAX_MEMORY_LIMIT', '256M' );