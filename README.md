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



And repeat

```
until finished
```

End with an example of getting some data out of the system or using it for a little demo

## Running the tests

Explain how to run the automated tests for this system

### Break down into end to end tests

Explain what these tests test and why

```
Give an example
```

### And coding style tests

Explain what these tests test and why

```
Give an example
```

## Deployment

Add additional notes about how to deploy this on a live system

## Built With

* [Dropwizard](http://www.dropwizard.io/1.0.2/docs/) - The web framework used
* [Maven](https://maven.apache.org/) - Dependency Management
* [ROME](https://rometools.github.io/rome/) - Used to generate RSS Feeds

## Contributing

Please read [CONTRIBUTING.md](https://gist.github.com/PurpleBooth/b24679402957c63ec426) for details on our code of conduct, and the process for submitting pull requests to us.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/your/project/tags). 

## Authors

* **Billie Thompson** - *Initial work* - [PurpleBooth](https://github.com/PurpleBooth)

See also the list of [contributors](https://github.com/your/project/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

## Acknowledgments

* Hat tip to anyone whose code was used
* Inspiration
* etc

