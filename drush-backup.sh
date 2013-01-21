cp /opt/drupal/7/opf-backup.tar.gz /opt/drupal/7/opf-backup.tar.gz.previous
cd /opt/drupal/7/drupal-7
drush archive-dump --destination=/opt/drupal/7/opf-backup.tar.gz --preserve-symlinks
scp /opt/drupal/7/opf-backup.tar.gz root@www-dev.openplanetsfoundation.org:/opt/drupal/7/

