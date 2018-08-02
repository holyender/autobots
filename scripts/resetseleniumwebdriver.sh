sudo pkill Xvfb
sudo pkill xvfb-run
sudo pkill java
xvfb-run java -Dwebdriver.chrome.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &
