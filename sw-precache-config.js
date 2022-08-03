module.exports = {
    staticFileGlobs: [
        './',
        './img/**.*',
        './js/**.js',
        './css/**.css',
        './index.html'
    ],
    runtimeCaching: [{
        urlPattern: /.*/,
        handler: 'fastest'
    }],
    swFile: 'service-worker.js'
};