from bs4 import BeautifulSoup
import re
import requests
import sys
from requests.auth import HTTPBasicAuth

payload = {
'edit-name': 'jointest16524@jointest.com',
'edit-pass': 'testregisterPassword'
}

def scrap(url):
# Fill in your details here to be posted to the login form.

	# Use 'with' to ensure the session context is closed after use.
	with requests.Session() as s:
		p = s.post('http://nineelevenmemorialstg.prod.acquia-sites.com/user', data=payload)
	    # print the html returned or something more intelligent to see if it's a successful login page.
		print(p.text)

	    # An authorised request.
		r = s.get('http://nineelevenmemorialstg.prod.acquia-sites.com/gift/individual/member-card')
		print(r.text)



		r = requests.get(url)
		print(r)


		data = r.text
		type(data)

		soup = BeautifulSoup(data)
		soup.prettify()

		#formid = soup.find_all('input', {'id': re.compile(r'edit')})
		#print(formid)
		print("\n")

		scrapRes = soup.find_all('input', id = re.compile('edit')) + soup.find_all('select', id = re.compile('edit'))
		
		#for i in scrapRes:
		#	print(i)
		#type(scrapRes)

		return scrapRes

def findClassId(ret):
	classIdList = []
	for i in ret:
		#print(i['class'], i['id'])
		s = i['class'], i['id']
		classIdList.append(s)
	return classIdList

def parseClassId(classID):
	outList = []
	for i in classID:
		if 'form-text' in i[0]:
			if 'password-field' in i[0]:
				#tmp = ['password', i[1]]
				outList.append(['password', i[1]])
			elif 'password-confirm' in i[0]:
				outList.append(['password', i[1]])
			elif 'thoroughfare' in i[0]:
				outList.append(['address1', i[1]])
			elif 'premise' in i[0]:
				outList.append(['address2', i[1]])
			elif 'locality' in i[0]:
				outList.append(['city', i[1]])
			elif 'postal-code' in i[0]:
				outList.append(['zip code', i[1]])
			else:
				outList.append(['form-text', i[1]])

			#outList.append(tmp)

		elif 'form-select' in i[0]:
			if 'state' in i[0]:
				outList.append(['state', i[1]])
			elif 'country' in i[0]:
				outList.append(['country', i[1]])
			else:
				outList.append(['form-select', i[1]])


		elif 'form-submit' in i[0]:

			outList.append(['form-submit', i[1]])

		else:
			outList.append([''.join(i[0]), i[1]])

		#print(i[1])
	#print(outList)
	return outList

def outFill(arg1, arg2): #deprecated fn
	tmp = [arg1, arg2]
	return tmp

def fromFile(filename):
	f = open(filename,'r')
	for line in f:
		print(line)




def toFile(outList):
	f = open("idlist" + str(tmp) + ".txt","w")
	f.write("URL:" + testurl)
	#f.write("")
	for i in outList:
		f.write(', '.join(i) + "\n")

		f.close()



#f = open(sys.argv[1], 'r')
tmp = 1
#for line in f:

	#testurl = line

testurl = "https://911memorial.org/gift/individual"
scrapResult = scrap(testurl)

classID = findClassId(scrapResult)

outList = parseClassId(classID)

toFile(outList)
tmp +=1
print('\n')
print(testurl + '\n')
for i in outList:
	print(i)

#testurl = "https://911memorial.org/join/individual"


#original with no file input
#scrapResult = scrap(testurl)
#classID = findClassId(scrapResult)
#outList = parseClassId(classID)
#toFile(outList)
#print('\n' + testurl + '\n')
#for i in outList:
	#print(i)

#for i in classID:
#	print(i)

#copyfile("idlist.txt", "")