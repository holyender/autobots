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

cd /home/bliu

zip -r backstop_report.zip autobots/backstopjs/backstop_data/html_report/

#mutt -s "Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -- rnagaraja@911memorial.org < /home/bliu/autobots/scraps/runGiftTestCest.sh

#mutt -s "Report!Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -- bliu@911memorial.org < /home/bliu/autobots/scraps/runGiftTestCest.sh

mutt -s "Subject" -a /home/bliu/autobots/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- bliu@911memorial.org 
#mutt -s "Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- rnagaraja@911memorial.org

echo "\n mail sent cron run complete"