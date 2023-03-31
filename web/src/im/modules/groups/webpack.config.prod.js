var path = require('path');
var buildPath = path.resolve(__dirname, '../../../build/modules/groups');

var config = {
  mode: 'production',
  entry: [
    path.join(__dirname, 'index.js')
  ],
  output: {
    path: buildPath,
    filename: 'index.js',
    libraryTarget: "umd"
  },
  resolve: {
    extensions: [".js", ".jsx"]
  },
  plugins: [
    //new ExtractTextPlugin('css/[name].css', { allChunks: true })
  ],
  module: {
    rules: [
      { test: /\.js$/, loader: "babel-loader", exclude: /node_modules/ },
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
};

module.exports = config;
