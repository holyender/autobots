# Automation Tests AutoBots

The purpose of this project is to automate integration and acceptance testing on a website.  This project contains acceptance test suites, visual pixel comparison testing, and scripts to help generate the tests. This project uses Jenkins as the CI/CD build tool for automating, Selenium/Codception/Chromedriver as the headless browser server and testing framework, and BackstopJs/Puppeteer.

The purpose of this project is an automated cotinuous intergration continuous deployment system that also automatically run acceptance testing on the project and build every time new code is committed by a developer. It can also be set to test the overall health and functionality of the website every interval of time.  If anything were to break or cease to function on the main website, then the automated build tool will pick up the error and immediately notify the developer before letting the new commit become prod.

## Getting Started

This Project will be optimized for running Jenkins automation server on an Ubuntu 16.04 LTS Virtual Machine on Microsoft Azure Cloud. The languages that you may want to be familiar with are Python 3, Java 8, JavaScript(NodeJS), and Php 5.

Without the building aspect of the project, there is a option to have the project run as a cron job. Only the testing portion of the project will run. The cron job will run the tests periodically.

## Step-by-Step Set Up of Environment

The Biggest and most important components of this project is Jenkins, Codeception, and BackstopJS. Most other pre-requisite and dependencies are there to run those things. lets try to avoid dependency hell.
Get Azure Ubuntu 16.04 server
On the server,

### For Codeception & Dependencies

Install PHP

```
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-gd php-mysql php-xmlrpc php-mbstring php-xml libapache2-mod-php
```

Installing Composer

```
sudo apt install composer
```


cd to your desired project directory then

Installing Codeception
```
composer require codeception/codeception --dev
```
Then run codeception using
```
php vendor/bin/codecept
```
Boostrap the testing environment using
```
php vendor/bin/codecept bootstrap
```
Now to make codecept a global command use the following then refresh .bashrc
```
export PATH=/home/bliu/codecept/vendor/bin:$PATH
source ~/.bashrc
```
At this point in time if you were to cd to the test suite directory and type
```
codecept run --steps --html
```
Codeception will technically run but since we do not have chromedriver or selenium set up, it will just return errors

### For Selenium Server

The Selenium server automates browsers. The server is needed to run Webdriver/Chromedriver. For more info go to [Selenium HQ](www.selemiumhq.org)
Selenium server artifact is written in Java and requires Java 8 JDK or JRE

To Install Java 8 Enter the following commands
```
sudo add-apt-repository ppa:webupd8team/java
sudo apt update
sudo apt install oracle-java8-installer
```
Note you may need to click Ok and accept a few license agreements from Oracle

To Install Selenium Server
```
wget -N http://selenium-release.storage.googleapis.com/3.13/selenium-server-standalone-3.13.0.jar -P ~/
sudo mv -f ~/selenium-server-standalone-3.13.0.jar /usr/local/bin/selenium-server-standalone.jar
sudo chown root:root /usr/local/bin/selenium-server-standalone.jar
sudo chmod 0755 /usr/local/bin/selenium-server-standalone.jar

```

To Install Google Chrome:
```
wget -q -O - https://dl-ssl.google.com/linux/linux_signing_key.pub | sudo apt-key add - 
echo 'deb [arch=amd64] http://dl.google.com/linux/chrome/deb/ stable main' | sudo tee /etc/apt/sources.list.d/google-chrome.list
sudo apt-get update 
sudo apt-get install google-chrome-stable
```

To Install Chrome-driver
```
wget -N http://chromedriver.storage.googleapis.com/$CHROME_DRIVER_VERSION/chromedriver_linux64.zip -P ~/
unzip ~/chromedriver_linux64.zip -d ~/
rm ~/chromedriver_linux64.zip
sudo mv -f ~/chromedriver /usr/local/bin/chromedriver
sudo chown root:root /usr/local/bin/chromedriver
sudo chmod 0755 /usr/local/bin/chromedriver
```

xvfb stands for X virtual framebuffer which acts as an in memory display server to run out tests headlessly
To Install xvfb
```
sudo apt install xvfb
```

To run Tests cd to test suite directory then
```
codecept run --steps --html
```

### For BackstopJS


To install BackstopJs, We need NodeJS and npm

Installing NodeJs and npm
```
curl -sL https://deb.nodesource.com/setup_10.x | sudo -E bash -
sudo apt-get install -y nodejs
```
Installing BackstopJS
```
npm install -g backstopjs
```
If that doesnt work
```
sudo npm i -g backstopjs --unsafe-perm=true --allow-root
```
After BackstopJs is installed, cd into the backstopjs directory and
```
sudo backstop test
```
To do visual pixel comparison test on the current set of web urls

### Optional Prerequisites 

Installing Java and Jenkins

```
sudo apt-add-repository ppa:webupd8team/java
sudo apt-get update
sudo apt-get install oracle-java8-installer
java -version
```

```
wget -q -O - https://pkg.jenkins.io/debian/jenkins.io.key | sudo apt-key add -
sudo sh -c 'echo deb http://pkg.jenkins.io/debian-stable binary/ > /etc/apt/sources.list.d/jenkins.list'
sudo apt-get update
sudo apt-get install jenkins

#run
java -jar "/usr/share/jenkins/jenkins.war" --httpPort=8081
```

### Getting Things to Work


### BackstopJS
Go into the autobots directory then the backstopjs directory
```
cd autobots/backstopjs
```
In this directory, the Backstop projected is already initiated with the 50 most visited pages. to test enter
```
sudo backstop test
```
If tests all pass or if the screenshots are satisfactory, then enter
```
backstop approve
```
to update the reference snapshots so that it will be the base for next set of tests.


for the output and report. go to 
```
~/autobots/backstopjs/backstop_data/html_reports/index.html
```

### Codeception
Codeception is a PHP testing framework that uses Selenium Webdriver or Chromedriver as headless browser controller.

## Cron Job for the Tests

set up cron job using
```
crontab -e
```
put the following in the crontab file
```
*/30 * * * * export DISPLAY=:0; /home/username/autobots/scripts/cronRunScript.sh >> /home/username/cron.log 2>&1
```

If backstop does not run then try running cron as root. 

```
sudo su
crontab -e
```

then add the command above into the root's crontab

The cron run script can send an email report to you, edit the email addr in the script file at 
autobots/scripts/cronRunScript.sh

### Break down into end to end tests


### And coding style tests

## Troubleshooting

If crontab does not run and running codeception returns errors such as
```
  [Facebook\WebDriver\Exception\SessionNotCreatedException] Unable to create new service: ChromeDriverService
```
chances are there is a hanging process xvfb or hanging java process running the selenium server
the default port number for this set up is 4444
use the following command
```
netstat -anp|grep "4444"
```
to get the PID of the process holding up the port
then kill the hanging process by using
```
kill -9 'PID'
```

To get rid of chrome zombies that may accumulate if you enter ps -A use
```
pkill -f "(chrome)?(--headless)"
```

## Deployment


## Built With

* [Codeception](https://codeception.com) - Testing Framework built on top of PHPUnit

## Contributing


## Versioning


## Authors

* **holyender** - *Initial work* - [holyender](https://github.com/holyender)

## License

## Acknowledgments
