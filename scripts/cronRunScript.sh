#!/bin/sh

echo "cron job start"

sudo pkill Xvfb

sudo pkill java

sudo xvfb-run java -Dwebdriver.chrom.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &

echo "xvfb is up"
#cd ~
#cd autobots
#git pull
#cd test2
echo "codecept test start"
cd /home/bliu/autobots/test2/
/home/bliu/codecept/vendor/bin/codecept run --steps --html
#/home/bliu/codecept/vendor/bin/codecept run acceptance/DonateTestCest.php --steps --html

echo "codecept test finished"
#cd ~
#cd autobots
#cd backstopjs
cd /home/bliu/autobots/backstopjs
sudo /usr/bin/backstop test
echo "backstop test finished"

cd /home/bliu

#zip -r backstop_report.zip autobots/backstopjs/backstop_data/html_report/

#mutt -s "Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -- rnagaraja@911memorial.org < /home/bliu/autobots/scraps/runGiftTestCest.sh

#mutt -s "Report!Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -- bliu@911memorial.org < /home/bliu/autobots/scraps/runGiftTestCest.sh

#mutt -s "Report!" -a /home/bliu/autobots/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- rnagaraja@911memorial.org
#mutt -s "Subject" -a /home/bliu/autobots/test2/tests/_output/report.html -a /home/bliu/backstop_report.zip -- bliu@911memorial.org

sudo cp /home/bliu/autobots/test2/tests/_output/report.html /var/www/html/

sudo cp /home/bliu/autobots/backstopjs/backstop_data/ci_report/xunit.xml /var/www/html/


echo "\n mail sent cron run complete"

date

sudo pkill Xvfb

sudo pkill java

sudo cp -R /home/bliu/autobots/test2/tests/_output /home/bliu/autobots/backstopjs/backstop_data/html_report

sudo mv /home/bliu/autobots/backstopjs/backstop_data/html_report /home/bliu/autobots/backstopjs/backstop_data/ARhtml_$(date +%y%m%d_%H%M%S)

sudo cp -R /home/bliu/autobots/backstopjs/backstop_data /var/www/html/
