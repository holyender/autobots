#!/bin/sh

echo "cron job start"
xvfb-run java -Dwebdriver.chrom.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &

#cd ~
#cd autobots
#git pull
#cd test2
echo "codecept test start"
cd /home/bliu/autobots/test2/
/home/bliu/codecept/vendor/bin/codecept run --steps --html

echo "codecept test finished"
#cd ~
#cd autobots
#cd backstopjs
cd /home/bliu/autobots/backstopjs
sudo /usr/bin/backstop test
echo "backstop test finished"
