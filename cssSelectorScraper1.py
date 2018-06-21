from bs4 import BeautifulSoup
import re
import requests
import random

#r = requests.get("https://www.911memorial.org/user/register")
#r = requests.get("https://www.911memorial.org/join/individual")
#r = requests.get("https://nineelevenmemorialstg.prod.acquia-sites.com/join/individual")
r = requests.get("https://www.911memorial.org/join/individual")
print(r)

data = r.text
soup = BeautifulSoup(data)
soup.prettify()
#print(soup)
#formid = soup.select("div > #edit")
#formid = soup.find_all(re.compile('^id'=))
formid = soup.find_all('input', {'id': re.compile(r'edit')})

selectid = soup.find_all('select', {'id': re.compile(r'edit')})


print(formid)

for element in formid:
	print(element['class'], element['id'])
	if 'form-text' in element['class']:
		if 'form-email' in element['class']:
			print("email")




for element in selectid:
	print(element['class'], element['id'])
