// module.exports = ({ env }) => ({
//   defaultConnection: 'default',
//   connections: {
//     default: {
//       connector: 'bookshelf',
//       settings: {
//         client: 'mysql',
//         host: env('DATABASE_HOST', '127.0.0.1'),
//         port: env.int('DATABASE_PORT', 3306),
//         database: env('DATABASE_NAME', 'poluostrov_strapi'),
//         username: env('DATABASE_USERNAME', 'root'),
//         password: env('DATABASE_PASSWORD', 'root'),
//       },
//       options: {},
//     },
//   },
// });

module.exports = ({ env }) => ({
  defaultConnection: 'default',
  connections: {
    default: {
      connector: 'mongoose',
      settings: {
        client: 'mongo',
        host: env('DATABASE_HOST', 'localhost'),
        port: env.int('DATABASE_PORT', 27017),
        database: env('DATABASE_NAME', 'poluostrov_mongo'),
        username: env('DATABASE_USERNAME', ''),
        password: env('DATABASE_PASSWORD', ''),
      },
      options: {

      },
    },
  },
});
