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

mutt -s "Subject" -a /home/bliu/autobots/test2/tests/_output/report.html -- bliu@911memorial.org
mutt -s "Subject" -a /home/bliu/autobots/test2/tests/_output/report.html -a /home/bliu/autobots/backstopjs/backstop_data/html_report/index.html -- bliu@911memorial.org <<< 'Report for __ Date __ Time __ Pass Fail'

echo "\n mail sent cron run complete"