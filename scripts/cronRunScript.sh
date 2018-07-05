 #!/bin/sh
 xvfb-run java -Dwebdriver.chrom.driver=/usr/local/bin/chromedriver -jar /usr/local/bin/selenium-server-standalone.jar &

 cd ~
 cd autobots
 git pull
 cd test2
 codecept run --steps --html

 cd ~
 cd autobots
 cd backstopjs
 sudo backstop test