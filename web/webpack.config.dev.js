const ReactRefreshWebpackPlugin = require('@pmmmwh/react-refresh-webpack-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');

var path = require('path');

module.exports = (env, argv) => {
  //npm run dev -- --env modules/messages --port 9000
  const moduleEnv = Object.keys(env);
  let moduleName = moduleEnv[1];
  console.log(moduleName);

  var buildPath = path.resolve(__dirname, './dist/im/build/'+moduleName);
  return {
    mode: 'development',
    optimization: {
      usedExports: true,
    },
    entry: [
      path.join(__dirname, './src/im/'+moduleName+'/index.js')
//      path.join(__dirname, './test/index.js')
    ],
    output: {
      path: buildPath,
      filename: 'index.js',
      libraryTarget: "umd",
      clean: true
    },
    resolve: {
      extensions: [".js", ".jsx"]
    },
    plugins: [
      new ReactRefreshWebpackPlugin(),
      // new HtmlWebpackPlugin({
      //   filename: './im/index.html',
      //   template: './template/index.html',
      // }),
    ].filter(Boolean),
    module: {
      rules: [
        { 
          test: /\.js$/, 
          loader: "babel-loader", 
          exclude: /node_modules/,
          options: {
            plugins: [require.resolve('react-refresh/babel')].filter(Boolean),
          },          
        },
        {
          test: /\.less$/i,
          use: [
            {
              loader: "style-loader",
            },
            {
              loader: "css-loader",
            },
            {
              loader: "less-loader",
              options: {
                lessOptions: {
                  strictMath: true,
                },
              },
            },
          ],
        },
      ]
    },
    devtool: 'inline-source-map',
    devServer: {
      static: {
        directory: './dist'
      }
    },
  }
}
