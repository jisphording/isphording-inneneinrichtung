// keep folder structure as input use imagemin-webp
const imagemin = require('imagemin-keep-folder');
const imageminWebp = require("imagemin-webp");
 
// Run imagemin on content images that are kept in same folder
imagemin(['content/**/*.{jpg,png}'], {
  use: [
    imageminWebp({})
  ]
});

// Run imagemin on asset images that are moved to dist folder
imagemin(['assets/img/*.{jpg,png}'], 'dist/img', {
  use: [
      imageminWebp({quality: 75})
  ]
}).then(() => {
  console.log('Images optimized');
});