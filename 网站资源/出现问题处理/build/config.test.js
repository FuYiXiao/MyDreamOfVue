{
    "context": "D:\\WorkCMD\\wamp64\\www\\static",
    "entry": {
        "app": "./src/main-test.js"
    },
    "output": {
        "path": "D:\\WorkCMD\\wamp64\\www\\static\\dist",
        "filename": "[name].js",
        "publicPath": "/"
    },
    "module": {
        "rules": [
              {
                    test: /\.scss$/,
                    use: [
                          { loader: 'style-loader' },
                          {
                            loader: 'css-loader', options: {
                              sourceMap: true, 
                            }
                          },
                          {
                            loader: 'sass-loader', options: { sourceMap: true }
                          }
                    ]
              }
        ]
    }
}