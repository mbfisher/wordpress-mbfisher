var webpack = require('webpack');
var ExtractTextPlugin = require('extract-text-webpack-plugin');
var path = require('path');

module.exports = {
    entry: path.join(__dirname, 'style/index.scss'),
    output: {
        path: path.join(__dirname, 'dist'),
        filename: 'index.js'
    },
    module: {
        loaders: [
            {test: /\.scss$/, loader: ExtractTextPlugin.extract("style", "css!autoprefixer?browsers=last 2 versions!sass") },
            {test: /\.less/, loader: ExtractTextPlugin.extract("style", "css!autoprefixer?browsers=last 2 versions!less") },
            {test: /\.css$/, loader: ExtractTextPlugin.extract("style", "css!autoprefixer?browsers=last 2 versions") },
            { test: /\.woff2?$/, loader: "url-loader?limit=10000&minetype=application/font-woff" },
            { test: /\.(ttf|eot|svg)$/, loader: "file-loader" }
        ]
    },
    plugins: [
        new ExtractTextPlugin('index.css')
    ]
};
