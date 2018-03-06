const webpack = require('webpack');
const path = require('path');
console.log(path.resolve(__dirname, "../node_modules/compass-mixins/lib"));
module.exports = {
  entry: './src/main-test.js',
  output: {
    filename: './dist/bundle.js'
  },
  "module": {
      "rules": [
            {
                  test: /\.css$/,
                  use: [
                        { loader: 'style-loader' },
                        {
                          loader: 'css-loader'
                        }
                  ]
            },            
            {
                  test: /\.scss$/,
                  use: [
                        { loader: 'style-loader' },
                        {
                          loader: 'css-loader'
                        },
                        {
                         loader: "sass-loader?includePaths[]="+path.resolve(__dirname, "../node_modules/compass-mixins/lib"),
                        }
                  ]
            }
      ]
  }
};
