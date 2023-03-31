var webpack = require('webpack');
var path = require('path');
var buildPath = path.resolve(__dirname, '../../../build/modules/news');

//var cssnext = require('cssnext');
//var ExtractTextPlugin = require('extract-text-webpack-plugin');

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
      { test: /\.js$/, exclude: /node_modules/, loader: "babel-loader" }
    ]
//    loaders: [
//      { test: /\.(js|jsx)$/, loaders: ['babel-loader?stage=0']},
//        { test: /\.jsx?$/,loader: "babel-loader" },
  //    { test: /\.css$/, loader: ExtractTextPlugin.extract('style', 'css') }
  //    { test: /\.css$/, loader: "style-loader!css-loader" }
//    ]
  }
};

module.exports = config;
