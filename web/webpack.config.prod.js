var path = require('path');

module.exports = (env, argv) => {
  // npm run build -- --env modules/messages -w
  // npx webpack -c ./webpack.config.prod.js "--env" "modules/messages" -w
  let Envs = Object.keys(env);
  let moduleName = Envs[1];
  console.log(Envs)
  console.log(moduleName);

  var buildPath = path.resolve(__dirname, './dist/im/build/'+moduleName);
  return {
    mode: 'production',
    optimization: {
      usedExports: true,
    },
    entry: [
      path.join(__dirname, './src/im/'+moduleName+'/index.js')
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
    module: {
      rules: [
        { 
          test: /\.js$/, 
          loader: "babel-loader", 
          exclude: /node_modules/
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
    }
  }
}
