const autoprefixer = require('autoprefixer');

module.exports  =   {
    module: {
        rules: [
        {
            test: /\.css$/,
            use: ["style-loader", "css-loader", "postcss-loader"]
        }
        ]
    },
    postcss: function () {
        return [autoprefixer];
    }
};