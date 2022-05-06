module.exports = {
    staticFileGlobs: [
        './',
        './img/**.*',
        './js/**.js',
        './css/**.css',
        './index.html',
        './*.ttf'
    ],
    runtimeCaching: [{
        urlPattern: /.*/,
        handler: 'networkFirst'
    }],
    swFile: 'service-worker.js'
};