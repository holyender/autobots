# Automation Tests AutoBots

The purpose of this project is to automate integration and acceptance testing on a website.  This project contains acceptance test suites, visual pixel comparison testing, and scripts to help generate the tests. This project uses Jenkins as the CI/CD build tool for automating, Selenium/Codception/Chromedriver as the headless browser server and testing framework, and BackstopJs/Puppeteer.

The purpose of this project is an automated cotinuous intergration continuous deployment system that also automatically run acceptance testing on the project and build every time new code is committed by a developer. It can also be set to test the overall health and functionality of the website every interval of time.  If anything were to break or cease to function on the main website, then the automated build tool will pick up the error and immediately notify the developer before letting the new commit become prod.

## Getting Started

This Project will be optimized for running Jenkins automation server on an Ubuntu 16.04 LTS Virtual Machine on Microsoft Azure Cloud. The languages that you may want to be familiar with are Python 3, Java 8, JavaScript(NodeJS), and Php 5.

Without the building aspect of the project, there is a option to have the project run as a cron job. Only the testing portion of the project will run. The cron job will run the tests periodically.

### Prerequisites

The Biggest and most important components of this project is Jenkins, Codeception, and BackstopJS. Most other pre-requisite and dependencies are there to run those three things. lets try to avoid dependency hell.
Get Azure Ubuntu 16.04 server
On the server,

Install PHP

```
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-gd php-mysql php-mbstring php-xml libapache2-mod-php
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

