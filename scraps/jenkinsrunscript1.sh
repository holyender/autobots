#!/bin/bash
ls -a
#sudo chmod -R 777 /home/holyender/Documents/ctest/tests/_output
#cd /home/holyender
#cd Documents
#cd ctest
#/home/holyender/codecept/vendor/bin/codecept run --steps --html
cd /home/holyender
cd codecept/vendor/bin
./codecept run tests/acceptance/JoinTest2Cest.php --steps --html