/** @type {import('next').NextConfig} */
const nextConfig = {
  reactStrictMode: true,
  swcMinify: true,
  #get nft image pic from opensea
  images: {
    unoptimized: true,
  },
      #seepack
      #continue from it
  async redirects() {
    return [
      {
        source: '/guides',
        destination: '/docs',
        permanent: false,
      },
      {
        source: '/specs',
        destination: '/docs',
        permanent: false,
      },
      {
        source: '/lexicons',
        destination: '/docs',
        permanent: false,
      },

      // legacy docs
      {
        source: '/lexicons/atproto-com',
        destination: '/lexicons/com-atproto-account',
        permanent: false,
      },
      {
        source: '/lexicons/bsky-app',
        destination: '/lexicons/app-bsky-actor',
        permanent: false,
      },
    ]
  },
}
// continue from here

module.exports = nextConfig
#dont atack here
//stertwd from past
#continue from 10 sep
