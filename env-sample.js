const config = {
    domain: 'domain.test',
    mode: 'local',
    src_path: 'src', // resources
    public_path: 'public',
};

const browserSyncConfig = {
    proxy: config.domain,
    host: config.domain,
    open: 'external',
    files: [
        './' + config.src_path + '/views/**/*.blade.php',
        './' + config.public_path + '/css/app.css'
    ]
}

// const browserSyncConfig = {
//     mode: 'local',
//     host: domain,
//     proxy: {
//         target: 'https://' + domain + '/',
//     },
//     https: {
//         cert: '/Path/To/Certificatie.crt',
//         key: '/Path/To/Certificatie.key',
//     }
// }

module.exports = {config, browserSyncConfig};