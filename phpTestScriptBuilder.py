import random

def phptestbuilder(file):
	f = open(file, "r")
	for line in f:
		if "URL:" in line:
			print(line +"\n")
		else:
			#print(line)
			editlist.append(line.rstrip("\n"))

def buildphpline(line):
	#print(type(line))
	linelist = line.split(", ")
	#linelist[1] = linelist[1].strip("\n")
	print(linelist)
	return linelist

def phpCodeParser(a):
	a[1].strip("\n")
	if 'password' in a[0]:
		phpCodeList.append("$I->fillField('#" + a[1] + "', '" + password + "');")
	elif 'address1' in a[0]:
		phpCodeList.append("$I->fillField('#" + a[1] + "', '" + address1 + "');")
	elif 'address2' in a[0]:
		phpCodeList.append("$I->fillField('#" + a[1] + "', '" + address2 + "');")
	elif 'city' in a[0]:
		phpCodeList.append("$I->fillField('#" + a[1] + "', '" + city + "');")
	elif 'zip code' in a[0]:
		phpCodeList.append("$I->fillField('#" + a[1] + "', '" + zipcode + "');")
	#elif 'address1' in a[0]:
	#	phpCodeList.append("$I->fillField('#" + a[1] + "', '" + password + "');")
	elif 'form-text' in a[0]:
		if 'account-mail' in a[1]:
			phpCodeList.append("$I->fillField('#" + a[1] + "', '" + accountmail + "');")
		if 'first-name' in a[1]:
			phpCodeList.append("$I->fillField('#" + a[1] + "', '" + firstname + "');")
		if 'last-name' in a[1]:
			phpCodeList.append("$I->fillField('#" + a[1] + "', '" + lastname + "');")
		if 'phone' in a[1]:
			phpCodeList.append("$I->fillField('#" + a[1] + "', '" + phonenum + "');")

			#edit-join-account-contribution
			#edit-join-account-membership-coupon
	elif 'country' in a[0]:
		phpCodeList.append("$I->selectOption('#" + a[1] + "', '" + country + "');")
	elif 'state' in a[0]:
		phpCodeList.append("$I->selectOption('#" + a[1] + "', '" + state + "');")

	elif 'form-select' in a[0]:
		phpCodeList.append("$I->selectOption('#" + a[1] + "', '" + formselect + "');")

	if 'form-submit' in a[0] and 'continue' in a[1]:
		phpCodeList.append("$I->click('#" + a[1] + "');")

def phpUrlParser(URL):
	urlList = URL.split("/")
	#for i in urlList:
		#print(i)


randnum = random.randrange(1,40000)
randUser = str(randnum)

password = "testregisterPassword"
address1 = "123 testaddress1 st."
address2 = "apartment addr2"
city = "testjoincity"
zipcode = "10027"
accountmail = "jointest" + randUser + "@jointest.com"
firstname = "FN" + randUser
lastname = "LN" + randUser
phonenum = "1234567899"

country = "United States"
state = "New York"
formselect = "Dr."




num_lines = sum(1 for line in open('inputurl.txt'))

for i in range(num_lines):
	editlist = []
	URL = ""
	phptestbuilder("idlist" + str(i+1) + ".txt")

	phpCodeList = []
	print(URL)
	phpUrlParser(URL)

	for i in editlist:
		#print(i)
		linelist = buildphpline(i)
		#linelist = filter(None, linelist)
		phpCodeParser(linelist)

	for i in phpCodeList:
		print(i)

