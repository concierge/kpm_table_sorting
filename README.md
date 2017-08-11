# kpm_table_sorting

Simple script sorting [KPM table](https://github.com/concierge/Concierge/wiki/KPM-Table) alphabetically.

## Hosting

An instance of this script is currently being hosted by [@p0358](https://github.com/p0358).

## Cron task example:

    10 8 * * * cd /var/Concierge.wiki && git pull && php /var/kpm_table_sorting/sort.php /var/Concierge.wiki/KPM-Table.md && git commit -am "[BOT ACTION] Sorting alphabetically" && git push

## Useful:

Clone wiki:

    git clone https://github.com/concierge/Concierge.wiki.git

Setup push access (execute inside git repo's dir):

    git remote set-url origin https://username:token@github.com/concierge/Concierge.wiki.git
