#### Fonctionnement du cache de linkdata-bundle

Pour activer le fonctionnement du cache:

    # config.yml
    geonaute_linkdata:
      plugins:
        cache: true

Il est possible de surcharger le cache adapter utilisé.

- L'adapter par défaut est <b>geonaute_linkdata.cache.array_adapter</b>, un cache d'array (Doctrine\Common\Cache\ArrayCache).

- Le <b>geonaute_linkdata.cache.filesystem_adapter</b> est un cache filesystem
(alias du service <b>misd_guzzle.cache.doctrine.filesystem.adapter</b>).

Afin de surcharger l'adapter de cache utilisé:

    # config.yml
    geonaute_linkdata:
      plugins:
        cache:
          storage:
            adapter: 'geonaute_linkdata.cache.filesystem_adapter'
