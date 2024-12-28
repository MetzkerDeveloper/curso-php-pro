const path = require('path');

module.exports = {
    mode: process.env.NODE_ENV,
    devtool: process.env.NODE_ENV == 'development' ? 'source-map' : '',
    entry: {
        app: ['./public/app.js'],
    },
    output: {
        path: path.resolve(__dirname, 'public'),
        filename: '[name].js',
        chunkFilename: '[name].[chunkhash].js', // Nome dos chunks divididos
    },
    optimization: {
        splitChunks: {
            chunks: 'all', // Aplica divisão para todos os tipos de módulos
        },
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                loader: 'babel-loader',
            },
        ],
    },
};
