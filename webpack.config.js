const path = require('path');

module.exports = {
    mode: 'production',

  entry: {
      main:'./js/main.js',
      nav:'./js/newsletterquery.js',
      query:'./js/nav-control.js'
},
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: '[name].js',
  },
};